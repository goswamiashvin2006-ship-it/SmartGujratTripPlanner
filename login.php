<?php
session_start();
include("database/db_coonect.php");

$error = "";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user_tabel 
              WHERE email='$email' 
              AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];

        header("Location: index.php");
        exit();
    }
    else
    {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;

            background-image: url("images/login_pic.jpg");
            background-size: cover;
            background-position: center 20%;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            width: 350px;
            padding: 35px;

            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);

            border-radius: 20px;

            border: 1px solid rgba(255,255,255,0.3);

            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
        }

        h2{
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 32px;
            font-weight: 700;
               -webkit-text-stroke: 1px black;
        }

        label{
            color: white;
            font-size: 18px;
            font-weight: 600;
               -webkit-text-stroke: 1px black;
        }

        input{
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;

            border: none;
            border-radius: 12px;

            box-sizing: border-box;
            font-size: 15px;
            outline: none;
        }

        input:focus{
            box-shadow: 0 0 10px rgba(255,255,255,0.8);
        }

        input[type="submit"]{
            background-color: #ff6600;
            color: white;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;

            transition: 0.3s;
        }

        input[type="submit"]:hover{
            background-color: #e65c00;
            transform: translateY(-2px);
        }

        .register-link{
            text-align: center;
            margin-top: 18px;
            color: dark-blue;
            font-size: 16px;
            font-weight: 700;
            
        }

        .register-link a{
            color: #e22bab;
            text-decoration: none;
            font-weight: 700;
                font-size: 18px;
        }

        .register-link a:hover{
            text-decoration: underline;
        }

        .error-message{
            background-color: rgba(255, 0, 0, 0.15);
            color: #ff4d4d;
            border: 1px solid rgba(255, 77, 77, 0.4);
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

    </style>

</head>

<body>

    <div class="container">

        <h2>User Login</h2>

        <?php
        if($error != "")
        {
            echo "<div class='error-message'>$error</div>";
        }
        ?>

        <form method="POST">

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <input type="submit" name="login" value="Login">

        </form>

        <div class="register-link">
            Don't have an account?
            <a href="register.php">Register Here</a>
        </div>

    </div>

</body>
</html>