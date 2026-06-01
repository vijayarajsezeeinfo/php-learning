package com.ezeeinfo.ecommerceservice.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ezeeinfo.ecommerceservice.constants.ActiveStatus;
import com.ezeeinfo.ecommerceservice.dto.CartItemDto;
import com.ezeeinfo.ecommerceservice.exception.CartItemNotFoundException;
import com.ezeeinfo.ecommerceservice.exception.CartNotFoundException;
import com.ezeeinfo.ecommerceservice.model.CartItem;
import com.ezeeinfo.ecommerceservice.repository.CartItemRepository;
import com.ezeeinfo.ecommerceservice.repository.CartRepository;
import com.ezeeinfo.ecommerceservice.repository.ProductRepository;

@Service
public class CartItemService {

	@Autowired
	CartItemRepository cartItemRepository;
	@Autowired
	CartRepository cartRepository;
	@Autowired
	OrderService orderService;
	@Autowired
	ProductRepository productRepository;

	CartItemService(OrderService orderService) {
		this.orderService = orderService;
	}

	public CartItemDto cartItemToDto(CartItem cartItem) {
		return CartItemDto.builder().id(cartItem.getId()).quantity(cartItem.getQuantity())
				.productId(cartItem.getProduct().getId()).cartId(cartItem.getCart().getId())
				.activeStatus(cartItem.getActiveStatus()).build();
	}

	public List<CartItemDto> getAllCartItems() {
		return cartItemRepository.findAll().stream().filter(cItem -> cItem.getActiveStatus() == 1)
				.map(cItem -> cartItemToDto(cItem)).toList();
	}

	public CartItemDto getCartItemById(Long id) {
		CartItem item = cartItemRepository.findById(id)
				.orElseThrow(() -> new CartItemNotFoundException("Cart Item id " + id + " is not found"));
		return cartItemToDto(item);
	}

	public CartItemDto addCartItem(CartItem cartItem) {
		if (cartItem.getId() != null && cartItemRepository.findById(cartItem.getId()).isPresent()) {
			throw new IllegalArgumentException("Cart Item Already Exists");
		}

		if (cartItem.getCart() == null || cartItem.getCart().getId() == null) {
			throw new CartNotFoundException("Cart Not Found");
		}

		cartRepository.findById(cartItem.getCart().getId())
				.orElseThrow(() -> new CartNotFoundException("Cart Not Found"));

		List<Long> availableCartIDsList = cartItemRepository.findAll().stream().map(i -> i.getCart().getId()).toList();

		if (availableCartIDsList.contains(cartItem.getCart().getId())) { // if cartItem has existing cart and
																			// if that cart has same product group
																			// products and increase quantity
			for (CartItem cartItem2 : cartItemRepository.findAll()) {
				if (cartItem2.getProduct().getId() == cartItem.getProduct().getId()
						&& cartItem2.getCart().getId() == cartItem.getCart().getId()) {
					cartItem2.setQuantity(cartItem2.getQuantity() + cartItem.getQuantity());
					return cartItemToDto(cartItemRepository.save(cartItem2));

				}

			}

		}

		return cartItemToDto(cartItemRepository.save(cartItem));

	}

	public CartItemDto updateCartItem(CartItem cartItem) {
		if (cartItem.getId() == null) {
			throw new IllegalArgumentException("Cart Item id is required");
		}
		cartItemRepository.findById(cartItem.getId())
				.orElseThrow(() -> new CartItemNotFoundException("Cart Item " + cartItem + " is not found"));
		return cartItemToDto(cartItemRepository.save(cartItem));
	}

	public CartItemDto deleteCartItemById(Long id) {
		CartItem c = cartItemRepository.findById(id)
				.orElseThrow(() -> new CartItemNotFoundException("Cart Item id " + id + " is not found"));
		c.setActiveStatus(ActiveStatus.DELETED);
		cartItemRepository.save(c);
		return cartItemToDto(c);
	}

	
}
