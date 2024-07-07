<?php
    include 'connection.php'
    $username=$_POST['username'];
    $city=$_POST['city'];
    $mno=$_POST['mno'];
    $pwd=$_POST['pwd'];
    $cwd=$_POST['cpwd'];
    $email=$_POST['email'];

    if(isset($_POST['submit'])){
        if($_POST['username']==''){
            $error = "Please Enter Username";
        }
        elseif(is_numeric($_POST['username'])){
            $error = "Please Enter Character Only";
        }
        elseif(empty($pwd)){
            $error1="PLEASE ENTER PASSWORD";
        }
        elseif(empty($cpwd)){
            $error2="PLEASE ENTER CONFIRM PASSWORD";
        }
        elseif($pwd!=$cpwd){
            $error2="PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH";
        }
        elseif(empty($email)){
            $error3="PLEASE ENTER EMAIL";
        }
        elseif(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
            $error3="PLEASE ENTER VALID EMAIL";
        }
        elseif($mno==""){
            $error4="PLEASE ENTER MOBILE NUMBER";
        }
        elseif(!is_numeric($mno)){
            $error4="PLEASE ENTER ONLY NUMBERS";
        }
        elseif(!preg_match('/^[0-9]{10}+$/',$mno)){
            $error4="Only 10 digits";
        }
        else{
            $query = "insert into stud_details(username,city,contact,password,cpassword,email) values('$username','$city','$mno','$pwd','$cpwd','$email')"
            mysqli_query($con,$query);
        }
?>
<html>
    <head>
        <title>Registration Form</title>
        <style>
            table{
                margin-top: 150px;
                /* margin-left: 55px; */
            }
        </style>
    </head>
    <body>
        <table align="center">
            <form method="post">
                <th colspan="2"><h2>Registration Form</h2></th>
                <tr>
                    <th><label for="username">Username</label></th>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <th><label>City</label></th>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <th><label>M. No</label></th>
                    <td><input type="number" name="mno"></td>
                </tr>
                <tr>
                    <th><label>Email</label></th>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <th><label>Password</label></th>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <th><label>Confirm Password</label></th>
                    <td><input type="password" name="cpwd"></td>
                </tr>
               <tr>
                    <td colspan="2"><input type="submit" value="submit" name="submit" id="sub"></td>
                </tr>
            </form>
        </table>
    </body>
</html>