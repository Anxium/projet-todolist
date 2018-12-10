$("#submit").click(function(e){
    e.preventDefault();

    $.post(
        'formulaire.php',
        {
            data : $('#todo').val()
        },

        function(data){

        },

        'text'
    );

});
