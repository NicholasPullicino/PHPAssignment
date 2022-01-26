<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Bootstrap JavaScript Bundles -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css"></script>

        <title>Store</title>
    </head>
    <body>
        <?php
            include "../templates/header.php";
            include "../includes/game-inc.php";
        ?>

        <div class='col-md-8 col-lg-9 mt-3 mb-3'>
        <article class='profile-box'>
        <form method='post' action='game.php?id=<?php echo $id;?>'>
            <figure class='floating-image float-start mb-3 me-3'>
                <h1 class='h1'><img src='../images/"<?php echo $image; ?>"' alt=''/><?php echo $name; ?></h1>
            </figure>
            <p><?php echo $desc; ?></p>
            <input type='hidden' name='hidden_id' value="<?php echo $id; ?>">
            <input type='hidden' name='hidden_name' value="<?php echo $name;?>">
            <input type='hidden' name='hidden_desc' value="<?php echo $desc;?>">
            <input type='text' name='item_quantity' class='form-control' value='1'>
            <p></p>
            <button type='submit' name='submit' value='add' class='btn btn-primary'>Add to Cart</button>
        </form>
        </article>
        </div>

        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="10%">Game Name</th>
                <th width="10%">Quantity</th>
                <th width="30%">Description</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["item_desc"]; ?></td>
                            <td><a href="../includes/game-inc.php?action=delete&id=<?php echo $value["product_id"];?>"><span
                                        class="text-danger">Remove Item</span></a></td>
                        <?php
                    }
                }
                ?>
            </table>
        </div>


        <?php
            include "../templates/footer.php";
        ?>
    </body>
</html>
