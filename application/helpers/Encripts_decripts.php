<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function encripts($string)
{ 
    $CI =& get_instance();
    $bumbu = md5(str_replace("=", "", base64_encode("bunghasta.com")));
    $katakata = false;
    $metodeenkrip = "AES-256-CBC";
    $kunci = hash('sha256', $bumbu);
    $kodeiv = substr(hash('sha256', $bumbu), 0, 16);
    $katakata = str_replace("=", "", openssl_encrypt($string, $metodeenkrip, $kunci, 0, $kodeiv));
    $katakata = str_replace("=", "", base64_encode($katakata));
    return $katakata;
    
}