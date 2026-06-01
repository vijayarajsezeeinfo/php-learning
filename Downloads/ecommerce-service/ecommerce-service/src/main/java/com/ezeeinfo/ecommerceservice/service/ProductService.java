package com.ezeeinfo.ecommerceservice.service;

import java.util.List;
import java.util.stream.Collectors;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ezeeinfo.ecommerceservice.constants.ActiveStatus;
import com.ezeeinfo.ecommerceservice.dto.ProductDto;
import com.ezeeinfo.ecommerceservice.exception.ProductNotFoundException;
import com.ezeeinfo.ecommerceservice.model.Product;
import com.ezeeinfo.ecommerceservice.repository.ProductRepository;

@Service
public class ProductService {
	@Autowired
	ProductRepository productRepository;

	public ProductDto productToDto(Product p) {

		return ProductDto.builder().id(p.getId()).name(p.getName()).description(p.getDescription()).price(p.getPrice())
				.stockQuantity(p.getStockQuantity()).categoryName(p.getCategory().getName()).activeStatus(p.getActiveStatus()).build();
	}

	public List<ProductDto> getAllProducts() {
		return productRepository.findAll().stream().filter(product->product.getActiveStatus()==1).map(product -> productToDto(product)).collect(Collectors.toList());
	}

	public ProductDto addProduct(Product product) {
		if (productRepository.findByName(product.getName()).isPresent()) {
			throw new IllegalArgumentException("Product Already Exists");
		}
		return productToDto(productRepository.save(product));
	}

	public ProductDto getProductById(Long id) {
		if (!productRepository.findById(id).isPresent()) {
			throw new ProductNotFoundException("Product id " + id + " is not found");
		}
		Product product = productRepository.findById(id).get();
		return productToDto(product);
	}

	public ProductDto getProductByName(String name) {
		if (!productRepository.findByName(name).isPresent()) {
			throw new ProductNotFoundException("Product " + name + " is not found");
		}
		Product product = productRepository.findByName(name).get();
		return productToDto(product);
	}

	public List<ProductDto> getProductsByPrice(double price) {
		return productRepository.findByPrice(price).stream().map(product -> productToDto(product)).toList();
	}

	public List<ProductDto> getProductsByCategory(String categoryName) {
		return productRepository.findByCategory_Name(categoryName).stream().map(product -> productToDto(product)).toList();
	}
	
	public ProductDto updateProduct(Product product) {
		Product p = productRepository.findById(product.getId()).orElseThrow(()->new ProductNotFoundException("Product  " + product + " is not found"));
//		if (p == null) {
//			throw new ProductNotFoundException("Product " + product + " is not found");
//		}
		return productToDto(productRepository.save(product));
	}

	public ProductDto deleteProductById(Long id) {
		Product p = productRepository.findById(id).orElseThrow(()->new ProductNotFoundException("Product id " + id + " is not found"));
//		if (p == null) {
//			throw ;
//		}
		 
		p.setActiveStatus(ActiveStatus.DELETED); //soft delete
		productRepository.save(p);
		//productRepository.deleteById(id); should not do hard delete
		return productToDto(p);
	}
}
