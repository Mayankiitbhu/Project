<?php
session_start();
include("login.html");
if(isset($_POST['submit'])){
    include("connection.php");
        $id=$_POST['id'];
        $pass=$_POST['pass'];
        if((filter_var($id,FILTER_VALIDATE_EMAIL)) || (preg_match("/[0-9]{10}/",$id)) && (preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*[^a-zA-Z0-9_]).{6.}$/",$pass))){
                $sql="Select Email_Id,Phone_Number,Password,Admin_Name from Admin_Details";
                $result=mysqli_query($con,$sql);
                $c=0;
                
                while($row=mysqli_fetch_assoc($result)){
                    if($id==$row['Email_Id'] || $id=$row['Phone_Number']){
                        $c=$c+1;
                    }
                    else{
                        echo "<script>alert('You are not authorized to login as admin!')</script>";
                    }

                    if($c=1 && $row['Password']==$pass){
                        $c=$c+1;
                        $_SESSION['name']=$row['Admin_Name'];
                    }
                    else{
                        echo "<script>alert('Please Enter the correct Password!')</script>";
                    }

                }

                if($c==2){
                    
                    header("Location:home_page.php");
                }

        }
        else{
            echo "<script>alert('Invalid Details!')</script>";
        }


mysqli_close($con);
}
?>

