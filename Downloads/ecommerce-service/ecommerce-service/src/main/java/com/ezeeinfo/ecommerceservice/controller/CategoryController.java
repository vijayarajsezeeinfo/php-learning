package com.ezeeinfo.ecommerceservice.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ezeeinfo.ecommerceservice.model.Category;
import com.ezeeinfo.ecommerceservice.service.CategoryService;

@RestController
@RequestMapping("/category")
public class CategoryController {
  @Autowired
  CategoryService categoryService;
  
   @PostMapping("/")
   public ResponseEntity<?> addCategory(@RequestBody Category category){
	   return categoryService.addCategory(category);
   }
}
