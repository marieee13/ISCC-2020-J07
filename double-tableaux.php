<?php
 
$panier = array (
['T-shirt rouge', 15.50, 5],
['T-shirt vert', 15.50, 6],
['T-shirt argent', 15.50, 8],
['Short bleu', 16.50, 5],
['Short vert', 19.99, 5],
['Veste argent', 19.99, 10], 
['Veste argent', 35, 3],
);
 
function afficher_panier($panier) {
    foreach ($panier as $a) {
        echo ("<ul>");
        foreach ($a as $b)
        echo ("<li>$b</li>");
        echo ("</ul>");
    }
}
 
afficher_panier($panier);
 
function calculer_total_panier($panier){
        $prix = 0;
 
    foreach($panier as $a){
        $prix=$a[1]+$prix;
    }
    return ($prix);
}
echo "<p>" . calculer_total_panier($panier) . "</p>";
?>
