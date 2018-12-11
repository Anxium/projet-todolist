$('document').ready(function () {

    $("#submit").click(function(e){
        e.preventDefault();

        $.post(
            '../../formulaire.php',
            {
                data : $('#todo').val()
            },

            function(data){
                console.log('Votre tâche a été ajoutée');
            },

            'text'
        );
        
        $('#todo').val('');
    });

    $(document).click(function(){

        $.ajax({
            url: "../../contenu.php",
            type: "POST",
            data: false,
            success: function(data) {
                $('#todo').html(data);
            }
        });

    })

}); 