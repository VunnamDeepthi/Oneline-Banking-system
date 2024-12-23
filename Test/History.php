
<!doctype html>
<html lang="en">

<head>
  
  <link rel="stylesheet" href="home1_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header_style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
        <li><a href="#">CustomerDetails</a></li>  
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


<body>
<p style="background-image:contact.jpg">
<class class="welcome">
        <h2 style="text-align:center; font-family: 'Times New Roman', serif;">
             <strong >Transaction History</strong> 
        </h2>
    </class>
 
        <!-- options -->
<div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
    <a href="transaction.html"><button type="button" class="btn btn-warning btn-lg mb-3">Click Here to Transfer Money</button></a>
</div>


<!-- Table -->
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">Transaction id</th>
                <th class="text-center">Sender's Account Number</th>
                <th class="text-center">Receiver's Account Number</th>
                <th class="text-center">Amount </th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
include 'Transaction.php';
include 'connect.php';
$Account_no=$abc

$sql ="SELECT * FROM Transactions WHERE Account_no = '$abc'" ;

$query =sqlsrv_query($conn, $sql);

while($rows = sqlsrv_fetch_array($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['Transaction_id']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Account_no']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Account_no_receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['Time_stamp']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>
</div>
</body>

</html>