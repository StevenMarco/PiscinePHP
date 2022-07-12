<?php
class C3PO extends Robot
{
    protected $numeroDeSerie;
    private $nom;
    private $type;

    public function __construct($nom, &$numeroDeSerie = 1, $type = "droide de protocole")
    {
        $this->nom = $nom;
        $this->type = $type;
        $this->numero_de_serie = $numeroDeSerie;
        echo "Je suis le droïde de protocole numéros " . $this->numero_de_serie . ", enchanté de vous rencontrer !\n";
        
        // $numeroDeSerie++;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getAddSerie()
    {
        return $this->numero_de_serie += 1;
    }

    public function dire($str)
    {
        echo "C3PO no " . $this->numero_de_serie . " : " . $str . "\n";
    }
    public function marcher()
    {
        echo "Je me mets en route, inutile d'insiter\n";
         // C3PO::marcher();
    }

    public function initierProtocole()
    {
        echo "En attente d’interaction utilisateur :";
        $stdin = fopen("php://stdin","r");
        $input = fgets(STDIN);
        $var = $input;
            // tentative for recuperation a two string
        $var1 = explode(" ", $var, 2);
        $first = array_shift($var1);
        $last = array_pop($var1);
        $str = str_replace(""," ",$last);
   
            // multiple condition 
            if($first == "dire") 
            {
            echo $this->dire($str);
            $this->initierProtocole();
            }
            elseif ($first == "marcher") 
            {
                echo $this->marcher();
                $this->initierProtocole();
            }
            elseif($first == 'repos') 
            {
                echo "Fin du protocole";
                exit;
            }
            elseif ($first == "") 
            {
                echo "Veuillez m'indiquer une action !";
                $this->initierProtocole();
            } 
            else 
            {
                echo"Au revoir !";
                $this->getAddSerie();
                exit;
            }
        
    //     echo "En attente d'interaction utilisateur :\n"; 
        
    //     $stdin = fopen("php://stdin","r");
    //     $line = trim(fgets(STDIN));
    //     // fscanf(STDIN, "%d\n", $number);
    //     // echo fgets($stdin);
    }
}


                            // à supprimer
class Robot
{

}

$objet = new C3PO("c3");
$objet->initierProtocole();

// $objet = new C3PO("eet");
// $objet->dire("hello");
// echo "\n";
// $objet = new C3PO("eet");
// $objet->marcher();
// echo "\n";
// $objet = new C3PO("eet");
// $objet->dire("hello");




