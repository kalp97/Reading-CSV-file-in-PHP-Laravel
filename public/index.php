<?php
echo 'test';
?>

main::start("examplee.csv");



class main  {



static public function start($filename) {



$records = csv::getRecords($filename);



$cols = table::columns($records);

$rows = table::rows($records);



html::generateTable($cols,$rows);





}

}

