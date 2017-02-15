$(document).ready(function() {


    // pour l'effet smooth
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en millisecondes)

            // Puis la redirection
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
            return false;
    });

    //La vidéo en fond d'écran dans la section 'Our Vision'

 });
