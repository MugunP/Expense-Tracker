<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialaa-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <title>User Registration</title>
    </head>
        <body>
            <div class="signup-form">
                <h1 style="color:white"> <b>Expense Tracker App </b></h1>
                <h1 style="font-size:100%"> Register you!</h1>
                <img src="https://th.bing.com/th/id/R.5b4d648d2865f6fd440236fb00ca306b?rik=EEXNFw6Y1jlC4w&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2ftoma4025%2frumax%2f256%2ffolder-users-icon.png&ehk=527tnjUH8paT9BF5YuiiDl1HgefakJBxF9tYgolVI2w%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1 width="200" height="100">
                <form action = "process.php" method="post">
                    <input type="text" placeholder=" User Name" class="txt" name="Username">
                    <input type="email" placeholder=" Email" class="txt" name="Email">
                    <input type="password" placeholder=" Password" class="txt" name="Password">
                    <input type="password" placeholder=" Confirm Password" class="txt" name="Cpass">
                    <input type="submit" value=" Create an Account" class="btn" name="btn-save">
                    <a href='#'> Already have an account?</a>

                </form>
        
            </div>

        </body>

</html>