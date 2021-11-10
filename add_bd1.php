<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="admin_home_page.css"> -->
    <style>
        body{
    background-color: rgb(254,230,254);
}
.parent{
    display: flex;
    align-items: stretch;
    border: solid 1.0px;
    margin-top: 200px;
}
.left{
    color: aliceblue;
    background-color: rgb(129,0,127);
    flex-grow: 1;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom: 20px;
    font-family: sans-serif;

}
.left div{
    line-height: 30px;
}
a{
    color: aliceblue;
    text-decoration: none;
}
.right{
    padding-left: 5px;
    padding-top: 5px;
    background-color: rgb(254,230,254);
    flex-grow: 3;

}
h1,h2{
    font-family: sans-serif;
    text-decoration: overline underline;
    color: rgb(129,0,127);
    text-shadow: 2px 2px 5px rgb(129,0,127);
}
table{
    font-family: sans-serif;
    border: 3.5px solid rgb(129,0,127);
    padding: 3px 0px;
}
.ip{
    border:none;
        padding: 5px;
}
::-webkit-input-placeholder { 
  font-size: 0.9em;
}
::-moz-placeholder { 
    font-size: 0.8em;
}
:-ms-input-placeholder { 
    font-size: 0.8em;
}
:-moz-placeholder { 
    font-size: 0.8em;
}
.is{
    background-color:rgb(129,0,127);
    color: rgb(254,230,254); 
    border-radius: 2px;
    letter-spacing: 0.75px;   
    
}
    </style>
    <title>Add Branch Details</title>
</head>
<body>
    <div class="parent">
        <div class="left">
        <?php
            
            if(isset($_SESSION['name'])){
                echo "Hi ".$_SESSION['name']; 
            }
            else
                echo "Welcome Admin";
            ?>
            
            <br><br><br><br>
            <div>
            <a href="add.php"> ADD BANK DETAILS</a> <br>
            <a href="edit.php">EDIT BANK DETAILS</a> <br>
            <a href="generate_pass.php">GENERATE REPORT</a><br>
            <a href="change_pass.php">CHANGE PASSWORD</a><br>
            <a href="logout.php">LOGOUT</a><br>
            </div>

        </div>
        <div class="right">
        <p>
                <h1 > Infy Bank</h1>
                <h2 >Fill the details to Add New branch</h2>
                <br>
                <form method="POST" onsubmit="return validate()" >
                    <table>
                        <tr>
                            <td>Branch Name</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input class="ip" type="text" name="bname" placeholder="Enter New Branch Name" size="35"></td>
                        </tr>
                        <tr>
                            <td>Branch Address</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input class="ip" type="text" name="baddress" placeholder="Enter New Branch Address" size="35"></td>
                        </tr>
                        <tr>
                            <td>Branch Manager</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input class="ip" type="text" name="bmanager" placeholder="Enter New Branch Manager" size="35" ></td>
                        </tr>
                    </table>
                    <br>
                    <p ><input  class="is" type="submit" name="submit" value="Add"> <input class="is"  type="reset" name="reset" value="Reset"></p>
                </form>
                
                


            


        </div>
    </div>
</body>
</html>



