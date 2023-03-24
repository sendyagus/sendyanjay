<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./boostreap.min.css">
    <title>Document</title>
</head>

<body>

    <form action="login.php" method="POST">
        <div class="container justify-content-center">
            <div class="anjay align-items-center">
                <h1>LOGIN FORM</h1>
                <div class="link2 ">
                    <label for="">username</label>
                    <input type="text" name="username" placeholder="masukan username" required>
                </div>

                <div class="link2 mt-2">
                    <label for="">password</label>
                    <input type="password" name="password" placeholder="masuukan password" required>
                </div>
                <div class="login">
                    <input type="submit" name="btnlogin" value="loginn">
                </div>
            </div>
        </div>
    </form>
</body>

</html>