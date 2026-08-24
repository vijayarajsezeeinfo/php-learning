package com.ezeeinfo.ecommerceservice.model;

import com.fasterxml.jackson.annotation.JsonBackReference;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
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
@Table(name="order_item_data")
public class OrderItem {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
 private Long id;
 private Integer quantity;
 @ManyToOne
 @JoinColumn(name="product_id")
 private Product product;
 @ManyToOne
 @JoinColumn(name="order_id")
 @JsonBackReference("order-items")
 private Order order;
}
