<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="backend.css">
</head>

<body>
    <main>
        <div class="container mt-5 " style="">
            <div class="d-flex align-items-center justify-content-between " style=" width:60%; margin:0 auto">
                <div class="picture">
                    <img class="picture-1" src="./img/photo-1592899677977-9c10ca588bbd.jpg" alt="">
                </div>
             <div class="form"  >
                <form class="form-signin p-5 " style=" width:346px; heigh:38px;" action="process-index.php" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">INTARGRAM</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="txtEmail" class="form-control" placeholder="Email address"
                        required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password"
                        required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <?php
                         if(isset($_GET['error'])){
                           echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                         }

                         ?>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" style="width: 260px" type="submit" name="btnSignIn">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
              </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>