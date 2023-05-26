<?php
require_once 'db_helper.php';

$deleteMapping = [
    'medical_record_id' => 'deleteMedicalRecord',
    'id' => 'delete_service_record',
];

$db = new DBHelper(DBHelper::getConnection());

foreach ($deleteMapping as $param => $method) {
    if (isset($_GET[$param])) {
        $id = $_GET[$param];
        $db->$method($id);
        $_SESSION["message"] = "Successfully Deleted";
        break;
    }
}

header("Location: index.php");
exit();
?>
