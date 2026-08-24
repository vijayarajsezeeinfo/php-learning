package com.ezeeinfo.ecommerceservice.repository;

import java.util.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import com.ezeeinfo.ecommerceservice.model.Order;

@Repository
public interface OrderRepository extends JpaRepository<Order, Long> {
  
	@Query(value = "SELECT * FROM orders_data WHERE DATE(order_placed_time)=CURDATE()",nativeQuery = true)
	List<Order> findOrdersBookedToday();
}
