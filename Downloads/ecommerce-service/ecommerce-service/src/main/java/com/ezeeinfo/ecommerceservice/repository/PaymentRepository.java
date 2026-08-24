package com.ezeeinfo.ecommerceservice.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.ezeeinfo.ecommerceservice.model.Payment;

@Repository
public interface PaymentRepository extends JpaRepository<Payment, Long> {

}
