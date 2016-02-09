<?php
    $data[] = array(
        "title" => "Mysql format result",
        "description" => "Make output from mysql terminal to less.",
        "command" => "pager less -SFX"
    );

echo json_encode($data);

?>