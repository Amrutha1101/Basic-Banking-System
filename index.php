<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmL.cssASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>   
    <div>
	    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SPARKS BANK</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex ms-auto mb-2 mb-lg-1">
            <li class="nav-item item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item item">
            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
            </li>
        </ul>
        </div>

        </div>
        </nav>
	</div>
    <!-- Navbar Section Ends Here -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 mb-3">
            <div class="card col-md-12 col-sm-12" style="width: 19rem;">
              <img src="images/viewCustomer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                                <a href="view_customers.php" class="btn btnhover" >View Customers</a>
                    </div>
            </div>

            <div class="card" style="width: 19rem;">
                <img src="images/transferMoney.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Transfer Money</h5>
                                <a href="transfer_money.php" class="btn btnhover">Transfer</a>
                    </div>
            </div>

            <div class="card" style="width: 19rem;">
                <img src="images/moneyHistory.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">History</h5>
                                <a href="transactions.php" class="btn btnhover">View Transactions</a>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
            <div class="footer-copyright">
                <p>Developed by C K Amrutha &copy;2023 </p>
            </div>
        </div>
    </footer>
    
</body>
</html>
<?php
include 'db.php';
?>