<?php
session_start();
include("add_bd1.php");
if(isset($_POST['submit'])){
include("connection.php");
$bn=$_POST['bname'];
$ba=$_POST['baddress'];
$bm=$_POST['bmanager'];

if(preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$bn) &&  preg_match("/^[a-zA-Z0-9,-\/][a-zA-Z0-9-,-\/\\s]*$/",$ba) && preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$bm)){
    $sql="select IFSC_Code,Branch_Name,Branch_Address,Manager_Name from Branch_Details";
    $result=mysqli_query($con,$sql);
    $c=false;
    while($row=mysqli_fetch_row($result)){
        if($row[1]==$bn){
            echo "<script>alert('Branch Name already exists!')</script>";
         $c=true;
        }   
        elseif($row[2]==$ba){
            echo "<script>alert('Branch Address already exists!')</script>";
            $c=true;
        }
        elseif($row[3]==$bm){
            echo "<script>alert('Branch Manager is already allocated')</script>";
            $c=true;
        }
    $ifsc=$row[0];
    }
    if($c==false){
        $s=preg_split("/B/",$ifsc);
        $ifsc=$s[1]+1;
        $ifsc="IB000".$ifsc;
        echo $ifsc;
        // remove the above echo statement
        // insert statement
    }
}
else{
    echo "<script>alert('Invalid details')</script>";
}

}


?>
