package com.ezeeinfo.ecommerceservice.exception;

public class CartItemNotFoundException extends RuntimeException {
 public CartItemNotFoundException(String message) {
	super(message); 
 }
}
