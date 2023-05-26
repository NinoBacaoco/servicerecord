<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/doggy.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dog Care Services</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper" style="padding: 0;">
        <div class="main-panel" style="height: 100vh;">
            <?php
            require_once 'db_helper.php';

            $db = new DBHelper(DBHelper::getConnection());

            if (isset($_SESSION["user"])) {
                header("Location: index.php");
                exit();
            }

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if ($_POST["password"] == $_POST["confirm_password"]) {
                    $username = $db->register($_POST["username"], $_POST["password"], $_POST["firstname"], $_POST["lastname"]);
                    header('Location: login.php');
                    exit();
                }
            }
            ?>

            <div class="card-body" align="center"><br>
                    <div class="column"><br>
                        <h1>Sign Up</h1>
                    </div>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row center">
                        <div class="col-md-6 col-sm-12 mx-4">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="firstname">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mx-4">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mx-4">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mx-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mx-4">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="confirm_password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-info btn-md">Create</button>
                            <div id="register-link" class="text-right">
                                <a href="login.php">Already have an account?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php' ?>
</body>

</html>