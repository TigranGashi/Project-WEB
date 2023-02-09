<?php 
include_once('../Models/products.php');
include_once('../Repository/productRepository.php');

if(isset($_POST['submit'])){
    if(empty($_POST['emri']) || empty($_POST['pershkrimi']) || empty($_POST['cmimi']) || empty($_POST['foto'])){

        echo"<script> alert('Please Fill up all fields!'); </script>";

    }else{
        $emri=$_POST['emri'];
        $pershkrimi=$_POST['pershkrimi'];
        $cmimi=$_POST['cmimi'];
        $foto=$_POST['foto'];
        $id=rand(1,99);

        $products = new Products($id,$emri,$pershkrimi,$cmimi,$foto);
        
        $productRepository= new ProductRepository;
        $productRepository->insertProduct($products);

    }
}

?>