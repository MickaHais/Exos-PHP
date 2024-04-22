<?php

// Exercice 1
// function somme_nombres($tableau){
//     $somme = 0;
//     foreach($tableau as $nombre){
//         $somme += $nombre;
//     }
//     return $somme;
// }
// $nombres = [1,5,7,20,3,4];
// echo somme_nombres($nombres);

// Exercice 2
// function recherche_element($tableau, $element){
//     foreach($tableau as $value){
//         if($value === $element){
//             return true;
//         }
//     }
//     return false;
// }
// $tableau = [3, 6, 9, 12, 15];
// $element = 9;
// echo recherche_element($tableau, $element) ? "L'élément est dans le tableau" : "L'élément n'est pas dans le tableau";

// Exercice 3
// function compter_occurences($tableau, $element){
//     $compteur = 0;
//     foreach ($tableau as $valeur){
//         if ($valeur === $element){
//             $compteur ++;
//         }
//     }
//     return $compteur;
// }
// $tableau = [2, 3, 2, 5, 2, 8, 2];
// $element = 2;
// echo compter_occurences($tableau, $element);

// Exercice 4
// function fusionner_tableaux($tableau1, $tableau2){
//     $fusion = array_merge($tableau1, $tableau2);
//     return $fusion;
// }
// $tableau1 = [1, 2, 3];
// $tableau2 = [4, 5, 6];
// $resultat = fusionner_tableaux($tableau1, $tableau2);
// print_r($resultat);

// Exercice 5
// function est_trie($tableau){
//     for  ($i=0; $i < count($tableau)-1 ; $i++){
//         if($tableau[$i] > $tableau[$i+1]){
//             return false;
//         }
//     }
//     return true;
// }
// $tableau_trie = [1, 3, 5, 7, 9];
// $tableau_non_trie = [5, 2, 8, 1, 6];
// echo est_trie($tableau_trie) ? "Ce tableau est trié" : "Ce tableau n'est pas trié";
// echo est_trie($tableau_non_trie) ? "Ce tableau est trié" : "Ce tableau n'est pas trié";

// Exercice 6
// function inverser_tableau($tableau){
//     $inverse = array_reverse($tableau);
//     return $inverse;
// }
// $tableau = [1, 2, 3, 4, 5];
// $resultat = inverser_tableau($tableau);
// print_r($resultat);

// Exercice 7
// function supprimer_doublon($tableau){
//     $unique = array_unique($tableau);
//     return $unique;
// }
// $tableau = [1, 2, 3, 3, 4, 5, 5, 6];
// $resultat = supprimer_doublon($tableau);
// print_r($resultat);

// Exercice 8
// function concatener_chaine($tableau){
//     $concatenation = "";
//     foreach ($tableau as $value){
//         $concatenation .= $value;
//     }
//     return $concatenation;
// }
// $tableau = ["Bonjour", " ", "monde", " ", "!"];
// echo concatener_chaine($tableau);

// Exercice 9 
function element_plus_frequent($tableau){
    $compte = 0;
    $frequent = array_count_values($tableau);
    foreach($frequent as $key => $value){
        if($value > $compte){
            $element_plus_frequent = $key;
            $compte = $value;
        }
    }
    return $element_plus_frequent;
}
$tableau = [2, 3, 2, 5, 2, 8, 2];
echo element_plus_frequent($tableau);

?>