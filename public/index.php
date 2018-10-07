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
class html
{


    public static function header()
    {


        echo "<html>";

        echo "<head>";

        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">";

        echo "<style>";

        echo ".table-condensed{

         font-size: 30px;

        }";

        echo "</style>";

        echo "</head>";

        echo "<body>";

        echo "<div class=\"container\">";

        echo "<div class=\"table-responsive\">";

        echo "<h1>CSV Reader</h1>";

        echo "<table class = 'table table-condensed table-striped'>";

    }


    public static function footer()
    {


        echo "</table>";


        echo "</div>";

        echo "</div>";

        echo "</body>";

        echo "</html>";


    }

    public static function generateTable($cols, $rows)
    {


        self::header();


        self::col_tab($cols);


        self::row_tab($rows);


        self::footer();

    }

    public static function col_tab($cols)
    {


        foreach ($cols as $key => $value) {


            self::table_header_tab($value);


        }


    }

    public static function table_header_tab($value)
    {


        echo "<th>" . $value . "</th>";

    }

    public static function row_tab($rows)
    {


        foreach ($rows as $key => $value) {


            echo "<tr>";


            foreach ($value as $data) {


                self::table_row_tab($data);


            }

            echo "</tr>";

        }

    }


    public static function table_row_tab($data)
    {


        echo "<td>" . $data . "</td>";

    }

}





?>

