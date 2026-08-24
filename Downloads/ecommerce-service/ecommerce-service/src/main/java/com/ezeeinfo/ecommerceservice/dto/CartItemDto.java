package com.ezeeinfo.ecommerceservice.dto;

import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
public class CartItemDto {
 private Long id;
 private Integer quantity;
 private Long productId;
 private Long cartId;
 private Integer activeStatus;
}
