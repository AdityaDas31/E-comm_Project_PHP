<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--Product Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo2.png" alt="logo" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php" class="activee">Home</a></li>
                    <!-- <li><a href="product.php" class="activee">Products</a></li> -->
                    <li><a href="about.html" class="activee">About</a></li>
                    <li><a href="contact.php" class="activee">Contact</a></li>
                    <li><a href="account.php" class="activee">Account</a></li>
                </ul>
            </nav>
            <a href="Form design.html"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
    <!-- -------------single product------------ -->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <div class="row">
                    <?php
                    include 'db.php';
                    if (isset($_POST['search-btn'])) {
                        $name = $_POST['name'];
                        $query = "SELECT * FROM `product` WHERE name='$name'";
                        $query_run = mysqli_query($conn, $query)
                    ?>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_array($query_run)) {

                        ?>
                                <div class='clo-md-6 col-lg-4 m-auto mb-3'>
                                    <form action='Insertcart.php' method='POST'>
                                        <div class='card m-auto border-0' style='width: 16rem;'>
                                            <img src="../images/<?php echo $row['image'] ?>" class='card-img-top' alt='...'>
                                            <div class='card-body text-left'>

                                                <input type='hidden' name='PName' value="<?php echo $row['name'] ?>">
                                                <input type='hidden' name='PPrice' value="<?php echo $row['price'] ?>">
                                                <input type='hidden' name='PQuantity' value='1' placeholder='Quantity'>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                ?>
                                                    <button type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>Add to Cart</button>
                                                    <a href='Proced_To_Pay2.php?pp=<?php echo $row['price']; ?>'><button type='button' class='btn btn-warning text-white w-100' value='Buy Now'>Buy Now</button></a>
                                                <?php
                                                } else {
                                                    echo "<a href='login.php'><button type='button' class='btn btn-warning text-white w-100 value='Login'>Login</button></a>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                </div>
            </div>
            <div class="col-2">
                <h2 class='hh'><?php echo $row['name'] ?></h2>
                <p class='rupee'>Rs <?php echo $row['price'] ?></p><br>
                <h3>Product Details<span>&reg;</span></h3><br>
                <p><?php echo $row['description'] ?></p>

                <br>
                <br>
                <br>
                <br>

                <p>
                <?php
                            }
                        } else {
                ?>
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM `product` where meta_title='$name'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $product_name = $row['name'];
                                    echo "<div class='card mb-5' style='width: 18rem;'>
                 <a href='" . "productdetails.php?product_name=$product_name" . "'> <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body'>
                  <h5 class='card-title text-center text-dark'>$row[name]</h5>
                  <h5 class='card-text text-center text-dark'>Rs $row[price]</h5></a>
                  </div>
                  </div>";
                                }
                            } else {
                                return false;
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php
                        }
                    } ?>
        </p>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <?php
                $sql = "SELECT * FROM `product` where meta_title='$name'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $product_name = $row['name'];
                        echo "<div class='card mb-5' style='width: 18rem;'>
                 <a href='" . "productdetails.php?product_name=$product_name" . "'> <img src='../images/$row[image]' class='card-img-top' alt='...'>
                  <div class='card-body'>
                  <h5 class='card-title text-center text-dark'>$row[name]</h5>
                  <h5 class='card-text text-center text-dark'>Rs $row[price]</h5></a>
                  </div>
                  </div>";
                    }
                } else {
                    return false;
                }
                ?>
            </div>
        </div>
    </div>





    <!-- ---------------brands--------------- -->


    <!-- ------------footer------------ -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="image">
                        <img src="images/app-store.png" alt="image">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo3.png" alt="logo">
                    <p>Our Purpose Is To Make The Pleasure and Benefits of Your Child Accessible to the Many</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">© Copyright <script>
                    document.write(new Date().getFullYear())
                </script> - TINY TRESSERS</p>
        </div>
    </div>

    <!-- ----------js for toggle menu----------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <!-- --------------JS for product gallery------------- -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }
    </script>

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("MenuItems");
        var btns = header.getElementsByClassName("activeee");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


</body>

</html>