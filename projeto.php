<?php
session_start();
function get_users(){
    return[
    "admin" => password_hash("1234", PASSWORD_DEFAULT);
    "user" => password_hash("senha", PASSWORD_DEFAULT);]
}