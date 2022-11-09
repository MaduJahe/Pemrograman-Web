<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    @font-face

    /*perintah untuk memanggil font eksternal*/
        {
        font-family: 'POLYA';
        /*memberikan nama bebas untuk font*/
        src: url(FONT/POLYA.otf);
        /*memanggil file font eksternalnya di folder POLYA*/
    }

    h2 {
        font-family: 'POLYA';
    }

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

<body style="background-image: url(img/Login.jpg); background-size:cover">
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <p style="color:white; font-size: 100px; font-family: 'POLYA';">BE PHONE</p>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color: #fcfcfc7a;padding : 10px ;box-shadow: 10px 20px 25px
                    #000000; border-radius: 20px;">
                    <form action=" index.php" method="POST">
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="Enter Username" /><label class="form-label" for="username">Username</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3"><input type="password" id="form3Example4"
                                class="form-control form-control-lg" name="password"
                                placeholder="Enter password" /><label class="form-label" for="password">Password</label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <p>Belum punya akun?,<a href="register.php">Register</a></p>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>