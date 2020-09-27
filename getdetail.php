<?php 
session_start();
$con=mysqli_connect('localhost','root','','credit');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
       .header{

         margin-top: 70px;
       }
       .style{
            width:600px; 
            margin-left:360px;
       }
       @media screen and (max-width: 800px) {
  .style {
    margin-left: 20px;
    width:300px;
        }
      }

    </style>

</head>
    <body  class="w3-container w3-center w3-pale-blue">
     <div class="w3-center header">
        <div class="w3-header"><h1 class="w3-xxlarge w3-wide w3-section">Users Information</h1></div>
     </div>
    <div class="w3-center table">  
    <div class="style">
    <table class="w3-table   w3-bordered w3-card w3-hoverable" >
        
	<thead class="w3-teal">
		<th>Name</th>
		<th>Email</th>
		<th>CreditAmount</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

		</tr>
		<tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        <tr>
        <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["creditAmount"]; ?></td>
   

        </tr>
        
	</tbody>

</table>
</div>  
</div>     
<div class="w3-margin w3-container w3-center"  >
  <a href="index.php" class="w3-button w3-teal w3-large">Go to Home page</a>
</div>
</body>
</html>