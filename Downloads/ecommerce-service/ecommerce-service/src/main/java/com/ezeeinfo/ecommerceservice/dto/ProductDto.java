package com.ezeeinfo.ecommerceservice.dto;

import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
public class ProductDto {
 private Long id;
 private String name;
 private String description;
 private double price;
 private int stockQuantity;
 private String categoryName;
 private int activeStatus;
}
