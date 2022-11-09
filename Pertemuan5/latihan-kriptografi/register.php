<?php 
session_start();

if(isset($_SESSION['username'])){
    header('Location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Register Page</title>

        <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
        </style>

    </head>

    <body style="background-color: aqua;display: flex;justify-content: center;align-items: center;flex-direction: column;min-height: 100vh;">
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <div class="col-md-8 col-lg-6 col-xl-4" style="background-color: #fcfcfc7a;padding : 10px ;box-shadow: 10px 20px 25px #000000; border-radius: 20px;">
        <form action="register_process.php" method="post">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" /><label class="form-label" for="username">Username</label>
            </div>

            <div class="form-group-outline mb-4">
                <select class="form-control" id="gender" name="gender">
                    <option>Pria</option>
                    <option>Wanita</option>
                </select>
                <label class="form-label" for="Gender">Gender</label>
            </div>

            <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" /><label class="form-label" for="email">Email</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4"class="form-control form-control-lg" name="password" /><label class="form-label" for="password">Password</label>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" value="Register">Register</button>
            </div>            
            <div class="text-center text-lg-start mt-4 pt-2">
                <p>Sudah Memiliki akun?,<a href="login-page.php">Login</a></p>
            </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    </body>

</html>