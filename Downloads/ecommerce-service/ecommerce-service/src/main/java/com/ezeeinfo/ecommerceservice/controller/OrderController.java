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

import com.ezeeinfo.ecommerceservice.dto.OrderDto;
import com.ezeeinfo.ecommerceservice.model.Order;
import com.ezeeinfo.ecommerceservice.service.OrderService;

@RestController
@RequestMapping("/order")
public class OrderController {

	@Autowired
	OrderService orderService;
	
	@GetMapping("/")
	public ResponseEntity<List<OrderDto>> getAllOrders(){
		return ResponseEntity.status(HttpStatus.OK)
				.body(orderService.getAllOrders());
	}
	
	
	@GetMapping("/{id}")
	 public ResponseEntity<OrderDto> getOrderById(@PathVariable("id") Long id){
		 return ResponseEntity.status(HttpStatus.OK).body(orderService.getOrderById(id));
	 }
	
	@GetMapping("/today")
	public ResponseEntity<List<OrderDto>> getAllTodayOrders(){
		return ResponseEntity.status(HttpStatus.OK).body(orderService.getAllTodayOrders());
	}
	
	
	@PostMapping("/")
	 public ResponseEntity<OrderDto> addOrder(@RequestBody Order Order){
		 return ResponseEntity.status(HttpStatus.ACCEPTED)
				 .body(orderService.addOrder(Order));
	 }
	
	@PutMapping("/")
	 public ResponseEntity<OrderDto> updateOrder(@RequestBody Order order){
		 return ResponseEntity.status(HttpStatus.OK).body(orderService.updateOrder(order));
	 }
	
	 @DeleteMapping("/{id}")
	 public ResponseEntity<OrderDto> deleteOrderById(@PathVariable("id") Long id){
		 return ResponseEntity.status(HttpStatus.OK).body(orderService.deleteOrderById(id));
	 }
}
