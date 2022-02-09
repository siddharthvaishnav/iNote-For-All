<?php 
include 'dbconnect.php';
if (isset($_GET['delete'])) {
    $sno=$_GET['delete'];
     $sql="DELETE FROM `notes` WHERE `notes`.`sno`=$sno";
     $del=mysqli_query($con,$sql);
  if ($del) {
    //$delete=true;
    
  }
  else {
      echo "There was an erro during delteing";
  }
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (isset ($_POST['snoEdit'])) {
      //updating the record
      $title=$_POST['titleEdit'];
      $description=$_POST['descriptionEdit'];
      $sno=$_POST['snoEdit'];
      $sql="UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `notes`.`sno` = $sno;";
       $upt= mysqli_query($con,$sql);
       if ($upt) {
           //$update=true;
       }
       else {
           echo "error". mysqli_error();
       }
    }
    else{
    $title=$_POST['title'];
    $description=$_POST['description'];
    $sql="INSERT INTO `notes` ( `title`, `description`) VALUES ( '$title', '$description')";
    $result=mysqli_query($con,$sql);
    if ($result) {
     // $insert=true;
    } 
    else {
        echo "Error!note not added";
    }}
}


?>