<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>

<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"
                        required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="confirm-password"
                        placeholder="Confirm Password" required>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-dark" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src="node_modules\popper.js\dist\popper.js"></script>
</body>

</html>