package com.ezeeinfo.ecommerceservice.service;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ezeeinfo.ecommerceservice.constants.ActiveStatus;
import com.ezeeinfo.ecommerceservice.dto.CartDto;
import com.ezeeinfo.ecommerceservice.exception.CartNotFoundException;
import com.ezeeinfo.ecommerceservice.model.Cart;
import com.ezeeinfo.ecommerceservice.repository.CartRepository;

@Service
public class CartService {

	@Autowired
	CartRepository cartRepository;

	public CartDto cartToDto(Cart cart) {
		return CartDto.builder().id(cart.getId())
				.itemIds(cart.getItems() == null ? List.of() : cart.getItems().stream().map(i -> i.getId()).toList())
				.activeStatus(cart.getActiveStatus()).build();
	}

	public List<CartDto> getAllCarts() {
		return cartRepository.findAll().stream().filter(c -> c.getActiveStatus() == 1).map(c -> cartToDto(c))
				.collect(Collectors.toList());
	}

	public CartDto getCartById(Long id) {
		Cart c = cartRepository.findById(id)
				.orElseThrow(() -> new CartNotFoundException("Cart id " + id + " is not found"));
		return cartToDto(c);
	}

	public CartDto addCart(Cart cart) {
		if (cart.getId() != null && cartRepository.findById(cart.getId()).isPresent()) {
			throw new IllegalArgumentException("Cart Already Exists");
		}
		return cartToDto(cartRepository.save(cart));
	}

	public CartDto updateCart(Cart cart) {
		if (cart.getId() == null) {
			throw new IllegalArgumentException("Cart id is required");
		}
		cartRepository.findById(cart.getId())
				.orElseThrow(() -> new CartNotFoundException("Cart " + cart + " is not found"));
		return cartToDto(cartRepository.save(cart));
	}

	public CartDto deleteCartById(Long id) {
		Cart c = cartRepository.findById(id)
				.orElseThrow(() -> new CartNotFoundException("Cart id " + id + " is not found"));
		c.setActiveStatus(ActiveStatus.DELETED);
		cartRepository.save(c);
		return cartToDto(c);
	}
}
