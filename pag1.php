<?php

class Student{
    public $var="Popescu ";
    public $prenume="Bogdan";
    public $nume;
    public function set_nume($var){
        $this->nume=$var;
    }//atribuirea valorii $var prorietatii $nume
    public function get_nume(){
        $this->set_nume($this->var);
    }//apelarea unei metode in cadrul altei metoda    
}
$student=new Student;
$student->get_nume();
echo $student->nume;
echo $student->prenume;
