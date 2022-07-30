
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/checkass_Web/public/css/admin/login/style.css">
    </head>

    <body>
        <div class="container-fluid vh-100" style="margin-top:50px">
            <div class="" style="margin-top: 50px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">ADMIN</h3>
                        </div>
                        <form action="/checkass_Web/admin/login/index" method="POST">
                            <div class="p-4">
                                <?php if (isset($err)) echo "<span style='color: red;'>$err</span><br><br>" ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php if(isset($username)) { echo $username;} ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                                <div class="wrapper">
                                    <button class="btn btn-primary text-center mt-2" name="submit-btn" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>