<?php
// déclaration d'une variable de contenu, équivalent à un résultat venant d'une DB
function pagination(){
$contenu = array(
    1 => array(
        "titre"=>"Avocado toast",
        "letexte"=>"Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux ! 
				Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer. 
				Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes sur des idées faciles et transpirez sous le soleil plutôt que sous le tablier !.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    2 => array(
        "titre"=>"Apple pie",
        "letexte"=>"Un pique-nique aussi facile à préparer qu’agréable à picorer ? Les recettes se concentrent en temps, pas en plaisir, pour rester plus longtemps sur l’herbe que devant les fourneaux ! 
					Vite faites, bien faites, les surprises du panier font appel aux magiciens de la cuisine express pour régaler sans compliquer. 
					Zéro prise de tête pour les rois de la nappe à carreaux, misez sans complexes sur des idées faciles et transpirez sous le soleil plutôt que sous le tablier !",
        "ladate"=>"2013-11-15 18:20:00"
    ),
    3 => array(
        "titre"=>"Chocolate cake",
        "letexte"=>"Si le pique-nique se veut rapide, c’est pour mieux profiter du grand air et du soleil. Une excellente raison, donc, pour déballer les jokers de la recette ! 
		          En tête desquels la tomate, rouge, ronde et gorgée de soleil, prête à aligner sur les carreaux de la nappe des bruschettas colorées de tomate au fromage frais.",
        "ladate"=>"2014-18-02 21:15:00"
    ),
    4 => array(
        "titre"=>"Tortellini",
        "letexte"=>"Me mini tartelettes express aux tomates cerise ou des pâtes aux tomates cerise et basilic en bocal… 
		          à moins de choisir la version séchée en cake doré aux tomates séchées, pignons de pin et jambon, ou terrine d’agneau aux tomates séchées.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    5 => array(
        "titre"=>"Lemon Cake",
        "letexte"=>"De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête ! 
		          Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salam.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    6 => array(
        "titre"=>"Couscous au citron rouge",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    7 => array(
        "titre"=>"Poissons empoisonnés à l'arsenic",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, 
				on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.
				De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête ! 
				Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salami",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    8 => array(
        "titre"=>"Les septs citrons à la mangue bleu mauve",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, 
		          et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    9 => array(
        "titre"=>"Neuf",
        "letexte"=>"De quoi entamer comme il se doit les incontournables recettes bouchères et charcutières, sans stress et sans prise de tête ! 
				Impossible de se tromper avec un sandwich au jambon et crudités, pas question de zapper le club sandwich au brie et salamiUne fonction est un bloc de code PHP 
				destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, 
				et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    10 => array(
        "titre"=>"Dix",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. 
		Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    11 => array(
        "titre"=>"Onze",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    12 => array(
        "titre"=>"Douze coup de midi à la sauce piquante",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    13 => array(
        "titre"=>"Treize patates et une sexy cuisinière",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, 
		           on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    ),
    14 => array(
        "titre"=>"La sauce ndole à l'eau brulé",
        "letexte"=>"Une fonction est un bloc de code PHP destiné généralement à être réutilisé plusieurs fois. Plutôt que d'écrire plusieurs fois le même morceau de code, on met celui-ci dans une fonction, et c'est cette fonction que l'on appellera dès que l'on en aura besoin.",
        "ladate"=>"2013-11-02 21:15:00"
    )
);
    $total = count($contenu);
    $nbrArticleparpage = 3;
    $nbrDePage = ceil($total/$nbrArticleparpage);
    
    if(isset($_GET['page'])){
        $pageActuel = intval($_GET['page']);
        if($pageActuel>$nbrDePage){
            $pageActuel=$nbrDePage;
        }
    }
    else{
        $pageActuel = 1;
    };
    $premiereEntree=($pageActuel-1)*$nbrArticleparpage;
    $offset = $nbrArticleparpage;
    $results = array_slice($contenu,$premiereEntree,$offset);
    foreach($results as $result){
        print('<strong>'.$result['titre'].'</strong> <br>'. '<p>'.$result['letexte']. '</p>'. '<p><strong>'.$result['ladate'].'</strong></p> <br>');
    };
 
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>
    <?=  pagination()?>
    
</body>
</html>