<?php

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Cannot divide on 0. <hr> ");
    } else {
        echo $a / $b  . '<hr>';
    }
}

try {
    divide(8, 2);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "هطلع علطول شغال مش شغال مش فارقة";
}
