<?php
    include 'MySqlConnect.php';
    $mySqlConnect = new MySqlConnect();
    $action = $_POST['action'];
// Open a directory, and read its contents
    if($action == 'get_list_podcast')
        {
            $sql = "SELECT * FROM lesson";
        echo $mySqlConnect->Query($sql);
        }
?>


