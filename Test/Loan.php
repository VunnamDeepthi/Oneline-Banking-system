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
    $Loan_id=$_POST['Loan_id'];
    $Username=$_POST['Username'];
    $LoanType=$_POST['LoanType'];
    $Duration =$_POST['Duration'];

    $LoanAmount=$_POST['LoanAmount'];


    $sql="INSERT INTO dbo.Loan (Loan_id,Username,Loan_type,Duration,Loan_amount) VALUES('{$Loan_id}','{$Username}','{$LoanType}','{$Duration}','{$LoanAmount}')";
    
    
    $result=sqlsrv_query($conn,$sql);
   
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
                        <h2 style="text-align:center;font-style: italic">Loan Details</h2>

                    </div>

                    <div class="flex-item-login">
                        <label for="Username"><h3 style="text-align:center;">Loan id</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Loan id" name="Loan_id" >
                    </div>

                    <div class="flex-item-login">
                        <label for="Username"><h3 style="text-align:center;">Username</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Username:" name="Username" >
                    </div>
                    
                    <div class="flex-item-login">
                    <p><a style="color:white;"></a></p>
                    <label for="LoanType"><h3 style="text-align:center;">Loan Type</h3></label>
                    <select name="LoanType" required>
                    <option value="Home">Home</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Gold">Gold</option>
                    <option value="Business">Business</option>
                    <option value="Education">Education</option>
                    </select>
                    </div>

                    <div class="flex-item-login">
                        <label for="Username"><h3 style="text-align:center;">Duration</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Duration" name="Duration" >
                    </div>


                    <div class="flex-item-login">
                        <label for="LoanAmount"><h3 style="text-align:center;">Loan Amount:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="tel" placeholder="Enter Loan Amount" name="LoanAmount" required="required1">
                        
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

