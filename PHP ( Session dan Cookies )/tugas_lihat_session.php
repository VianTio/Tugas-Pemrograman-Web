<?php
session_start();
if (!empty($_SESSION["info"])) {
    echo "Saat ini anda login sebagai : " . $_SESSION["info"][0] . " (" . $_SESSION["info"][1] . ")";
} else {
    isset($_SESSION["info"]['char_data']);
}
?>