<?php
include "../../includes/db.php";

if (isset($_GET['user'])) {
  $the_user_id=$_GET['user'];
  $query= "UPDATE users set role= 'user' where id=$the_user_id ";
  $user_query= mysqli_query($connection,$query);
  if (!$user_query) {
    die("error".mysqli_error($connection));
  }
  else {


  header("location:../Q4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM");
  }


}
if (isset($_GET['admin'])) {
  $the_user_id=$_GET['admin'];
 $query= "UPDATE users set role= 'admin' where id=$the_user_id ";
 $user_query= mysqli_query($connection,$query);
 if (!$user_query) {
   die("error".mysqli_error($connection));
 }
 header("location:../Q4DB7JZTJ99FUSEMQ4DB7JZTJ99FUSEM");

}





 ?>
