
<?php require 'connectdb.php';

   
  if(isset($_POST['Transfer'])){
    $sender=$_POST['sender'];
    $receiver=$_POST['receiver'];
    $credit=$_POST['credit'];
    $sqlinsert="insert into history (Sender,Receiver,Credit) values ('$sender','$receiver','$credit')";
    $res=mysqli_query($conn,$sqlinsert);
    $q="select creditAmount from user where name='$sender'";
    $result=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($result);
    $var=$row['creditAmount'];
    $q1="select creditAmount from user where name='$receiver'";
    $result1=mysqli_query($conn,$q1);
    $row=mysqli_fetch_array($result1);
    $var1=$row['creditAmount'];
    if($sender==$receiver){
      echo "<script>alert('please choose different user')</script>";
      include 'index.php';
    }

    elseif($var>=$credit){
      $sub=$var-$credit;
      $q="update user set creditAmount='$sub' where name='$sender' ";
      $result=mysqli_query($conn,$q);
      $sum=$var1+$credit;
      $q="update user set creditAmount='$sum' where name='$receiver' ";
      $result=mysqli_query($conn,$q);
    
      echo "<script> alert('successful transfer') </script>";
      include 'index.php';
      
    }
    else{


      $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

    }
  }
    ?>
