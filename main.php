<?php 
include 'db.php';
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Our Customers</title>

        <!-- Link our CSS file -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmL.cssASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>   
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SPARKS BANK</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex ms-auto mb-2 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link active item" aria-current="page" href="view_customers.php">View Customers</a>
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
    </div>';

?>

<?php
    if(isset($_POST['submit']))
    {
        $from = $_POST['firstname1'];
        $to = $_POST['firstname2'];
        $amt = $_POST['amount'];

        $sql2 = "INSERT INTO history SET 
                senderName = '$from',
                receiverName = '$to',
                amtSent = '$amt'";
        $res2= mysqli_query($conn, $sql2);

        if($res2==true)
        {
            $_SESSION['order'] = "<div class='success text-center'>Data added</div>";
        }
        else
        {
            $_SESSION['order'] = "<div class='error text-center'>Failed to insert data</div>";
        }

    }
?>


<?php
    $sql1="update customer set currentBalance = currentBalance-".$_REQUEST['amount']." where accId=".$_REQUEST['accountno1']."";
    $sql="update customer set currentBalance = currentBalance+".$_REQUEST['amount']." where accId=".$_REQUEST['accountno2']."";
    if (mysqli_query($conn, $sql1)) 
    {
        echo "";
    }
    if (mysqli_query($conn, $sql)) 
    {
        echo '<script>alert("Money transferred successfully")</script>';
        echo "<div class='container'><p class='h3 m-2 text-center title-green'>TRANSACTION SUCCESSFUL</p>";
    } 
    else 
    {
    echo "Error updating record: " . mysqli_error($conn);
    }
?>