<?php
namespace dimensoes;

class Data{
    public $data;
    public $dia;
    public $mes;
    public $ano;
    public $semanaAno;
    public $bimestre;
    public $trimestre;
    public $semestre;

    public function setData($data){
        $this->data = $data;
        $this->dia = date('d', strtotime($data));
        $this->mes = date('m', strtotime($data));
        $this->ano = date('y', strtotime($data));
        $this->semanaAno = date('w', strtotime($data));
    }
}
?>