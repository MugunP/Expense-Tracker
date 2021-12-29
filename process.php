<?php
require_once('connection.php');
if (isset($_POST['btn-save']))
{
    $Username= mysqli_real_escape_string($con,$_POST['Username']);
    $Email= mysqli_real_escape_string($con,$_POST['Email']);
    $Password= mysqli_real_escape_string($con,$_POST['Password']);
    $Cpass= mysqli_real_escape_string($con,$_POST['Cpass']);

    echo $Username,$Email,$Password,$Cpass;

    if (empty($Username) || empty($Email) || empty($Password) || empty($Cpass))
    {
        echo 'Please Fill in the blanks';

    }

    if ($Password!=$Cpass)
    {
        echo 'Password Not matched';
    }
    else
    {
        $Pass = md5($Password);
        $sql= "insert into users (Username,Email,Password) values ('$Username','$Email','$Pass')";
        $result = mysqli_query($con,$sql);


        if($result)
        {
            echo 'Record saved in Database';
        }
        else
        {
            echo 'Please check again!';
        }
    }
}
