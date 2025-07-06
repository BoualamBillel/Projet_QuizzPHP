<?php


$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;
function affichageScore ($score)
{
    echo"###################################################\n\n###################################################
Score : $score
###################################################\n\n";
return;
}
$NB_QUESTIONS = count($questions);


for ($i = 0; $i < $NB_QUESTIONS; $i++) {
    echo "###################################################
######## Qui veux gagner des millions ?! ##########\n";
affichageScore($score);

    echo $questions[$i] . "\n";
    $reponse_utilisateur = trim(fgets(STDIN));
    if ($reponse_utilisateur == $reponses[$i]) {
        echo "Bravo ! Bonne réponse !\nVotre score augmente de 10 points ! \n";
        $score += 10;

    } else {
        echo "Mauvaise réponse !\nVotre score n'augmente pas !\n";

    }

    echo "Votre score actuel est : $score\n";
}