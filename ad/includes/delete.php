<?php
include "../../includes/db.php";
if (isset($_GET['udelete'])) {
  $delete_id=$_GET['udelete'];


$query="DELETE from users where id=$delete_id";
$result=mysqli_query($connection,$query);
header("location:../Q4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM.php");
}

if (isset($_GET['bdelete'])) {
  $delete_id=$_GET['bdelete'];


$query="DELETE from blogs where id=$delete_id";
$result=mysqli_query($connection,$query);
header("location:../BLOGSQ4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM.php");
}

if (isset($_GET['cdelete'])) {
  $delete_id=$_GET['cdelete'];

  $query="DELETE from category where id=$delete_id";
  $result=mysqli_query($connection,$query);
  header("location:../CATBLOGSQ4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM.php");
}
 ?>
