<?php
include("database/db_coonect.php");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $sql = "INSERT INTO user_tabel (name, email, password, mobile, city)
            VALUES ('$name', '$email', '$password', '$mobile', '$city')";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "<script>alert('Registration Successful');</script>";
    }
    else
    {
        echo "<script>alert('Registration Failed: ".mysqli_error($conn)."');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>

        body{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;

            background-image: url("images/gt.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            width: 350px;
            padding: 30px;

            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(0px);

            border-radius: 20px;

            border: 1px solid rgba(255,255,255,0.3);

            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
        }

        h2{
            text-align: center;
            color: white;
        }

        label{
            color: white;
    font-size: 19.5px;
    font-weight: 1000;
       -webkit-text-stroke: 1px black;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;

            border: none;
            border-radius: 10px;

            box-sizing: border-box;
        }

        input[type="submit"]{
            background-color: #ff6600;
            color: white;
            cursor: pointer;
            font-size: 18px;
            font-weight: 100;
        }

        input[type="submit"]:hover{
            background-color: #e65c00;
        }

        .login-link{
            text-align: center;
            margin-top: 16px;
            font-weight: 200;
            font-size: 17px;
               -webkit-text-stroke: 1px black;
            color: #000000;;
        }

        .login-link a{
            color: white;
            font-size: 19px;
            text-decoration: none;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>User Registration</h2>

        <form method="POST">

            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Mobile:</label>
            <input type="text" name="mobile" required>

            <label>City:</label>
            <input type="text" name="city" required>

            <input type="submit" name="register" value="Register">

        </form>

        <div class="login-link">
            Already have an account?
            <a href="login.php">Login Here</a>
        </div>

    </div>

</body>
</html>