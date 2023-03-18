<html>
    <head><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Customers</title>
        <!-- Link our CSS file -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmL.cssASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        
	</style>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SPARKS BANK</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex ms-auto mb-2 mb-lg-1">
                        <li class="nav-item">
                            <a class="nav-link active item" aria-current="page" href="transfer_money.php">Transfer Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active item" aria-current="page" href="transactions.php">Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active item" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active item" aria-current="page" href="index.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
	    </div>
    
    <?php

    require "db.php";
    $cdquery="SELECT * FROM customer";
    $cdresult=mysqli_query($conn,$cdquery);
    echo '<div >
    <br>
    <br>
    <div class="center col-lg-10 col-md-12 col-sm-12">
        <table class="table table-bordered table-striped">
             <thead class="text-center">
               <tr>
                 <th scope="col">Account Number</th>
                 <th scope="col">Name</th>
                 <th scope="col">Email id</th>
                 <th scope="col">Current Balance</th>
               </tr>
             </thead>' ;
    
    while ($cdrow=mysqli_fetch_array($cdresult)) 
    {
        echo "
    <tr><td>".$cdrow['accId']."</td><td>".$cdrow['accName']."</td><td>".$cdrow['email']."</td><td>".$cdrow['currentBalance']."</tr>
    ";
    }
    echo "</table>";
    ?>
    </body>

</html>
