<?php
$historique_commandes = array('5.49','9.99','5.49','15.99','25');

function afficher_commande($historique_commandes){
    foreach($historique_commandes as $element){
        echo "Une commande de {$element} euros a été reçue. <br>";
    };
    $total=array_sum($historique_commandes);
    echo "Le total des commandes est de {$total} euros.<br>";
    
}

afficher_commande($historique_commandes);
?>