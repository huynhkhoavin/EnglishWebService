<?php

class MySqlConnect {

    private $connect;

    public function MySqlConnect() {
        $this->connect = mysqli_connect("localhost", "root", "", "silly_english");
        $this->connect->set_charset('utf8');
    }


    public function Query(string $sql) {
        $result = $this->connect->query($sql);
        $mang = array();
        while ($data = mysqli_fetch_array($result)) {

            array_push($mang, $data);
//        json_encode($data);
        }
        return json_encode($mang);
    }

}
