<script>

var base = 250; // ((( VALEUR STANDARD DE 1000 ))) pour contrôler toutes les vitesses de l'animation 
var fade = base*3; // durée du fondu (un multiple de la var base)
var anima = base*7; //durée du mouvement du texte (un multiple de la var base)
var delay = (fade*2) + anima; // durée totale d'une animation (pour les séparer)
// alert(delay);

// $("body").ready(function animation() { // début de la fonction prototype (laissé sur place au cas où vous voudriez y toucher)

// Déscription de la dénomination des fonctions :
//      -les function sont nommées arbitrairement selon leur ordre de passage (preums = 1, deuz = 2, etc ...).
//      -les function resetanim° ont un chiffre à la fin pour désigner à quelle function elles appartiennent et dans quel ordre elles doivent être appelées.
//

    // Premier texte----------------------------------------------------------------------
    var preums = function() {
        $("#accueilanim1").fadeIn(fade); // fait apparaitre le texte (tous les textes sont de base en display: none; dans le css )
        $("#accueilanim1").animate({ // L'animation (la même partout)
            left: "-=100px", 
            top: "+=500px",
        }, {
            duration: anima
        });
        $("#accueilanim1").fadeOut(fade); // fait disparaitre
    };
    
    var resetanim1 = function() {
        $("#accueilanim1").stop().css('top', '10%').css('left', '75%'); // retourne le texte à sa position initiale après l'avoir rendu invisible
    };                                                                  // L'ordre de l'invisibilité et de reset de la position décidé plus bas dans la function infinity
      
    // Deuxième texte-------------------------------------------------------------------
    var deuz = function() {
        $("#accueilanim2").fadeIn(fade);// fait apparaitre le texte (tous les textes sont de base en display: none; dans le css )
        $("#accueilanim2").animate({ // L'animation (la même partout)
            left: "-=100px", 
            top: "+=500px",
        }, {
            duration: anima
        });
        $("#accueilanim2").fadeOut(fade); // fait disparaitre
    };
    
    var resetanim2 = function() {
        $("#accueilanim2").stop().css('top', '10%').css('left', '75%');// retourne le texte à sa position initiale après l'avoir rendu invisible
    };                                                                 // L'ordre de l'invisibilité et de reset de la position décidé plus bas dans la function infinity

    // Troisème texte--------------------------------------------------------------------
    var troiz = function() {
        $("#accueilanim3").fadeIn(fade);// fait apparaitre le texte (tous les textes sont de base en display: none; dans le css )
        $("#accueilanim3").animate({ // L'animation (la même partout)
            left: "-=100px", 
            top: "+=500px",
        }, {
            duration: anima
        });
        $("#accueilanim3").fadeOut(fade); // fait disparaitre
    };
    
    var resetanim3 = function() {
        $("#accueilanim3").stop().css('top', '10%').css('left', '75%'); // retourne le texte à sa position initiale après l'avoir rendu invisible
    };                                                                  // L'ordre de l'invisibilité et de reset de la position décidé plus bas dans la function infinity

    // Quatrième texte----------------------------------------------------------------------------------                
    var quatr = function() {
        $("#accueilanim4").fadeIn(fade);// fait apparaitre le texte (tous les textes sont de base en display: none; dans le css )
        $("#accueilanim4").animate({ // L'animation (la même partout)
            left: "-=100px", 
            top: "+=500px",
        }, {
            duration: anima
        });
        $("#accueilanim4").fadeOut(fade); // fait disparaitre
    };
    
    var resetanim4 = function() {
        $("#accueilanim4").stop().css('top', '10%').css('left', '75%'); // retourne le texte à sa position initiale après l'avoir rendu invisible
    };                                                                  // L'ordre de l'invisibilité et de reset de la position décidé plus bas dans la function infinity

    // Cinquième texte----------------------------------------------------------------------------------
    var cinq = function() {
        $("#accueilanim5").fadeIn(fade);// fait apparaitre le texte (tous les textes sont de base en display: none; dans le css )
        $("#accueilanim5").animate({ // L'animation (la même partout)
            left: "-=100px", 
            top: "+=500px",
        }, {
            duration: anima
        });
        $("#accueilanim5").fadeOut(fade); // fait disparaitre
    };
    
    var resetanim5 = function() {
        $("#accueilanim5").stop().css('top', '10%').css('left', '75%'); // retourne le texte à sa position initiale après l'avoir rendu invisible
    };                                                                  // L'ordre de l'invisibilité et de reset de la position décidé plus bas dans la function infinity

    //----------------------------------------------------------------------------------

    // Je suis retourné au JS après que toutes mes tentatives en JQuery aient échouées.

    // ATTENTION au cycle entre l'appel des function d'animation et les resetanim° (je sais que ce n'est pas la meilleure méthode mais faites avec, ou remplacez la si vous pouvez)
    // Pour faire le plus simple possible: on appelle la première function en 1er, puis on la reset après setTimeout calé sur la var delay
    // et on appelle la 2ème function après le même delay (qu'on incrémente  (toute les 2 lignes)).

    // POUR RAJOUTER DES TEXTES: ajoutez une <div class="accueilanim accueilanim(numéro désiré)" id="accueilanim(numéro désiré)"> dans le html en tant
    // qu'enfant de la <div class="accueilpiccenter"> (dans le contenu de l'accueil), copiez-collez une function comme "preums" ***(n'oubliez pas la function resetanim°)***
    // et modifiez les chiffres de la désignation sans toucher au paramètres pour apeller vos nouvelle(s) div. Puis ajoutez de nouvelles lignes copiées-collées
    // dans la function infinity plus bas. ***(Gaffe aux instructions)***
    

    var infinity = function() { 
        preums();
        setTimeout(resetanim1, delay);
        setTimeout(deuz, delay);
        setTimeout(resetanim2, delay*2);
        setTimeout(troiz, delay*2);
        setTimeout(resetanim3, delay*3); // <-- Gaffe à l'incrémentation (toute les 2 lignes) de la var delay
        setTimeout(quatr, delay*3);
        setTimeout(resetanim4, delay*4); // <-- Gaffe à l'incrémentation (toute les 2 lignes) de la var delay
        setTimeout(cinq, delay*4);
        setTimeout(resetanim5, delay*5);// <-- Gaffe à l'incrémentation (toute les 2 lignes) de la var delay
        // Ligne à partir de laquelle vous devez ajouter vos function
        
        // ***ATTENTION*** de ne pas oublier de modifier en conséquence l'incrementation de la var delay sur la dernière ligne (toujours mettre le chiffre de l'avant dernière ligne)
        setTimeout(infinity, delay*5); // Cette ligne est pour reset le cycle de l'animation et redémarrer la function infinity (placez vos ajouts avant cette ligne)
    };

    $("body").ready(infinity()); // 2ème version d'appel de la function (jugée meilleure par moi-même), à jeter si vous voulez retourner à la function prototype
    
// }); // fin de la fonction prototype (laissée sur place au cas où vous voudriez y toucher)


</script>
