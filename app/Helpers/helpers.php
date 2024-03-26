<?php

namespace App;

use Illuminate\Support\Facades\Auth;


class Helpers
{
   

    public static function encrypt($string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = '{#>sD~k2Ej:-eC7{TASvNj1a@`e`H+8=T?U&Kbl2BdB~QO<:&uRVypzqR#Yrb$^n';
        $secret_iv = 'yVu 2i-M%c}n^.Z_9nj$rsBKhUl&O[nU_uWi]ntX$$t4![DH5{m( P;q,`VhucOn';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }

    public static function decrypt($string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = '{#>sD~k2Ej:-eC7{TASvNj1a@`e`H+8=T?U&Kbl2BdB~QO<:&uRVypzqR#Yrb$^n';
        $secret_iv = 'yVu 2i-M%c}n^.Z_9nj$rsBKhUl&O[nU_uWi]ntX$$t4![DH5{m( P;q,`VhucOn';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
    
}

