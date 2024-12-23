<!DOCTYPE html>
<html>
<head>
     <form method="post">
  <link rel="stylesheet" href="home_style.css">
  <link rel="stylesheet" href="home1_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header_style.css">
    <div class="flex-container-header">
        <div class="flex-item-header">
            <img src="images/Team1.png" width="100" height="100">
        </div>
        <div class="flex-item-header">
            <h1>DBMS BANK</h1>
        </div>
    
  <div id="container">  
    <nav>  
     <ul>  
      <li><a href="#">Home</a></li>  
      <li>  
       <a href="#">User Details</a>  
       <ul>  
        <li><a href="#">Employ Details</a></li>  
          
       </ul>  
      </li>  
      <li><a href="#">Queries</a></li>
      <li><a href="Login.html">Log Out</a></li>  
     </ul>  
    </nav>  
   </div>  
   </div>
</head>
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    $Account_number=$_POST['Account_number'];
    $Amount=$_POST['Amount'];

    $sql="UPDATE dbo.Account SET Account_balance = Account_balance + $Amount WHERE Account_no='$Account_number'";
    
    $result=sqlsrv_query($conn,$sql);
   
    if($result){
               echo "<script> alert('Hurray! Money is Added');
                               window.location.href='Main_Employ.html';
                     </script>";}
    else{
        echo "Failed1";

    }            
    
  }
  else{
        echo "Failed";

    }
?>

<body>

      <div class="flex-container">
            <div class="flex-item-1">
              <div class="flex-item-login">
                        <h2 style="text-align:center;">Add Money to Customer</h2>
                    </div>

                    <div class="flex-item-login">
                        <label for="Acc_no"><h3 style="text-align:center;">Account Number:</h3></label>
                        <input style="text-align:center;width:350px;height:40px" type="text" placeholder="Enter Account number" name="Account_number" required>
                    </div>

                    <div class="flex-item-login">
                        <label for="Amount"><h3 style="text-align:center;">Amount:</h3></label>

                        <input style="text-align:center;width:350px;height:40px;" type="numbers" placeholder="Enter Amount" name="Amount" required>
                    </div>

                    <div class="flex-item-login">
                       
                        <button name="submit" type="submit">Submit</button>

        </div>
        </div>
    </div>
  </br>
  </br>
</form>
</body>
</html>