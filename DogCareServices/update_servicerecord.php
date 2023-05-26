<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

$id = $_GET['id'];
$row = $db->get_service_record_id($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->update_servicerecord($id, $_POST["servicename"], $_POST["servicedescription"], $_POST["price"]);
    header('Location: index.php');
}

?>

<body>
    
    <form method="POST"><br><br><br><br>
        <div class="column" align="center"><br>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="servicename">Service Name</label><br>
                    <input type="text" class="form-control" name="servicename" value="<?= $row['servicename'] ?>">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="servicedescription">Service Description</label>
                    <textarea class="form-control" name="servicedescription"><?= $row['servicedescription'] ?></textarea>
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="<?= $row['price'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-info btn-md">Update Service Record</button>
                </div>
            </div>
        </div>
    </form>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
