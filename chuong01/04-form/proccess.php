<?php
    $useName = $_POST["email"];
    $password = $_POST["password"];

    $result = ($useName== "admin" && $password == "123456" ) ? " Đăng nhập thành công " : " Tài khoản hoặc mật khẩu không chính xác";
    echo $result;