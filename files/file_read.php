<?php

    $read = fopen('text.txt', 'r');

    $data = fread($read, 10000);

    var_dump($data);

    fclose($read);