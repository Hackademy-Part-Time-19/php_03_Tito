<?php
class Company {
  public $name;
  public $location;
  public $tot_employees = 0;
  public static $avg_wage = 1500;
  public static $annualExpense;
  public static $totExpense;

  public function __construct($name, $location, $tot_employees){
    $this->name = $name;
    $this->location = $location;
    $this->tot_employees = $tot_employees;
  }
// metodo per stampare in console tutti i dipendenti di ogni azienda istanziata
  public function showData(){
    if($this->tot_employees > 0){
    echo " L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti"."\n";
    }else{
      echo " L'ufficio $this->name con sede in $this->location non ha dipendenti"."\n";
    }
  }

  // metodo per calcolare la spesa annuale di ogni azienda
  public function expense(){
    self::$annualExpense = self::$avg_wage * $this->tot_employees * 12;
    echo "La spesa annuale dell'azienda $this->name è uguale a " . self::$annualExpense."\n";
    $this->totCompanyExpense(self::$annualExpense);
  }
// metodo per tenere aggiornata la somma totale delle spese
  public function totCompanyExpense($annualExpense){
    self::$totExpense += self::$annualExpense;
  }
// metodo statico per calcolare il totale delle spese di tutte le aziende
  public static function totExpense(){
    echo "La somma totale annuale delle aziende è" ." ". self::$totExpense;
    self::$totExpense = 0;
  }
}

// istanziamento delle 5 aziende

$company = new Company("Aulab","Bari",50);
$company2 = new Company("Bending Spoons","Milano",80);
$company3 = new Company("Tsunami Nutrition","Roma",50);
$company4 = new Company("Euro Top","Milano",0);
$company5 = new Company("Winelivery","Milano",30);

var_dump($company);
var_dump($company2);
var_dump($company3);
var_dump($company4);
var_dump($company5);

$company->showData();
$company2->showData();
$company3->showData();
$company4->showData();
$company5->showData();

$company->expense();
$company2->expense();
$company3->expense();
$company4->expense();
$company5->expense();

Company::totExpense();

