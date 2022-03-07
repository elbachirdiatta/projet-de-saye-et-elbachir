<?php
function is_connect():bool{
    return (isset($_SESSION["user_connect"]));
}