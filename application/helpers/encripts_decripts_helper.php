<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function encripts($string)
{ 
    $CI =& get_instance();
    $bumbu = md5(str_replace("=", "", base64_encode("poltektegal.com")));
    $katakata = false;
    $metodeenkrip = "AES-256-CBC";
    $kunci = hash('sha256', $bumbu);
    $kodeiv = substr(hash('sha256', $bumbu), 0, 16);
    $katakata = str_replace("=", "", openssl_encrypt($string, $metodeenkrip, $kunci, 0, $kodeiv));
    $katakata = str_replace("=", "", base64_encode($katakata));
    return $katakata;
}
function dekrips($string){
    $bumbu = md5(str_replace("=", "", base64_encode("poltektegal.com")));
    $katakata = false;
    $metodeenkrip = "AES-256-CBC";
    $kunci = hash('sha256', $bumbu);
    $kodeiv = substr(hash('sha256', $bumbu), 0, 16);
    
    $katakata = openssl_decrypt(base64_decode($string), $metodeenkrip, $kunci, 0, $kodeiv);
    return $katakata;
}