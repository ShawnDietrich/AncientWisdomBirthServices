<?php
if($_POST[message]){
  mail(
    "ancientwisdombirth@gmail.com", 
    "New Booking!", 
    $_POST["message"]) 
}
?>