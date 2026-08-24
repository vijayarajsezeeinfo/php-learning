package com.ezeeinfo.ecommerceservice.dto;

import java.util.List;

import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Builder
public class OrderDto {
 private Long id;
 private String status;
 private List<String> orderItemNames;
}
