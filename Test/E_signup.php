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
    $Username=$_POST['Username'];
    $Name=$_POST['Name'];
    $Dob=$_POST['Dob'];
    $gender=$_POST['gender'];
    $Salary=$_POST['Salary'];
    $Password=$_POST['Password'];
    $Number1=$_POST['Number1'];
    $Number2=$_POST['Number2'];
    $sql="INSERT INTO dbo.Employee (E_Username,Name,Dob,Gender,Salary,Password) VALUES('{$Username}','{$Name}','{$Dob}','{$gender}','{$Salary}','{$Password}')";
    $sql1="INSERT INTO dbo.E_Number (E_Username,Number) VALUES('{$Username}','{$Number1}')";
    $sql2="INSERT INTO dbo.E_Number (E_Username,Number) VALUES('{$Username}','{$Number2}')";

    
    $result=sqlsrv_query($conn,$sql);
    $result1=sqlsrv_query($conn,$sql1);
    if(empty($Number2)){

        echo " ";   
    }
    else{
        $result2=sqlsrv_query($conn,$sql2);
    }

    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location.href='Login.html';
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
                        <h2 style="text-align:center;font-style: italic">Employee Sign-Up </h2>

                    </div>

                    <div class="flex-item-login">
                        <label for="name"><h3 style="text-align:center;">Username:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text"  placeholder="Enter Username" name="Username" >
                    </div>

                    <div class="flex-item-login">
                        <label for="name"><h3 style="text-align:center;">Name:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="text"  placeholder="Enter Name" name="Name" >
                    </div>

                    <div class="flex-item-login">
                      
                        <label for="Date"><h3 style="text-align:center;">Date Of Birth:</h3></label>
                        <input style="text-align:center;width:370px;height:30px;" type="date" id="birthday" name="Dob"  >
                    </div>

                    <div class="flex-item-login">
                    <p><a style="color:white;"></a></p>
                    <label for="gender"><h3 style="text-align:center;">Gender:</h3></label>
                    <input style="text-align:center" type="radio" name="gender" value="male" ><a style="text-align:center;color:white;">Male</a>
                    <input style="text-align:center" type="radio" name="gender" value="female" ><a style="text-align:center;color:white;">Female</a>
                    </div>

                    <div class="flex-item-login">
                        <label for="Number"><h3 style="text-align:center;">Number:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="int" placeholder="Enter Phone Number-1" name="Number1" >
                        <input style="text-align:center;width:350px;height:35px;" type="int" placeholder="Enter Phone Number-2" name="Number2" >
                        
                    </div>
                    <div class="flex-item-login">
                        <label for="Address"><h3 style="text-align:center;">Salary:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="int" placeholder="Enter Salary" name="Salary" >
                    </div>
                    <div class="flex-item-login">
                        <label for="Password"><h3 style="text-align:center;">Password:</h3></label>
                        <input style="text-align:center;width:350px;height:35px;" type="password" placeholder="Enter Password" name="Password" >
                    
                    </div>
                    

                    


                    <div class="flex-item-login">
                        
                        <button name="submit" type="submit">Login</button>


                        
                    
                    </div>
                    <div class="flex-item-login">
                        <label for="P"><h3 style="text-align:center;"></h3></label>
                        <p><a style="color:white;" href="Login.html">Already Have an Account? Login</a></p>
                        <p><a style="color:white;" href="C_signup.php"> Customer sign up? Sign up</a></p>
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
