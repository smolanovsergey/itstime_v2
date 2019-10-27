<?php

$directory = 'images/serials/serials_prw';
$cdir = scandir($directory);

foreach ($cdir as $key => $value)
{
    if (!in_array($value,array(".","..")))
    {
        echo '<img class="scale_img" src="images/serials/serials_prw/'.$value.'">';
    }
}