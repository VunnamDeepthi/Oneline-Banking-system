<!DOCTYPE html>
<html>
<head>
    <form method="post">
  <link rel="stylesheet" href="transaction.css">
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
      <li><a href="Main_Customer.html">Home</a></li>  
      <li>  
       <a href="#">User Details</a>  
       <ul>  
        <li><a href="#">Customer Details</a></li>  
         <li><a href="Login.html">Log Out</a></li>   
       </ul>  
      </li>  
      <li><a href="#">Loan</a></li>    
      <li><a href="#">Help</a></li>
     </ul>  
    </nav>  
   </div>  
   </div>
</head>

<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    
    $Transaction_id=uniqid();

    $Account_no=$_POST['Account_no'];
    $Account_no_receiver=$_POST['Account_no_receiver'];
    $Amount=$_POST['Amount'];
    $Time_stamp=date('m/d/Y h:i:s a', time());

    $sql="INSERT INTO dbo.Transactions (Transaction_id,Account_no,Account_no_receiver,Amount,Time_stamp ) VALUES('{$Transaction_id}','{$Account_no}','{$Account_no_receiver}','{$Amount}','{$Time_stamp}')";
    
    $sql1="UPDATE dbo.Account SET Account_balance = Account_balance - $Amount WHERE Account_no='$Account_no'";
    $sql2="UPDATE dbo.Account SET Account_balance = Account_balance + $Amount WHERE Account_no='$Account_no_receiver'";

    $result=sqlsrv_query($conn,$sql);
    $result1=sqlsrv_query($conn,$sql1);
    $result2=sqlsrv_query($conn,$sql2);
   
    if($result){

               echo "<script> alert('Hurray! Loan Request is sent');
                               window.location.href='Main_Customer.html';
                     </script>";}
    else{
        echo "Failed1";

    }            
    
}
?>


<body>
<center>
    <div class="flex-container-background">

      <div class="flex-container">
            <div class="flex-item-1">
              <div class="flex-item-login">
                        <h2 style="text-align:center;font-style: italic">Transfer Money</h2>

                    </div>

                    <div class="flex-item-login">
                        <label for="Account_no"><h3 style="text-align:center;">Account Number</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Loan id" name="Account_no" >
                    </div>

                    <div class="flex-item-login">
                        <label for="Username_receiver"><h3 style="text-align:center;">Receiver's Account Number:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Username:" name="Account_no_receiver" >
                    </div>
                    
                  
                    <div class="flex-item-login">
                        <label for="Amount"><h3 style="text-align:center;">Amount:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="int" placeholder="Enter Amount" name="Amount" required="required">
                        
                    </div>


                    <div class="flex-item-login">
                        
                        <button name="submit" type="submit">Submit</button>
                        
                    
                
        </div>
        </div>
    </div>
  </br>
  </br>
  <div class="foot">
</form>
</center>
</body>
</html>

