<?php

//Note :
//Bien penser à chaque point virgule à chaque fois qu'on termine une commande.
$nomJoueur1 = "Jeremy"; //Chaine de caractères
$ageJoueur1 = 28; //nombre
$estUnHommeJoueur1 = true; // Booléen

$nomJoueur2 = "Marion"; //Chaine de caractères
$ageJoueur2 = 30; //nombre
$estUnHommeJoueur2 = false;

echo test();
echo "</br>";

afficherJoueur($nomJoueur1,$ageJoueur1,$estUnHommeJoueur1);// Dans les parenthèses, nous allons rappeler les variables que les informations ci-dessous utiliseront. Si les varibles ne sont pas rappelé lorsque l'on utilise la fonction. Cela ne fonctionnera pas.
echo "</br>";
echo "</br>";
afficherJoueur($nomJoueur2,$ageJoueur2,$estUnHommeJoueur2);

function afficherJoueur($nom,$age,$homme) { // Dans les parenthèses on déclare les informations que l'on va utiliser dans la fonction.
    
    echo "NOM DU JOUEUR1 : ". $nom;
    echo "</br>";
    echo "AGE DU JOUEUR 1 :". $age;
    $age = $age + 1; //C'est une assignation
    echo "</br>";
    echo "AGE DU JOUEUR 1 :". $age;
    echo "</br>";

    if($homme === true){
        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    }
}

function test() {
    $a = 5;
    $b = 20;

    return $a + $b;
}

?>