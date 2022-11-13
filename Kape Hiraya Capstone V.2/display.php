
<?php
include "Connections/dbconnect.php";


if(isset($_GET['displaySend'])){
     $table='<table class="table-dark" >
    <thead class="thead-dark" style="color:white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Date</th>
      </tr>
    </thead>';
    $sql="SELECT * FROM `customers`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id']; 
        $name=$row['name'];  
        $email=$row['email']; 
        $contact=$row['contact']; 
        $address=$row['address']; 
        $date=$row['date']; 
        $table.='  <tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$contact.'</td>
        <td>'.$address.'</td>
        <td>'.$date.'</td>
      </tr>'; 
    }
    $table.='</table>';
    echo $table;
}
?>