<?php
function validasi()
{
    $username = "zeronull";
    $email = "kamu@aku.com";

    // $a = explode("@", $email);


    if (!ctype_lower($username)) { //validasi jika usename memiliki huruf besar
        echo "username = " . $username;
        echo "\npassword = " . $email;
        echo "\n\nfalse, username hanya boleh menggunakan huruf kecil";
    } elseif (strlen($username) < 8) { //validasi jika usename memiliki kurang dari 8 karakter
        echo "username = " . $username;
        echo "\npassword = " . $email;
        echo "\n\nfalse, username kurang dari 8 karakter";
    } elseif (strpos($email, "@") < 4) {
        echo "username = " . $username;
        echo "\npassword = " . $email;
        echo "\n\nfalse, panjang email kurang dari 4 karakter";
    } elseif (strpos($email, "@") == 4) {
        echo "username = " . $username;
        echo "\npassword = " . $email;
        echo "\n\ntrue, panjang email pas";
    } elseif (preg_match("/^[a-zA-Z0-9_]/", $email) && ctype_lower($username) && strlen($username) == 8 && strlen($email) < 4) { //validasi keseluruhan
        echo "username = " . $username;
        echo "\npassword = " . $email;
        echo "\n\ntrue, username terdiri dari 8 karakter, hanya mengandung huruf kecil dan spesial karakter dan memiliki panjang karakter 8";
    }

    /*
    "'/.../'" mulai regex
    "^[a-zA-Z0-9._]" yang mengandung hurud kecil a-Z, mengandung huruf besar A-Z, mengandung angka 0-9 dan spesial karakter _.
    */
}

validasi();
