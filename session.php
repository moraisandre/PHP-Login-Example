<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select NAME from USERS where LOGIN = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['NAME'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>