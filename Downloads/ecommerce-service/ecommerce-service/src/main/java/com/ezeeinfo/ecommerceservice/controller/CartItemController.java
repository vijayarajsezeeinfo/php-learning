package com.ezeeinfo.ecommerceservice.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ezeeinfo.ecommerceservice.dto.CartItemDto;
import com.ezeeinfo.ecommerceservice.dto.OrderDto;
import com.ezeeinfo.ecommerceservice.model.CartItem;
import com.ezeeinfo.ecommerceservice.service.CartItemService;

@RestController
@RequestMapping("/cart/item")
public class CartItemController {
	@Autowired
	CartItemService cartItemService;
	
	@GetMapping("/")
	public ResponseEntity<List<CartItemDto>> getAllCartItems(){
		return ResponseEntity.status(HttpStatus.OK).body(cartItemService.getAllCartItems());
	}
	
	@GetMapping("/{id}")
	public ResponseEntity<CartItemDto> getCartItemById(@PathVariable Long id){
		return ResponseEntity.status(HttpStatus.OK).body(cartItemService.getCartItemById(id));
	}
	
	@PostMapping("/")
	public ResponseEntity<CartItemDto> addCartItem(@RequestBody CartItem cartItem){
		return ResponseEntity.status(HttpStatus.OK).body(cartItemService.addCartItem(cartItem));
	}
	
	
	@PutMapping("/")
	public ResponseEntity<CartItemDto> updateCartItem(@RequestBody CartItem cartItem){
		return ResponseEntity.status(HttpStatus.OK).body(cartItemService.updateCartItem(cartItem));
	}
	
	@DeleteMapping("/{id}")
	public ResponseEntity<CartItemDto> deleteCartItemById(@PathVariable("id") Long id){
		return ResponseEntity.status(HttpStatus.OK).body(cartItemService.deleteCartItemById(id));
	}
	
	
}
