<?php
    $con = mysqli_connect('localhost','root','','expensetracker.db');

    if(!$con)
    {
        echo 'Please check your database connection';

    }