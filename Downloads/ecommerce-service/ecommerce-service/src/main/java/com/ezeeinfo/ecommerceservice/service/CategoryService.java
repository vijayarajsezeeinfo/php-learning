package com.ezeeinfo.ecommerceservice.service;


import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Service;

import com.ezeeinfo.ecommerceservice.model.Category;
import com.ezeeinfo.ecommerceservice.repository.CategoryRepository;

@Service
public class CategoryService {

	@Autowired
	CategoryRepository categoryRepository;
	
	public ResponseEntity<?> addCategory(Category category){
		
		List<String> categories= categoryRepository.findAll().stream().map(c->c.getName()).toList();
		if(categories.contains(category.getName())) return ResponseEntity.status(HttpStatus.CONFLICT).body("Category Already Exists");
		categoryRepository.save(category);
		return ResponseEntity.status(HttpStatus.OK).body(category+" is added");
	}
}
