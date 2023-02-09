<?php

include_once('../Database/databaseConnection.php');

class ProductRepository{
    private $connection;

    function __construct(){
        $conn= new DatabaseConnection;

        $this->connection=$conn->startConnection();
    }

    function insertProduct($products){
        $conn=$this->connection;

        $id=$products->getId();
        $emri=$products->getEmri();
        $pershkrimi=$products->getPershkrimi();
        $cmimi=$products->getCmimi();
        $foto=$products->getFoto();


        $sql="INSERT INTO products(Id,Emri,Pershkrimi,Cmimi,Foto) VALUES(?,?,?,?,?)";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$emri,$pershkrimi,$cmimi,$foto]);

        echo"<script> alert('You have successfully Add Produc'); </script>";
    }
    
    function getAllProducts(){
        $conn =$this->connection;

        $sql="SELECT * FROM products";

        $statement=$conn->query($sql);
        $products=$statement->fetchAll();

        return $products;
    }

    function getProductById($id){

        $conn=$this->connection;

        $sql="SELECT * FROM products WHERE id='$id' ";

        $statement=$conn->query($sql);
        $products=$statement->fetch();
        return $products;

    }

    function updateProduct($id,$emri,$pershkrimi,$cmimi,$foto){

        $conn =$this->connection;

        $sql="UPDATE products SET emri=?, $pershkrimi=?, cmimi=?, foto=? where id=? ";

        $statement=$conn->prepare($sql);

        $statement->execute([$id,$emri,$pershkrimi,$cmimi,$foto]);

        echo "<script> alert('Product has been updated!')</script>";

    }

    function deleteProduct($id){
        $conn = $this->connection;

        $sql="DELETE FROM products WHERE id=?";

        $statement=$conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script> alert('Product has been deleted!'); </script>";
    }

}

?>