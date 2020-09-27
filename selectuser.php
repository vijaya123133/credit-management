<?php require 'connectdb.php';
//mysqli_select_db($con,'id8930489_spark');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <style>
          .style{
          margin-top:50px;
          padding-top:50px; 
 
          }
          @media screen and (max-width: 800px){
            .table{
                margin-left: 25px;
            }
            .style{
                 margin-left: 60px;

            }
          }
       </style>
</head>
<body class="w3-pale-blue">
<div class="w3-container w3-row ">
<div class="w3-col l4 m8 style"  >  
    
<form action="userdetail.php" class="w3-container" method="POST">
  <div class="w3-col s9">
  <label class="w3-text-teal"><h5>Sender Name</h5></label>
<input class="w3-input w3-border" type="text" placeholder="enter sender name" name="sender" required>
</div>
<div class="w3-col s9">
  <label class="w3-text-teal"><h5>Receiver Name</h5></label>
<input class="w3-input w3-border" placeholder="enter receiver name" name="receiver" type="text" required>
</div>
<div class="w3-col s9">
<label class="w3-text-teal"><h5>Credit</h5></label>
<input type="number" class="w3-input w3-border"  name="credit" placeholder="enter credit to Transfer" required >
</div>
<div class="w3-col s9">
<button class="w3-button w3-center w3-teal w3-margin-top" name="Transfer" type="submit">Transfer</button>
</div>

    
</form>
</div>
<div class="w3-col s7 w3-margin-top">

 <div class="table">

 <table class="w3-table w3-bordered w3-card w3-hoverable">


    <?php 
$sql="select * from user ";
$result=mysqli_query($conn,$sql);
//echo $_SESSION['name'];

?>




	<thead class="w3-teal ">
    <tr>
		<th>Name</th>
		<th>Email</th>
		<th>CreditAmount</th>
		</tr>
	</thead>
	<tbody>

		<?php
      if(mysqli_num_rows($result) > 0){
        while($emp = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $emp['name']; ?></td>
      <td><?php echo $emp['email']; ?></td>
      <td><?php echo $emp['creditAmount']; ?></td>
    </tr>
    <?php
       }
     }
     else{
           echo "zero results";
          }
       ?>                                    
     
	</tbody>
</table>
</div>
</div>
</div>
<div class="w3-margin w3-container w3-center"  >
  <a href="index.php" class="w3-button w3-teal w3-large">Go to Home page</a>
     
  
</div>

               
            
</body>
</html>