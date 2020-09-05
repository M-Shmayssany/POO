<?php
class Voiture{
    protected $registrationNumber;
    protected $dateCirculation;
    private $mileage;
    protected $model;
    protected $mark;
    private $color;
    private $weight;
    public $img;
    function __construct($rn,$dataC,$mileage,$model,$mark,$color,$weight){
        $this->registrationNumber = $rn;
        $this->dateCirculation = date($dataC);
        $this->mileage = $mileage;
        $this->model = $model;
        $this->mark = $mark;
        $this->color = $color;
        $this->weight = $weight;
    }
    function office(){
        echo ($this->model=='Audi')? 'reserved':'free';
    }
    function useFor(){
        echo ($this->weight > 3.5)? 'Commercial vehicles':'Passenger vehicles';
    }
    function country(){
        $rnType = substr($this->registrationNumber, 0, 2);
        switch ($rnType){
            case 'BE':
                echo "Belgium";
                break;
            case 'FR':
                echo "France";
                break;
            case 'DE':
                echo "Germany";
                break;
            default:
                echo "Unknown";
                break;
        }
    }
    function getMileage(){
        if($this->mileage < 100000){
            echo "Low : " . $this->mileage . " KM";
        }elseif($this->mileage > 100000 && $this->mileage < 200000){
            echo "middle : " . $this->mileage . " KM";
        }elseif($this->mileage > 200000){
            echo "hight : " . $this->mileage . " KM";
        }
    }
    function years(){
        echo  date('Y') - date('Y',strtotime($this->dateCirculation)) . " years";
    }
    function rouler($km){
        $this->mileage += $km;
    }
    function display(){

        echo "<td>$this->registrationNumber</td>";
        echo "<td>$this->dateCirculation</td>";
        echo "<td>$this->mileage</td>";
        echo "<td>$this->model</td>";
        echo "<td>$this->mark</td>";
        echo "<td>$this->color</td>";
        echo "<td>$this->weight</td>";
        echo "<td><img src='$this->img' alt='$this->model'></td>";
    }
}