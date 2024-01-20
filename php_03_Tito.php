<?php
class Company
{
  public $name;
  public $location;
  public $tot_employees;

  static public $avg_wage = 1500;
  static public $tot;

  public function __construct($name, $location, $tot_employees = 0)
  {
    $this->name = $name;
    $this->location = $location;
    $this->tot_employees = $tot_employees;
  }

  // metodo per stampare in console tutti i dipendenti di ogni azienda istanziata
  public function showData()
  {
    if ($this->tot_employees > 0) {
      echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti" . "\n";
    } else {
      echo "L'ufficio $this->name con sede in $this->location non ha dipendenti" . "\n";
    }
  }

  // metodo per calcolare la spesa annuale di ogni azienda
  public function expence()
  {
    return self::$avg_wage * $this->tot_employees * 12 . "\n";
  }

  // metodo per calcolare la spesa di ogni azienda mese per mese
  public function monthExpence($month){
    return $this->tot_employees * self::$avg_wage * $month;
  }

// metodo per calcolare la spesa totale di tutte le aziende
  public function tot(){
    self::$tot += $this->expence();
  }

}


// istanziamento delle 5 aziende
$company = new Company("Aulab", "Bari", 50);
$company2 = new Company("Bending Spoons", "Milano", 80);
$company3 = new Company("Tsunami Nutrition", "Roma", 50);
$company4 = new Company("Euro Top", "Milano");
$company5 =  new Company("Winelivery", "Milano", 30);



var_dump($company);

$company->showData();

echo $company->expence();

echo $company->monthExpence((int) readline("Inserisci il numero di mesi:  "))."\n";

$company->tot();
$company2->tot();
$company3->tot();
$company4->tot();
$company5->tot();

echo Company::$tot;
