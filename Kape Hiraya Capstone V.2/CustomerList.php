<?php
include "Connections/dbconnect.php";


extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['contactSend']) && isset($_POST['addressSend']) && isset($_POST['dateSend'])){

    $sql="INSERT INTO `customers`(`name`, `email`, `contact`, `address`, `date`)
     VALUES ('$nameSend','$emailSend','$contactSend','$addressSend','$dateSend')";

     $result=mysqli_query($con,$sql);
}
?>
