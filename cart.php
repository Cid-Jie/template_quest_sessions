<?php 
require 'inc/head.php';
require 'inc/data/products.php';

    if(!isset($_SESSION['loginname'])){
        header('Location: login.php');
        exit();
    }

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php
            foreach ($_SESSION['cart'] as $id_cookie){
                if(isset($catalog[$id_cookie])){
        ?>
                <li> <?= $catalog[$id_cookie]['name'] ?></li>
        <?php
                }
            }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
