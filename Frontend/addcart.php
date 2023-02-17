<?php
    ob_start();
    session_start();
    include("../connection.php");
    if(isset($_POST["id_product"]) && isset($_POST["num"])){
        //echo $_POST["num"];
        $id = $_POST["id_product"];
        $num = $_POST["num"];
        $size = $_POST["size"];
        $sqlDetailPro = "SELECT * FROM tbl_product WHERE pro_id= $id";
        $resultDetailPro = $conn->query($sqlDetailPro);
        $rowDetail = $resultDetailPro->fetch();


        if(!isset($_SESSION["cart"])){
            $cart = array(
                $id => array(
                    "name" => $rowDetail[1],
                    "price" => $rowDetail[2],
                    "image" => $rowDetail[6],
                    "size" => $size,
                    "quantity" => $num
                )
            );            
        }else{
            $cart = $_SESSION["cart"]; 
            if(array_key_exists($id,$cart) && ($_SESSION['cart'][$id]['size']==$size)){
                
                $cart[$id] = array(
                        "name" => $rowDetail[1],
                        "price" => $rowDetail[2],
                        "image" => $rowDetail[6],
                        "size" => $size,
                        "quantity" =>$cart[$id]["quantity"] + $num
                );
            }else{
               
                $cart[$id] = array(
                    "name" => $rowDetail[1],
                    "price" => $rowDetail[2],
                    "image" => $rowDetail[6],
                    "size" => $size,
                    "quantity" =>$num
                );    
            }
        }

        $_SESSION["cart"] = $cart;
        //echo $_SESSION["cart"][18]["quanlity"];
       

        $numberProduct = 0;
        foreach($_SESSION["cart"] as $key=>$value){
           $numberProduct +=(int)$value["quantity"];
        }
        // unset($_SESSION["cart"]);
        echo $numberProduct;

    }
?>