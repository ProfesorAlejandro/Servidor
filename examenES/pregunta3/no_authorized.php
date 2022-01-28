<?php
echo "<h1>No autorizado</h1>";

function redirect()
{
   header('refresh:2;url=index.php');
   die();
}

redirect();