<?php
	#mysqldump -hHOST -uUSER -pPASSWORD -Ke --hex-blob --single-transaction --dump-date --tables --where="1 order by 1 desc limit 10000" DATABASENAME > out.sql
	
    $data[] = array(
        "title" => "Mysql format result",
        "description" => "Make output from mysql terminal to less.",
        "command" => "pager less -SFX"
    );

echo json_encode($data);

?>