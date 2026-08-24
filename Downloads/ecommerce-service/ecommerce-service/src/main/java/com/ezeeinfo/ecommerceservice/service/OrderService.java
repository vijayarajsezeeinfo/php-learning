package com.ezeeinfo.ecommerceservice.service;

import java.time.LocalDateTime;
import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.ezeeinfo.ecommerceservice.dto.OrderDto;
import com.ezeeinfo.ecommerceservice.exception.InsufficientAmountException;
import com.ezeeinfo.ecommerceservice.exception.NoStockForTheProductException;
import com.ezeeinfo.ecommerceservice.exception.OrderNotFoundException;
import com.ezeeinfo.ecommerceservice.exception.ProductNotFoundException;
import com.ezeeinfo.ecommerceservice.model.Order;
import com.ezeeinfo.ecommerceservice.model.OrderItem;
import com.ezeeinfo.ecommerceservice.model.Product;
import com.ezeeinfo.ecommerceservice.repository.OrderRepository;
import com.ezeeinfo.ecommerceservice.repository.ProductRepository;

@Service
public class OrderService {
	@Autowired
	OrderRepository orderRepository;
	@Autowired
	ProductRepository productRepository;

	// ========================================================
	// CONVERT ORDER TO ORDER DTO
	// ========================================================
	public OrderDto orderToDto(Order order) {
		return OrderDto.builder().id(order.getId()).status(order.getStatus())
				.orderItemNames(order.getItems() == null
	                    ? List.of()
	                            : order.getItems().stream().map(item -> item.getProduct().getName()).toList()).build();
	}

	// ========================================================
	// CONVERT ORDER TO ORDER DTO
	// ========================================================

	// ========================================================
	// GET ALL ORDER
	// ========================================================
	public List<OrderDto> getAllOrders() {
		return orderRepository.findAll().stream().map(order -> orderToDto(order)).collect(Collectors.toList());
	}
	// ========================================================
	// GET ALL ORDER
	// ========================================================

	// ========================================================
	// GET ORDER BY ID
	// ========================================================
	public OrderDto getOrderById(Long id) {
		if (!orderRepository.findById(id).isPresent()) {
			throw new OrderNotFoundException("Order id " + id + " is not found");
		}

		Order order = orderRepository.findById(id).get();
		return orderToDto(order);
	}
	// ========================================================
	// GET ORDER BY ID
	// ========================================================
	
	
	// ========================================================
	// GET ALL ORDERS BOOKED TODAY
	// ========================================================
	 public List<OrderDto> getAllTodayOrders() {
		 return orderRepository.findOrdersBookedToday().stream().map(order->orderToDto(order)).toList();
	 }
	
	// ========================================================
	// GET ALL ORDERS BOOKED TODAY
	// ========================================================

	// ========================================================
	// ADD ORDER
	// ========================================================
	
	    //if fails everything will  rollback
	public OrderDto addOrder(Order order) {
		 //if order has id, and that id already present in db, that is duplicate order.so throw exception
		if (order.getId() != null && orderRepository.findById(order.getId()).isPresent()) {
			throw new IllegalArgumentException("Order Already Exists");
		}
		
		System.out.println(1);
				
		if (order.getPayment() != null) { // if payment is available for input order,
			order.getPayment().setOrder(order);   //at that time only we copy order id
		}									// for that particular payment (in payment table)
			
		
		if (order.getItems() != null) { // if OrderItems are available for input order,
			                            //at that time only we copy order
										// id for each order item ( in order item table)
			System.out.println(2);	
			double actualTotalAmount=0.0;
			for(OrderItem item: order.getItems()) {
				
		    	Product product = productRepository.findById(item.getProduct().getId()) 
						.orElseThrow(() -> new ProductNotFoundException("Product id " + item.getProduct().getId() + " not found"));
				
		    	if(product.getActiveStatus()!=1) throw new ProductNotFoundException("Product is not active");
		    	
			    actualTotalAmount+=product.getPrice()*item.getQuantity();
			
		    	if(product.getStockQuantity()< item.getQuantity()) throw new NoStockForTheProductException(product+" No Stock.");
		    	System.out.println(3);
		    	item.setOrder(order);
		    	item.setProduct(product);
			    product.setStockQuantity(product.getStockQuantity()-item.getQuantity());;
			}
			System.out.println(4);
			if(order.getPayment() == null) {
			    throw new IllegalArgumentException("Payment details required");
			}
			System.out.println(5);
			if (order.getPayment().getAmount() < actualTotalAmount) {
			    throw new InsufficientAmountException("Your payment amount is " + order.getPayment().getAmount() +
			                                          ". But this order is worth " + actualTotalAmount);
			}
			
			
		}
		System.out.println(6);
		order.setOrderPlacedTime(LocalDateTime.now());
		order.setOrderDeliveringTime(order.getOrderPlacedTime().plusHours(24));
		List<Product> products=   order.getItems().stream().map(p->p.getProduct()).toList();
		
		System.out.println(7);
		for (Product product007 : products) {
			productRepository.save(product007);
		}		
		System.out.println(8);
		return orderToDto(orderRepository.save(order));
	}
	// ========================================================
	// ADD ORDER
	// ========================================================

	// ========================================================
	// UPDATE ORDER
	// ========================================================
	public OrderDto updateOrder(Order order) {
		orderRepository.findById(order.getId()).orElseThrow(()->new OrderNotFoundException("Order "+order+" not found"));
		return orderToDto(orderRepository.save(order));
	}
	// ========================================================
	// UPDATE ORDER
	// ========================================================

	// ========================================================
	// DELETE ORDER
	// ========================================================
	public OrderDto deleteOrderById(Long id) {
		 Order order = orderRepository.findById(id).orElseThrow(()->new OrderNotFoundException("Order id "+id+" not found"));
		orderRepository.deleteById(id);
		return orderToDto(order);
	}
	// ========================================================
	// DELETE ORDER
	// ========================================================
}
