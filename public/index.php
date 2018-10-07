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
class html {



    public static function header(){



        echo "<html>";

        echo "<head>";

        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">";

        echo "<style>";

        echo ".table-condensed{

         font-size: 30px;

        }";

        echo"</style>";

        echo "</head>";

        echo "<body>";

        echo "<div class=\"container\">";

        echo "<div class=\"table-responsive\">";

        echo "<h1>CSV Reader</h1>";

        echo "<table class = 'table table-condensed table-striped'>";

    }





    public  static function footer(){



        echo "</table>";



        echo "</div>";

        echo "</div>";

        echo "</body>";

        echo "</html>";



    }






?>

