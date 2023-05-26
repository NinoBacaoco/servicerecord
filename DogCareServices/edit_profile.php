<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new DBHelper(DBHelper::getConnection());
    $db->update_user($_POST["firstname"], $_POST["lastname"], $_SESSION["user"], $_POST["password"]);
    header("Location: index.php");
    
}

?>
<?php require_once 'includes/header.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/doggy.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dog Care Services
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>


<body>
    <form method="post"><br><br><br><br>
        <div class="column" align="center">
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label>First Name</label>
                    <input autocomplete="off" type="text" class="form-control" placeholder="First Name"
                        name="firstname">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label>Last Name</label>
                    <input autocomplete="off" type="text" class="form-control" placeholder="Last Name" name="lastname">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label>Password</label>
                    <input autocomplete="off" type="password" class="form-control" placeholder="Password"
                        name="password">
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-3">Update</button>
        </div>
        <div class="text-center">
            <a href="index.php">Return to home</a>
        </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>

    </div>
</body>

<?php require_once 'includes/footer.php' ?>