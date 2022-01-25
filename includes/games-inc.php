<?php
    // we need database handler and functions to be able to connect to db
    require_once "dbh-inc.php";
    require_once "functions-inc.php";

    if (!isset($_SESSION["username"]))
    {
      header("location: 403.php");
    }
    else
    {
        $results = loadGames($conn);

        // Number of records to show per page
        $rpp = 2;

        if (isset($_GET["page"]))
        {
            $page = $_GET["page"];
        }
        else
        {
            $page = 0;
        }

        // set starting point for list within page
        if ($page > 1) {
            $start = ($page * $rpp) - $rpp;
        }
        else
        {
            $start = 0;
        }

        // Get total number of records
        $numRows = $results->num_rows;

        // Get total number of pages
        $totalPages = ceil($numRows / $rpp);

        // Getting actual data for page
        $results = loadGamesLimit($conn, $start, $rpp);

        // if 0 records, do not show table
        // stop there
        echo "
        <div class='container mt-3'>
            <div class='row'>";

        while ($row = mysqli_fetch_assoc($results)) {
            $id = $row["gameID"];
            $name = $row["name"];
            $desc = $row["descrip"];
            $image = $row["image"];
            echo "<div class='col-md-8 col-lg-7 mt-1'>
            <article class='profile-box'>
            <form method='post' action='games-inc.php?action=add&id=".$row[$id]."'>
                <figure class='floating-image float-start mb-3 me-3'>
                    <h1 class='h1'><img src='../images/". $image ."' alt=''/>" . $name . "</h1>
                </figure>
                <p>" . $desc . "</p>
                <input type='hidden' name='hidden_name' value=".$row["name"]."'>
                <input type='hidden' name='hidden_desc' value=".$row["descrip"]."'>
                <input type='text' name='quantity' class='form-control' value='1'>
                <input type='submit' name='add' class='btn btn-primary' value='Add to Cart'>
            </form>
            </article>
        </div>";
    }

        echo "
        </div>
    </div>
    <aside class='p-1 col-lg-1 mt-2 w-50'>
    <ul class='list-unstyled m-0'>";

        for($i = 1; $i <= $totalPages; $i++)
        {
                echo "<a class='pageNum' href='?page=$i'>$i </a>";
        }

        echo "</ul>
        </aside>";

        if (isset($_POST["add"])){
            if (isset($_SESSION["cart"])){
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
                    echo '<script>window.location="../Website/gamelist.php"</script>';
                }else{
                    echo '<script>alert("Product is already Added to Cart")</script>';
                    echo '<script>window.location="../Website/gamelist.php"</script>';
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
                        echo '<script>window.location="../Website/gamelist.php"</script>';
                    }
                }
            }
        }
    }

?>
