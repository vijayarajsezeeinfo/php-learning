package com.ezeeinfo.ecommerceservice.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.ezeeinfo.ecommerceservice.model.Cart;

@Repository
public interface CartRepository extends JpaRepository<Cart, Long> {

}
