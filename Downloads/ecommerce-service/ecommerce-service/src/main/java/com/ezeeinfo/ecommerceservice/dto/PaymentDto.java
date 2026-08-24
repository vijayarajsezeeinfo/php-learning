package com.ezeeinfo.ecommerceservice.dto;

import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
public class PaymentDto {
 private Long id;
 private String paymentMethod;
 private String status;
 private Double amount;
 private long orderId;
}
