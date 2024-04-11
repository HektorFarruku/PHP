<?php 

/*- Crea una classe Company che abbia i seguenti attributi pubblici: 
name: nome dell’azienda; 
location: stato in cui  è ubicata la sede dell’azienda; 
tot_employees: numero di dipendenti assunti in quella sede (di default, 0); 

- Crea 5 istanze di 5 aziende diverse Crea un metodo che permetta di stampare a terminale 
la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non
 ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“; 

- Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa 
annuale e la stampi per ogni oggetto. 
- Implementa un nuovo metodo che è in grado di calcolare l’insieme totale delle spese di 
tutte le aziende create. 
- Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto 
di tutte le aziende messe insieme. 
*/


class Company{
    public $name;
    public $location;
    public $employees;
    public $default;

    public function __construct($name,$location,$employees,$default)
    {
        $this->name = $name;
        $this->location = $location;
        $this->employees = $employees;
        $this->default = $default;
    }
}
    $Company1 = new Company("M Stampi","Usmate","Machinista",180);
    $Company2 = new Company("Protek", "usmate","metalmecanici",202);
    $Company3 = new Company("Trastofera","Olginate","cartoteknico",209);
    $Company4 = new Company("Frimas","Calolziocorte","kickboxing",300);
  
    
    var_dump ($Company1,$Company2,$Company3,$Company4,$Company5);

    echo $Company1(180 * 23);













?>