package com.ezeeinfo.ecommerceservice.model;

import java.util.List;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;
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
@Table(name="carts_data")
public class Cart {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
 private Long id;
	@OneToMany(mappedBy = "cart")
 private List<CartItem> items;
 private Integer activeStatus;
}
