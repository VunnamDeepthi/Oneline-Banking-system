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
      <li><a href="#">Account</a>  
       <ul>  
        <li><a href="#">Create Account</a></li> 
        <li><a href="#">Account Details</a></li>   
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
    $Username=$_POST['Username'];
    $Account_no=$_POST['Account_no'];
    $Account_type=$_POST['Account_type']
    ;

    $sql="INSERT INTO dbo.Account (Account_no,Account_type,Username) VALUES('{$Account_no}','{$Account_type}','{$Username}')";
    $sql1="UPDATE dbo.Account SET Account_balance=0 WHERE Account_no='$Account_no'";

    $result=sqlsrv_query($conn,$sql);
    $result=sqlsrv_query($conn,$sql1);
   
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location.href='Main_Customer.html';
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
<center>
    <div class="flex-container-background">

      <div class="flex-container">
            <div class="flex-item-1">
              <div class="flex-item-login">
                        <h2 style="text-align:center;font-style: italic">Create Account</h2>

                    </div>

                    <div class="flex-item-login">
                        <label for="Username"><h3 style="text-align:center;">Username</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Username:" name="Username" >
                    </div>

                    <div class="flex-item-login">
                        <label for="Username"><h3 style="text-align:center;">Account Number:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Account Number" name="Account_no" >
                    </div>


                    <div class="flex-item-login">
                    <p><a style="color:white;"></a></p>
                    <label for="Account_type"><h3 style="text-align:center;">Account Type</h3></label>
                    <select name="Account_type" required>
                    <option value="savings">savings</option>
                    <option value="current">current</option>
                    <option value="business">business</option>
                    </select>
                    </div>
                    

                    <div class="flex-item-login">
                       
                        <button name="submit" type="submit">Submit</button>
                        
                    
                
        </div>
        </div>
    </div>
  </br>
  </br>
</form>

</center>
</body>
</html>