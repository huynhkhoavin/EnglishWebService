<?php
include 'MySqlConnect.php';
    $mySqlConnect = new MySqlConnect();
    $action = $_GET['action'];
    $fb_id = $_GET['facebook_id'];
//    echo "hehehe";
    if ($action == "check_fb_id") 
        {
        $fb_id = $_GET['facebook_id'];
        $sql = "SELECT 
        COUNT(silly_english.`user`.`us_facebook_id`)
        FROM
        `silly_english`.`user` 
        WHERE 
        silly_english.`user`.`us_facebook_id`='$fb_id'
        LIMIT 0, 1000" ;
        $result = $mySqlConnect->query($sql);
        echo $result;
}
    else if($action == "check_user_login")
    {
        $user_email = $_POST['email'];
        $user_pass = $_POST['pass'];
        
    }
?>


