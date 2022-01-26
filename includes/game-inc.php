<?php 

require_once "dbh-inc.php";
require_once "functions-inc.php";

$id = $_GET["id"];

$resultData = loadGame($conn, $id);
//$row = mysqli_fetch_assoc($resultData);
$name = $resultData["name"];
$desc = $resultData["descrip"];


if (isset($_POST["add"])){
    echo "test";
    if (isset($_SESSION["cart"])){
        echo "test";
        $item_array_id = array_column($_SESSION["cart"],"product_id");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET[$id],
                'item_name' => $_POST["hidden_name"],
                'item_desc' => $_POST["hidden_desc"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="../Website/game.php"</script>';
        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="../Website/game.php"</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET[$id],
            'item_name' => $_POST["hidden_name"],
            'item_desc' => $_POST["hidden_desc"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["product_id"] == $_GET["id"]){
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="../Website/game.php"</script>';
            }
        }
    }
}

?>