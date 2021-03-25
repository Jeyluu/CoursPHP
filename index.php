<?php
//On défini une constante, une constante par convention s'ecrit en majuscule.
define("SEPARATEUR","-");

//Note :
//Bien penser à chaque point virgule à chaque fois qu'on termine une commande.
$nomJoueur1 = "Jeremy"; //Chaine de caractères
$ageJoueur1 = 17; //nombre
$estUnHommeJoueur1 = true; // Booléen

$nomJoueur2 = "Marion"; //Chaine de caractères
$ageJoueur2 = 22; //nombre
$estUnHommeJoueur2 = false;


separateur(SEPARATEUR);
echo "</br>";
afficherJoueur($nomJoueur1,$ageJoueur1,$estUnHommeJoueur1);// Dans les parenthèses, nous allons rappeler les variables que les informations ci-dessous utiliseront. Si les varibles ne sont pas rappelé lorsque l'on utilise la fonction. Cela ne fonctionnera pas.
echo "</br>";
separateur(SEPARATEUR);
echo "</br>";
afficherJoueur($nomJoueur2,$ageJoueur2,$estUnHommeJoueur2);
echo "</br>";
separateur(SEPARATEUR);
echo "</br>";
afficherLeJoueurLePlusAge($ageJoueur1,$ageJoueur2,$nomJoueur1, $nomJoueur2);
echo "</br>";
separateur(SEPARATEUR);
echo "</br>";
$differenceAge = calculDifferenceAge($ageJoueur1,$ageJoueur2);
echo "La différence d'age est de : ".$differenceAge;
echo "</br>";
separateur(SEPARATEUR);
echo "</br>";
afficheMajeur($ageJoueur1);
echo "</br>";
separateur(SEPARATEUR);
echo "</br>";
afficheMajeur($ageJoueur2);
echo "</br>";
separateur(SEPARATEUR);

function afficherJoueur($nom,$age,$homme) { // Dans les parenthèses on déclare les informations que l'on va utiliser dans la fonction.
    
    echo "NOM DU JOUEUR : ". $nom;
    echo "</br>";
    echo "AGE DU JOUEUR :". $age;
    echo "</br>";
    

    if($homme){
        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    }
}

function afficherLeJoueurLePlusAge($ageJoueur1,$ageJoueur2,$nomJ1,$nomJ2) {
    
    if($ageJoueur1 > $ageJoueur2){
        echo $nomJ1 . " est plus agé(e) que " .$nomJ2;
    } else {
        echo $nomJ2 . " est plus agé(e) que " .$nomJ1;
    }

}

function calculDifferenceAge($ageJoueur1,$ageJoueur2){
    $resultat = $ageJoueur1 - $ageJoueur2;

    if($resultat < 0){ // Ce if veut dire que si le resultat est inférieur à 0, alors il doit le rebasculer en positif.
        $resultat = -$resultat;
    }
    return $resultat;
}

function separateur($separateur){
    echo "</br>";
    for($i = 0; $i < 20; $i++){
        echo $separateur;
    }
    
    echo "</br>";
}

function afficheMajeur($age){
    if($age > 18){
        echo "Le joueur est majeur";
    }
    else {
        echo "Le joueur est mineur";
    }
}

?>