
<?php require 'connectdb.php';
  if(isset($_POST['Transaction History'])){
    $sender=$_POST['sender'];
    $receiver=$_POST['receiver'];
    $credit=$_POST['credit'];
    $sqlinsert="insert into history (Sender,Receiver,Credit) values ('$sender','$receiver','$credit')";
    $res=mysqli_query($conn,$sqlinsert);
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select User</title>
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <style>
          .style{
               width:600px; 
               margin-left:360px;
          }
          @media screen and (max-width: 800px){
              .style{
                  width: 300px;
                margin-left: 70px; 
              }
          }
        </style>
</head>

    <body class="w3-pale-blue">
          <div class="w3-center header">
        <div class="w3-header"><h1 class="w3-xxlarge w3-wide w3-section">Transaction History</h1></div>
     </div>
     <div class="style">
    <table class="w3-table   w3-bordered w3-card w3-hoverable"  >


    <?php 
$sql="select * from history ";
$result=mysqli_query($conn,$sql);


//echo $_SESSION['name'];

?>




  <thead class="w3-teal">
    <tr>
    <th>Sender</th>
    <th>Receiver</th>
    <th>Credit</th>
    </tr>
  </thead>
  <tbody>

    <?php
      
      if(mysqli_num_rows($result) > 0){
        while($emp = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $emp['Sender']; ?></td>
      <td><?php echo $emp['Receiver']; ?></td>
      <td><?php echo $emp['Credit']; ?></td>
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
<div class="w3-margin w3-container w3-center"  >
  <a href="index.php" class="w3-button w3-teal w3-large">Go to Home page</a>
     
  
</div>
       
</body>
</html>

 