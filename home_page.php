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
h1{
    text-decoration: overline underline;
    color: rgb(129,0,127);
}
.yo{
    color: red;
    padding-left: 400px;
    

}
    </style>
    <title>Home_Page</title>
</head>
<body>
    <div class="parent">
        <div class="left">
        <?php
            session_start();
            if(isset($_SESSION['name'])){
                echo "Welcome ".$_SESSION['name']; 
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
            <a href="">LOGOUT</a><br>
            </div>

        </div>
        <div class="right">
        <p>
                <h1> <strong><strong>Infy Bank</strong></strong></h1>
                <br>
                <p class="yo">***Apply home loan with 0.5% interest*** <br>
                    ***Apply for platinum and earn 1000 credit points***
                </p><br>
                


            


        </div>
    </div>
</body>
</html>



