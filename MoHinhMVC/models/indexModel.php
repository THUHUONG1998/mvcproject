<?php 
require_once 'dbconnect.php';
class indexModel extends dbconnect {
    function getFeatureProduct(){
        $sql= 'SELECT products.*, page_url.url 
        FROM products, page_url
        WHERE page_url.id = products.id_url AND products.status = 1';
        return $this->getMoreRows($sql);
    }
    function getdataSlide(){
        $sql= 'SELECT * FROM slide WHERE status = 1';
        return $this->getMoreRows($sql);
    }
    function getdataBestSeller(){
        $sql=' SELECT products.*, bill_detail.id_product, SUM(bill_detail.quantity) AS soluong 
        FROM products, bill_detail 
        WHERE products.id= bill_detail.id_product 
        GROUP BY bill_detail.id_product 
        ORDER BY soluong DESC';
        return $this-> getMoreRows($sql);
    }
}

?>