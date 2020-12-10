<!DOCTYPE html>
<html>
<title>Education</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-light-grey">
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:15px">
<div class="w3-bar w3-black  ">
    <a href="bookstore.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
    <a href="https://www.instagram.com/ozekti/" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
    <a href="https://vk.com/book24_ru" class="w3-bar-item w3-button"><i class="fa fa-vk"></i></a>
    <a href="https://www.facebook.com/groups/kioskknig" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
    <a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%96%D0%B0%D0%BD%D0%B4%D0%BE%D1%81%D0%BE%D0%B2%D0%B0+53,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B/@43.2145833,76.8689974,17z/data=!3m1!4b1!4m5!3m4!1s0x388368f7fe61c1f1:0xc76f83cbe5a2706f!8m2!3d43.2145833!4d76.8711861" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>
    <?php
    $_asc="SELECT * FROM category WHERE  id=:pj";

    require_once "connection.php";
    $pn = $_GET['id'];
    $stm = $pdo_conn->prepare($_asc);
    $stm->execute(array(':pj'=>$pn));
    foreach($stm as $row) {
    ?>

<div class="w3-center w3-padding-16"><h1><?php echo $row['name']?></h1></div>
    <div class="w3-row-padding w3-padding-16 w3-center" id="book">
        <hr>

        <hr>
        <?php }?>
        <div class="w3-row w3-grayscale">
            <?php

            $_asc_desc="SELECT all_book.name,category.name,all_book.cost,all_book.picture,category.id,all_book.name as book_name FROM all_book,category WHERE all_book.cat_id=category.id and category.id=:pj";

            require_once "connection.php";
            $pnn = $_GET['id'];
            $stmt = $pdo_conn->prepare($_asc_desc);
            $stmt->execute(array(':pj'=>$pnn));
            foreach($stmt as $row)
            { ?>
                <div class="w3-col l3 s6">
                    <div class="w3-container" style="height: 340px">
                        <img src="<?php echo($row['picture'])?>" class="card-img-top" alt="..." style="height: 250px;width: 100%">
                        <p><?php echo($row['book_name'])?></p>
                        <h6><?php echo($row['cost'])?>$</h6>
                    </div><br>
                </div>
            <?php }
            ?>
        </div>
        <hr>
    </div>
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
            <a href="#" class="w3-bar-item w3-black w3-button">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
        </div>
    </div>
    <footer class="w3-row-padding w3-padding-32" style="background-color: silver">
        <div class="w3-third">
            <h4>Footer</h4>
            <p>Designed and built with all the love in the world using Bootstrap.</p>
            <p>Powered by <a href="#" target="_blank">bookStore</a></p>
        </div>
        <div class="w3-third">
            <h4>About</h4>
            <p><a href="#">About us</a></p>
            <p><a href="#">We're hiring</a></p>
            <p><a href="#">Support</a></p>
            <p><a href="#">Return</a></p>
            <p><a href="#">Help</a></p>
        </div>
        <div class="w3-third">
            <h4>Store</h4>
            <p><i class="fa fa-fw fa-map-marker"></i>Book Store</p>
            <p><i class="fa fa-fw fa-phone"></i> 87004546123</p>
            <p><i class="fa fa-fw fa-envelope"></i> book@mail.com</p>
            <h4>We accept</h4>
            <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
            <br>
            <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
        </div>
    </footer>
</div>
</body>
</html>
