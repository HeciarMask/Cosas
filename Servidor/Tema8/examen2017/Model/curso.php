<?php

class Curso {
    protected $curso;   
    
    public function __construct($row) {
        $this->curso = $row['curso'];
       		
    }
    
    public function getcurso() {return $this->curso; }
}

?>
