<?php

if(isset($_COOKIE['Mi_cookie'])){
    echo $_COOKIE['Mi_cookie'];
}
else{
    echo "<h2>La cookie no existe</h2>";
}

echo '<br>';


if(isset($_COOKIE['agno'])){
    echo $_COOKIE['agno'];
}
else{
    echo "<h2>La cookie no existe</h2>";
}


