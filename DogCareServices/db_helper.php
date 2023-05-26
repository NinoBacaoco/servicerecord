<?php

include "database.php";

class DBHelper extends Database
{
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add_servicerecord($servicename, $servicedescription, $price)
    {
        return $this->query("INSERT INTO tblservicerecord (id, servicename, servicedescription, price)
                                VALUES (NULL, '$servicename', '$servicedescription', '$price')");
    }

    function get_service_record()
    {
        $sql = "SELECT * FROM tblservicerecord";
        return $this->query($sql);
    }

    function delete_service_record($id)
    {
        $sql = "DELETE FROM tblservicerecord WHERE id = $id";
        $this->query($sql);
    }


    function update_servicerecord($id, $servicename, $servicedescription, $price)
    {
        $sql = "UPDATE tblservicerecord SET servicename = '$servicename', servicedescription = '$servicedescription', price = '$price' WHERE id = $id";
        return $this->query($sql);
    }

    function get_medical_record_id($id)
    {
        $sql = "SELECT * FROM tblmedicalrecord WHERE id = $id";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array(
            "dog_ID" => $row[1],
            "ownername" => $row[2],
            "customer_ID" => $row[3],
            "veterinarian_ID" => $row[4],
            "date_of_treatment" => $row[5],
        );
    }

    function get_service_record_id($id)
    {
        $sql = "SELECT * FROM tblservicerecord WHERE id = $id";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array(
            "servicename" => $row[1],
            "servicedescription" => $row[2],
            "price" => $row[3]
        );
    }

    function login($username, $password)
    {
        $sql = "SELECT * FROM tbluseraccount WHERE username = \"$username\" and password = \"$password\"";
        $rs = $this->query($sql);
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                return $row["username"];
            }
        }
        return false;
    }

    function register($username, $password, $firstname, $lastname)
    {
        $sql = "INSERT INTO tbluseraccount (username, password, firstname, lastname) VALUES (\"$username\", \"$password\", \"$firstname\", \"$lastname\")";
        return $this->query($sql);
    }

    function update_user($firstname, $lastname, $username, $password)
    {
        $sql = "UPDATE tbluseraccount SET firstname = \"$firstname\", lastname = \"$lastname\", password = \"$password\" WHERE username = \"$username\"";
        return $this->query($sql);
    }

    function get_user($username)
    {
        $sql = "SELECT firstname, lastname FROM tbluseraccount WHERE username = \"$username\"";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return ["firstname" => $row[0], "lastname" => $row[1]];
    }


}