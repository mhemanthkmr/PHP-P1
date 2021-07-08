<?php 
$salt = "iahcihoajfochfeocbeihovjoenivheihvon";
if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password'].$salt); ?>
    <pre> <?php
    print_r($name);
    print_r($phone);
    print_r($email);
    print_r($password);
    echo "8bb43c36daa24a12182c468b956ea3fb"?>
    </pre><?php
}

?>