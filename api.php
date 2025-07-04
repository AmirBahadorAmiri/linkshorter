<?php

include 'tools/SQLHelper.php';

if ( isset($_POST['url_text']) ) {
    $url_id = random_strings(8);
    $url_text = $_POST['url_text'];
    $isRepeat = false;

    $sqlManager = new SQLHelper();
    $sqlManager->sendQuery("SELECT * FROM `amirbaha_urlshort_tb` WHERE url_id='$url_id'");
    if ( $sqlManager->getResult()->num_rows > 0 ) {
        while ( $row = $sqlManager->getResult()->fetch_assoc() ) {
            if ( $row['url_id'] == $url_id ) {
                $isRepeat = true;
            }
        }
    }

    if ( $isRepeat ) {
        echo "<script>alert('Your URL ID Repeated'); history.back()</script>";
    } else {
        $sqlManager->sendQuery("INSERT INTO `amirbaha_urlshort_tb` (`url_id`,`url_text`) VALUES ('$url_id','$url_text')");
        echo "<script>alert('Your Short Link : localhost/web/link_shorter/?url_id=$url_id'); history.back()</script>";
    }

} else {
    echo "required values";
}

function random_strings($length_of_string) {
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($str_result),
        0, $length_of_string);
}