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

import com.ezeeinfo.ecommerceservice.dto.CartDto;
import com.ezeeinfo.ecommerceservice.model.Cart;
import com.ezeeinfo.ecommerceservice.service.CartService;

@RestController
@RequestMapping("/cart")
public class CartController {

	@Autowired
	CartService cartService;
	
	@GetMapping("/")
	public ResponseEntity<List<CartDto>> getAllCarts(){
		return ResponseEntity.status(HttpStatus.OK).body(cartService.getAllCarts());
	}
	
	@GetMapping("/{id}")
	public ResponseEntity<CartDto> getCartById(@PathVariable Long id){
		return ResponseEntity.status(HttpStatus.OK).body(cartService.getCartById(id));
	}
	
	@PostMapping("/")
	public ResponseEntity<CartDto> addCart(@RequestBody Cart cart){
		return ResponseEntity.status(HttpStatus.OK).body(cartService.addCart(cart));
	}
	
	@PutMapping("/")
	public ResponseEntity<CartDto> updateCart(@RequestBody Cart cart){
		return ResponseEntity.status(HttpStatus.OK).body(cartService.updateCart(cart));
	}
	
	@DeleteMapping("/{id}")
	public ResponseEntity<CartDto> deleteCartById(@PathVariable("id") Long id){
		return ResponseEntity.status(HttpStatus.OK).body(cartService.deleteCartById(id));
	}
}
