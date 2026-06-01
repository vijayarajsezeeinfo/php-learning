package com.ezeeinfo.ecommerceservice.model;

import com.fasterxml.jackson.annotation.JsonBackReference;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
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
@Table(name="payments_data")
public class Payment {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
 private Long id;
 private String paymentMethod;
 private String status;
 private Double amount;
 @OneToOne
 @JoinColumn(name = "order_id")
 @JsonBackReference("order-payment")
 private Order order;
}
