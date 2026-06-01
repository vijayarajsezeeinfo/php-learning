package com.ezeeinfo.ecommerceservice.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ezeeinfo.ecommerceservice.dto.PaymentDto;
import com.ezeeinfo.ecommerceservice.service.PaymentService;

@RestController
@RequestMapping("/payment")
public class PaymentController {
 
	@Autowired
	PaymentService paymentService;
	
	@GetMapping("/")
	public ResponseEntity<List<PaymentDto>> getAllPayments(){
		return ResponseEntity.status(HttpStatus.OK).body(paymentService.getAllPayments());
	}
	
	@GetMapping("/{id}")
	public ResponseEntity<PaymentDto> getPaymentById(@PathVariable("id") Long id){
		return ResponseEntity.status(HttpStatus.OK).body(paymentService.getPaymentById(id));
	}
	
}
