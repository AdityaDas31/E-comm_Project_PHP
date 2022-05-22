<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    

</head>
<body>
    <style>
        a:hover{
        transform: scale(1.1);
    }
        a{
        transition: transform .5s;
    }
    </style>
<div class="header">
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
        <a href="cart.php"><img src="images/cart.png" alt="cart" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" 
        onclick ="menutoggle()">
    </div>
</div>

<div class="shopping-cart">
<div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-12 p-5 bg-transparent rounded shadow-lg mb-5 mt-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="p-2 px-3 text-uppercase">Serial No.</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">Product Name</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">Product Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Product Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">Total Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">Update</div>
                  </th>
                  <th scope="col" class="border-0 bg-transparent text-dark">
                    <div class="py-2 text-uppercase">Update</div>
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php
                       session_start();
                       $pTotal = 0;
                       $Total = 0;
                       $i = 0;
                       if(isset($_SESSION['cart'])){
                           foreach($_SESSION['cart'] as $key=> $value){
                               $pTotal = $value['productPrice'] * $value['productQuantity'];
                               $Total += $value['productPrice'] * $value['productQuantity'];
                               $i = $key+1;
                               echo"
              <form action='Insertcart.php' method='POST'>             
                <tr>
                  <td class='border-0 align-middle'><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$i</strong></td>
                  <td class='border-0 align-middle'><input type='hidden' name='PName' value ='$value[productName]'>&nbsp;&nbsp;$value[productName]</td>
                  <td class='border-0 align-middle'><input type='hidden' name='PPrice' value ='$value[productPrice]'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs $value[productPrice]</td>
                  <td class='border-0 align-middle'><input type='text' name='PQuantity' class='text-center' value ='$value[productQuantity]'></td>
                  <td class='border-0 align-middle'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs $pTotal</td>
                  <td><button name='update' class='border-0 text-center btn btn bg-transparent text-dark'><i class='fa-solid fa-pen-clip'></i></button></td>
                  <td><button name='remove' class='border-0 text-center btn btn bg-transparent text-dark'><i class='fa-solid fa-trash'></i></button></td>
                  <td><input type='hidden' name='item' value= '$value[productName]'></td>
                </tr>
                </form>";
              } 
                           
            }
            ?>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 fs-5 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold"><?php echo 'Rs '.$Total ?></h5>
              </li>
            </ul><?php
                if(isset($_SESSION['user'])){
                echo "<div class='text-end'><a href='Proced_To_Pay.php' class='btn btn-dark border rounded-pill py-2 btn-block'>Procceed to checkout</a></div>";
                }
                else{
                    echo "<div class='text-end'><a href='login.php'><input type='submit' value='Login'></a></div>";                    
                }

                ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>










 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 class="sizeb">Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="image">
                    <img src="images/app-store.png" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo3.png" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3 class="size">Useful Links</h3>
                <ul class="sizec">
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Discount</li>
                    
                </ul>
            </div>
            <div class="footer-col-4">
                <h3 class="sizea">Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>

<!-- ----------js for toggle menu----------- -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
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