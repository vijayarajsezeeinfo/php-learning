package com.ezeeinfo.ecommerceservice.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ezeeinfo.ecommerceservice.dto.PaymentDto;
import com.ezeeinfo.ecommerceservice.exception.PaymentNotFoundException;
import com.ezeeinfo.ecommerceservice.model.Payment;
import com.ezeeinfo.ecommerceservice.repository.PaymentRepository;

@Service
public class PaymentService {
 @Autowired
 PaymentRepository paymentRepository;
 
 public PaymentDto paymentToDto(Payment payment) {
	return PaymentDto.builder().id(payment.getId()).paymentMethod(payment.getPaymentMethod())
	 .status(payment.getStatus()).amount(payment.getAmount()).orderId(payment.getOrder().getId())
	 .build();
 }
 
 public List<PaymentDto> getAllPayments(){
	 return paymentRepository.findAll().stream().map(payment->paymentToDto(payment)).toList();
 }
 
 public PaymentDto getPaymentById(Long id) {
	 Payment payment= paymentRepository.findById(id).orElseThrow(()->new PaymentNotFoundException("Payment id "+id+" not found"));
	 return paymentToDto(payment);
 }
 
 //We don't need delete payments and update payments. so we don't design
}
