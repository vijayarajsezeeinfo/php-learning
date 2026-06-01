package com.ezeeinfo.ecommerceservice.model;

import java.time.LocalDateTime;
import java.util.List;

import com.fasterxml.jackson.annotation.JsonManagedReference;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
@Table(name = "orders_data")
public class Order {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
 private Long id;
 private String status;
 private LocalDateTime orderPlacedTime;
 private LocalDateTime orderDeliveringTime;
 @OneToMany(mappedBy = "order", cascade = CascadeType.ALL)
 @JsonManagedReference("order-items")
 private List<OrderItem> items;
 @OneToOne(mappedBy = "order",cascade = CascadeType.ALL)
 @JsonManagedReference("order-payment")
 private Payment payment;
}
