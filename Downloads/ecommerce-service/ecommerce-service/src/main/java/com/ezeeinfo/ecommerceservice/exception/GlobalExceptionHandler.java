package com.ezeeinfo.ecommerceservice.exception;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.http.converter.HttpMessageNotReadableException;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;

@ControllerAdvice
public class GlobalExceptionHandler {

	@ExceptionHandler(Exception.class)
	public ResponseEntity<String> handleException(Exception e){
		return ResponseEntity.status(HttpStatus.INTERNAL_SERVER_ERROR)
				.body("Something went wrong "+e.getMessage());
	}
	
	@ExceptionHandler(IllegalArgumentException.class)
	public ResponseEntity<String> handleIllegalArgument(IllegalArgumentException e) {
	    return ResponseEntity.status(HttpStatus.BAD_REQUEST)
	            .body("Exception: " + e.getMessage());
	}
	
	@ExceptionHandler(HttpMessageNotReadableException.class)
	public ResponseEntity<String> handleJsonError(HttpMessageNotReadableException e) {
	    return ResponseEntity
	            .badRequest()
	            .body("JSON Error: " + e.getMostSpecificCause().getMessage());
	}
	
	@ExceptionHandler(ProductNotFoundException.class)
	public ResponseEntity<String> handleProductNotFound(ProductNotFoundException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND)
				.body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(OrderNotFoundException.class)
	public ResponseEntity<String> handleOrderNotFound(OrderNotFoundException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND)
				.body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(InsufficientAmountException.class)
	public ResponseEntity<String> handleInsufficientAmount(InsufficientAmountException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND)
				.body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(PaymentNotFoundException.class)
	public ResponseEntity<String> handlePaymentNotFound(PaymentNotFoundException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(NoStockForTheProductException.class)
	public ResponseEntity<String> handleNoStockForTheProduct(NoStockForTheProductException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(CartNotFoundException.class)
	public ResponseEntity<String> handleCartNotFoundException(CartNotFoundException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Exception: "+e.getMessage());
	}
	
	@ExceptionHandler(CartItemNotFoundException.class)
	public ResponseEntity<String> handleCartItemNotFoundException(CartItemNotFoundException e){
		return ResponseEntity.status(HttpStatus.NOT_FOUND).body("Exception: "+e.getMessage());
	}
}
