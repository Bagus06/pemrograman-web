<?php
function dd($data = "")
{
    if (empty($data)) {
        print_r("No Data!");
    } else {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}
