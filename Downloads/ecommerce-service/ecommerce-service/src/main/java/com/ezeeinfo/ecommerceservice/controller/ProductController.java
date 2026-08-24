package com.ezeeinfo.ecommerceservice.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ezeeinfo.ecommerceservice.dto.ProductDto;
import com.ezeeinfo.ecommerceservice.model.Product;
import com.ezeeinfo.ecommerceservice.service.ProductService;

@RestController
@RequestMapping("/product")
public class ProductController {
 @Autowired
 ProductService productService;
 
 @GetMapping("/")
 public ResponseEntity<List<ProductDto>> getAllProducts(){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.getAllProducts());
 }
 
 @GetMapping("/{id}")
 public ResponseEntity<ProductDto> getProductById(@PathVariable("id") Long id){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.getProductById(id));
 }
 
 @GetMapping("/name/{name}")
 public ResponseEntity<ProductDto> getProductByName(@PathVariable("name") String name){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.getProductByName(name));
 }
 
 @GetMapping("/price/{price}")
 public ResponseEntity<List<ProductDto>> getProductsByPrice(@PathVariable("price") int price){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.getProductsByPrice(price));
 }
 
 @GetMapping("/cat/{category}")
 public ResponseEntity<List<ProductDto>> getProductsByCategory(@PathVariable("category") String category){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.getProductsByCategory(category));
 }
 
 @PostMapping("/")
 public ResponseEntity<ProductDto> addProduct(@RequestBody Product product){
	 return ResponseEntity.status(HttpStatus.ACCEPTED)
			 .body(productService.addProduct(product));
 }
 
 @PutMapping("/")
 public ResponseEntity<ProductDto> updateProduct(@RequestBody Product product){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.updateProduct(product));
 }
 
 @DeleteMapping("/{id}")
 public ResponseEntity<ProductDto> deleteProductById(@PathVariable("id") Long id){
	 return ResponseEntity.status(HttpStatus.OK).body(productService.deleteProductById(id));
 }
 
}
