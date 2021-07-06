<!DOCTYPE html>
<!--
apare Popescu Bogdan
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Student{
            public $nume="Popescu";//proprietatea nume
            public $prenume;
            public function nume($var){
                $this->prenume=$var;
            }//accesarea proprietatii in cadrul metodei
        }
        $student=new Student;
        echo $student->nume;//invocarea proprietatii
        $student->nume(" Bogdan");//apelarea metodei
        echo $student->prenume;//inovocarea proprietatii
        ?>
    </body>
</html>
