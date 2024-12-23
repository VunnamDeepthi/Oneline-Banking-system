<!DOCTYPE html>
<html>
<head>
 <form method="post">

  <link rel="stylesheet" href="transaction.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header_style.css">
    <div class="flex-container-header">
        <div class="flex-item-header">
            <img src="images/Team1.png" width="100" height="100">
        </div>
        <div class="flex-item-header">
            <h1>DBMS BANK</h1>
        </div>
    </div>
    <title>Team one</title>
</head>
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $Number=$_POST['Number'];
    $sql="INSERT INTO dbo.Student (id,name) VALUES('{$Number}','{$name}')";
    $result=sqlsrv_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location.href='login.html';
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

    <div class="flex-container-background">

      <div class="flex-container">
            <div class="flex-item-1">
              <div class="flex-item-login">
                        <h2 style="text-align:center;font-style: italic">Sign-Up Here!</h2>

                    </div>

                    <div class="flex-item-login">
                        <label for="name"><h3 style="text-align:center;">Username:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" required="required" placeholder="Enter Username" name="name" >
                    </div>
                    <div class="flex-item-login">
                      
                        <label for="Date"><h3 style="text-align:center;">Date Of Birth:</h3></label>
                        <input style="text-align:center;width:370px;height:30px;" type="date" id="birthday" name="birthday" required="required"  >
                    </div>

                    <div class="flex-item-login">
                    <p><a style="color:white;"></a></p>
                    <label for="gender"><h3 style="text-align:center;">Gender:</h3></label>
                    <input style="text-align:center" type="radio" name="gender" value="male" required="required2"><a style="text-align:center;color:white;">Male</a>
                    <input style="text-align:center" type="radio" name="gender" value="female" required="required3"><a style="text-align:center;color:white;">Female</a>
                    </div>

                    <div class="flex-item-login">
                        <label for="Number"><h3 style="text-align:center;">Number:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="int" placeholder="Enter Phone Number-1" name="Number" required="required1">
                        
                    </div>
                    <div class="flex-item-login">
                        <label for="Address"><h3 style="text-align:center;">Address:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text" placeholder="Enter Address" name="Address" required="required1">
                    </div>
                    <div class="flex-item-login">
                        <label for="Password"><h3 style="text-align:center;">Password:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="password" placeholder="Enter Password" name="Password" required="required1">
                    
                    </div>
                    

                    

                    <div class="flex-item-login">
                        
                        <button name="submit" type="submit">Login</button>


                        
                    
                    </div>
                    <div class="flex-item-login">
                        <label for="P"><h3 style="text-align:center;"></h3></label>
                        <p><a style="color:white;" href="Login.html">Already Have an Account? Login</a></p>
                    </div>
        </div>
        </div>
    </div>
  </br>
  </br>
  <div class="foot">
</form>
</body>
</html>
