<?php

if($_COOKIE['Mi_cookie']){
    unset($_COOKIE['Mi_cookie']);
    setcookie('Mi_cookie','', time() -10);
}


if($_COOKIE['agno']){
    unset($_COOKIE['agno']);
    setcookie('agno','', time() -10);
}


