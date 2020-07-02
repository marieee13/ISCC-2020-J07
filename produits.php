<?php
$produits = array (
    'T-shirt rouge'=> 15.50,
    'T-shirt vert'=> 15.50,
    'T-shirt argent'=> 16.50,
    'Short bleu'=> 19.99,
    'Short vert'=> 19.99,
    'Veste argent'=> 35,
);

function afficher_produits ($produits){
 echo("<table><tr><td>Produits</td><td>Prix</td></tr>");
foreach($produits as $a =>$b)
echo ("<tr><td> $a</td><td> $b</td></tr>");
echo ("</table>");
}

afficher_produits ($produits);
?>