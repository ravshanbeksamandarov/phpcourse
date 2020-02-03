<?php

    $write = fopen('text2.txt', 'w');

    $data = "Men";

    fwrite($write, $data);

    fclose($write);