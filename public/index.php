<?php
main::start("exam.csv");



class main  {



    static public function start($filename) {



        $records = csv::getRecords($filename);



        $cols = table::columns($records);

        $rows = table::rows($records);



        html::generateTable($cols,$rows);





    }

}

class table {



    public static function columns($records){





        $array = $records[0]->returnArray();



        return array_keys($array);

    }



    public  static function rows($records){



        $rows = [];

        $count = 0;



        foreach ($records as $record){



            $array = $record->returnArray();



            $rows[$count++] = array_values($array);

        }

        return $rows;



    }

}






?>

