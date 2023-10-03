<?php

abstract class Konversi {
    abstract function hasil();
}

//celcius to farenheit
class CTF extends Konversi {
    private float $celciustfaren;

    function __construct($celciustfaren){
        $this->celciustfaren = $celciustfaren;
    }
    function hasil(){
        echo $this->celciustfaren . "\n" ."Celcius \n" . "= \n" . ($this->celciustfaren * 9/5 + 32). "\n" . "Farenheit ".  "<br>";
    }
}

//farenheit to celcius
class FTC extends Konversi {
    private float $faren;
    
    function __construct($faren){
        $this->faren = $faren;
    }
    function hasil(){
        echo $this->faren . "\n" . "Farenheit \n" . "= \n" . ($this->faren * 5/9 - 32). "\n" . "Celcius ".  "<br>";
    }
}

//Celcius to Rheamur
class CTR extends Konversi{
    private float $celciustreamur;
    function __construct($celciustreamur){
        $this->celciustreamur = $celciustreamur;
    }
    function hasil(){
        echo $this->celciustreamur . "\n" . "Celcius \n" . "= \n" . ($this->celciustreamur * 4/5). "\n" . "Rheamur".  "<br>";
    }
}

//Reamur to Celcius
class RTC extends Konversi{
    private float $reamurtcelcius;
    function __construct($reamurtcelcius){
        $this->reamurtcelcius = $reamurtcelcius;
    }
    function hasil(){
        echo $this->reamurtcelcius . "\n" ."Reamur \n" . "= \n" . ($this->reamurtcelcius * 5/4). "\n". "Rheamur";
    }
}

$CTF = new CTF(25);

$FTC = new FTC(90);

$CTR = new CTR(25);

$RTC = new RTC(20);

$CTF->hasil();
$FTC->hasil();
$CTR->hasil();
$RTC->hasil();

?>