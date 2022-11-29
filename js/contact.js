$(document).ready(function() {
    // afficher();
    


    // function afficher() {
    //     $.ajax({
    //         url: "affiche.php",
    //         method: "POST",
    //         success: function(data) {
    //             $('#liste').html(data);
    //         }
    //     });
    // }

    var $confirm_mp_client = $('#confirm_mp_client');
    var $mp_client = $('#mp_client');
    $confirm_mp_client.keyup(function(){
        if($(this).val() != $mp_client.val()){ // si la confirmation est différente du mot de passe
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
        }
        else{
            $(this).css({ // si tout est bon, on le rend vert
                borderColor : 'green',
                color : 'green'
    });
}
});


    $('#insc').on('submit', function(event) {
        event.preventDefault();
        
        //alert(typeof(somme));
        var identite = $('#identite').val();
        var mail = $('#mail').val();
        var tel = $('#tel').val();
        var msg = $('#msg').val();
        

        if (identite == '') {
            erreur_identite = 'nom requis';
            $('#erreur_identite').text(erreur_identite);
            $('#identite').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#identite').css('border-color', '');
            }, 5000);
        } else {
            erreur_identite = '';
            $('#erreur_identite').text(erreur_identite);
            $('#identite').css('border-color', '');
        }

        // if (mail == '') {
        //     erreur_mail = 'prénom requis';
        //     $('#erreur_mail').text(erreur_mail);
        //     $('#mail').css('border-color', '#cc0000');
        //     setTimeout(function() {
        //         $('#mail').css('border-color', '');
        //     }, 5000);
        // } else {
        //     erreur_mail = '';
        //     $('#erreur_mail').text(erreur_mail);
        //     $('#mail').css('border-color', '');
        // }

        if (tel == '') {
            erreur_tel = 'sexe requis';
            $('#erreur_tel').text(erreur_tel);
            $('#tel').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#tel').css('border-color', '');
            }, 5000);
        } else {
            erreur_tel = '';
            $('#erreur_tel').text(erreur_tel);
            $('#tel').css('border-color', '');
        }

        if (msg == '') {
            erreur_msg = 'email requis';
            $('#erreur_msg').text(erreur_msg);
            $('#msg').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#msg').css('border-color', '');
            }, 5000);
        } else {
            erreur_msg = '';
            $('#erreur_msg').text(erreur_msg);
            $('#msg').css('border-color', '');
        }



        if (identite != '' && tel != '' && msg != '') {
            
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_contact.php",
            method: "POST",
            data: form_data,
            success: function(data) {
                Swal.fire({
                    icon: 'success',
                    text: 'effectué avec success..'

                })

                $('#insc')[0].reset();

                
            }
        });
    
} else {
        Swal.fire({
            icon: 'error',
            title: 'Erreur !',
            text: 'Remplissez les champs requis' 

        })

    }

    });


});