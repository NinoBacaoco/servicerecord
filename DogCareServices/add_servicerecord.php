<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->add_servicerecord($_POST["servicename"], $_POST["servicedescription"], $_POST["price"]);
    header('Location: index.php');
}
?>

<body>
    <form method="POST"><br><br><br><br>
        <div class="column" align="center"><br>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="servicename">Service Name</label><br>
                    <input type="text" class="form-control" name="servicename" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="servicedescription">Service Description</label>
                    <input type="text" class="form-control" name="servicedescription" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="">
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-info btn-md">Add Service Record</button>
                </div>
            </div>
        </div>
    </form>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
