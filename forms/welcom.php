<?php 
    require('../php_logic/connector.php');
    require('../php_logic/Student_Registration_Val.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQS Index</title>


    <!-- Load an icon library -->
    <script src="https://kit.fontawesome.com/1065cceb90.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/index.css">

</head>

<body >

    <div >
        <header class="header-Section">

            <div class="main">
                <div class="logo">
                <a href="index.php"><img src="../logo/SQSLogo.png" alt="SQS"></a>
                </div>
            </div>
            <div style="text-align: center; color:#fff; padding-top:20px;" >
                <h1>STUDENT QUIZ SYSTEM</h1>
            </div>

        </header><br><br><br>


        <section class="Main">

            
        
            <div class="btn" style="item-align: center; margin-top: 40px; margin-left: 20%; margin-right: 20%;">
                
                <?php if (isset($_SESSION['message'])): ?>
               <div class="welcom_message"  style="background:#cccccc; color:#000;  
                    border: 2px solid #fff; border-radius: 2px;">
                    <?php
                     echo $_SESSION['message']; 
                     unset($_SESSION['message']);
                     ?>
                    <!-- Your registration is successful! You are now logged in! -->
                </div>
                <?php endif;?>

                <div class="he3"><br>
                <h3  style="color:#fff; font-size: 20px;">Welcom,   <?php echo $_SESSION['name']; ?></h3><br>

                <a href="../index.php" class="btn"  style="width:auto;">Logout</a><br><br>

                </div>
                
                <?php if (!$_SESSION['verified']): ?>
                <div class="alert alert-warning" style="background:#ae774b;
                    border: 2px solid #fff; border-radius: 2px;">
                    
                You need to verify your account.    
                Sign in to your email account and 
                click on the verification link we  
                just email you at <strong><?php echo $_SESSION['email']; ?></strong>

                </div>
                <?php endif;?>

                <?php if ($_SESSION['verified']): ?>

                    <button>I am verified!</button>

                <?php endif;?>


            </div>
        </section>
    </div>
</body>

</html>