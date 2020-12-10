<!DOCTYPE html>
<html>
<title>user_page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<div class="w3-content" style="max-width:1200px ; margin-top: 15px">
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <div class="w3-main" ">
    <div class="w3-hide-large" style="margin-top:83px"></div>
    <header class="w3-container w3-xlarge">
        <p class="w3-left">Welcome!</p>
        <p class="w3-right">
            <a href="basket.php" style="margin-right: 10px;color: black"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm.354-7.646a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                </svg></a>
            <a type="button" href="bookstore.php" style="color: black"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></a>
        </p>
    </header>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="unnamed.jpg" alt="Los Angeles" width="1250" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://ic.pics.livejournal.com/anchiktigra/18346223/5238735/5238735_original.jpg" alt="Chicago" width="1250" height="500">
            </div>
        </div>
    </div>
    <hr>
    <div class="w3-row w3-grayscale">
        <?php
        require_once "connection.php";
        $g_row =  $pdo_conn->query("SELECT * FROM all_book") ;
        foreach($g_row as $row)
        { ?>
            <div class="w3-col l3 s6">
                <div class="w3-container">
                    <img src="<?php echo($row['picture'])?>" class="card-img-top" alt="..." style="height: 250px;width: 100%">
                    <p><?php echo($row['name'])?></p>
                    <h6><?php echo($row['cost'])?>$</h6>
                    <form action="" method="post">

                        <input value="<?php echo($row['book_id'])?>" type="hidden" name="id_user">
                        <button style="margin: -40px 0 0 180px;position: absolute" type="submit" class="btn btn-danger">in basket</button>
                    </form>
</div>
            </div>
        <?php }
        ?>
    </div>
    <hr>
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
<?php
if(!empty($_POST['name'])) {
    require_once "connection.php";
    $sql = "insert into all_book (name, author_name, cost, picture) values (:pn, :mn, :sn, :ps)";
    $pnn = $_POST['name'];
    $mnn = $_POST['author'];
    $snn = $_POST['cost'];
    $pss = $_POST['url'];
    $r = $pdo_conn->prepare($sql);
    $r->bindParam(':pn', $pnn);
    $r->bindParam(':mn', $mnn);
    $r->bindParam(':sn', $snn);
    $r->bindParam(':ps', $pss);
}
?>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</div>
<?php
if(!empty($_POST['id_user'])) {
    require_once "connection.php";
    $sql = "insert into basket (book_id,user_id) values (:pn, :mn)";
    $pnn = $_POST['id_user'];
    $mnn = $_COOKIE['current_user'];
    $r = $pdo_conn->prepare($sql);
    $r->bindParam(':pn', $pnn);
    $r->bindParam(':mn', $mnn);
    if ($r->execute()==true)
    {
    }
    else
        Echo "erorr";
}
?>
</body>
</html>