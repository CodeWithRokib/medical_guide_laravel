<?php
require_once 'mysql.class.php';
try
{
    $massages = array();
    $db = new MySQL();
    $sql = "SELECT * FROM `user_messages` ORDER BY `user_messages`.`id` DESC;";
    $db->RentData($sql);
    while($row = $db->getRentData())
    {
        $id=intval($row['user_id']);
        $name_sql = "SELECT * FROM `user` WHERE `id`={$id};";

        $result = mysqli_query($db->connect(),$name_sql);

        $massages[] = array(
            "user_id" => $row['user_id'],
            "message" => $row['message'],
            "dates" => $row['dates'],
            "times" => $row['times']);
    }
    $Data["success"] = "1";

    $Data["massages"] = $massages;
    $MainData["massages"] = $Data;

    echo json_encode($MainData);

} catch(Exception $e) {
    echo $e->getMessage();
    exit();
}

