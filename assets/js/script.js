let contenu = () => {

    let check = new Array();
    $('input[type="checkbox"]:checked').each(value => check.push(($("input:checked").get(value)).value)); //Stock tous les input:checked dans le tableau

    $.post(
        '../../contenu.php',
        {
            'check[]' : check // Envoi le tableau check en POST à contenu.php
        },

        function(data){
            $('#todo').html(data);

            $('#register').click(function(e){ // Se trouve dans l'ajax car sinon il ne retrouve pas l'id
                e.preventDefault();

                contenu(); // Actualise l'affichage au clic du register
            });
        },

        'text'
    );
}

// Début du script "actif"
$('document').ready(function() {

    $("#submit").click(function(e){ // Au clic du submit
        e.preventDefault();
        
        $.post(
            '../../formulaire.php',
            {
                data : $('#tache').val() // Envoi en POST la valeur du champ "tache" à formulaire.php 
            },
            
            data => console.log('Votre tâche a été ajoutée'),
            
            'text'
        );
            
        contenu(); // Sert à actualiser l'affichage (Voir fonction plus haut pour + de détails)

        $('#tache').val(''); // Nettoie le champ
    });

    contenu(); // Affiche une fois contenu.php au chargement de la page
}); 