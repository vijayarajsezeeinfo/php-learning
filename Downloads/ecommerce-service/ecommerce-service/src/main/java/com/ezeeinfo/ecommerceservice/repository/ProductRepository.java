package com.ezeeinfo.ecommerceservice.repository;

import java.util.List;
import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.ezeeinfo.ecommerceservice.model.Product;

@Repository
public interface ProductRepository extends JpaRepository<Product, Long> {
	Optional<Product> findByName(String name);

	List<Product> findByPrice(Double price);

	List<Product> findByCategory_Name(String categoryName);
}
