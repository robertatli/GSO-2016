<?php

$data = array ('aaa,bbb,ccc,dddd',
                   '123,456,789',
                   '"aaa","bbb"');

$fp = fopen("csv.txt", "w");
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}

fclose($fp);

?>