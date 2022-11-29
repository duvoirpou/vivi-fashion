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
        var nom_client = $('#nom_client').val();
        var prenom_client = $('#prenom_client').val();
        var sexe_client = $('#sexe_client').val();
        var email_client = $('#email_client').val();
        var login = $('#login').val();
        var mp_client = $('#mp_client').val();
        var confirm_mp_client = $('#confirm_mp_client').val();
        var adresse_client = $('#adresse_client').val();
        var ville_client = $('#ville_client').val();
        var tel_client = $('#tel_client').val();

        var erreur_nom_client;
        var erreur_prenom_client;
        var erreur_sexe_client;
        var erreur_email_client;
        var erreur_login;
        var erreur_mp_client;
        var erreur_confirm_mp_client;
        var erreur_adresse_client;
        var erreur_ville_client;
        var erreur_tel_client;

        if (nom_client == '') {
            erreur_nom_client = 'nom requis';
            $('#erreur_nom_client').text(erreur_nom_client);
            $('#nom_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#nom_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_nom_client = '';
            $('#erreur_nom_client').text(erreur_nom_client);
            $('#nom_client').css('border-color', '');
        }

        if (prenom_client == '') {
            erreur_prenom_client = 'prénom requis';
            $('#erreur_prenom_client').text(erreur_prenom_client);
            $('#prenom_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#prenom_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_prenom_client = '';
            $('#erreur_prenom_client').text(erreur_prenom_client);
            $('#prenom_client').css('border-color', '');
        }

        if (sexe_client == '') {
            erreur_sexe_client = 'sexe requis';
            $('#erreur_sexe_client').text(erreur_sexe_client);
            $('#sexe_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#sexe_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_sexe_client = '';
            $('#erreur_sexe_client').text(erreur_sexe_client);
            $('#sexe_client').css('border-color', '');
        }

        if (email_client == '') {
            erreur_email_client = 'email requis';
            $('#erreur_email_client').text(erreur_email_client);
            $('#email_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#email_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_email_client = '';
            $('#erreur_email_client').text(erreur_email_client);
            $('#email_client').css('border-color', '');
        }


        if (login == '') {
            erreur_login = 'login requis';
            $('#erreur_login').text(erreur_login);
            $('#login').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#login').css('border-color', '');
            }, 5000);
        } else {
            erreur_login = '';
            $('#erreur_login').text(erreur_login);
            $('#login').css('border-color', '');
        }


        if (mp_client == '') {
            erreur_mp_client = 'mot de passe requis';
            $('#erreur_mp_client').text(erreur_mp_client);
            $('#mp_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#mp_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_mp_client = '';
            $('#erreur_mp_client').text(erreur_mp_client);
            $('#mp_client').css('border-color', '');
        }
        
        if (confirm_mp_client == '') {
            erreur_confirm_mp_client = 'confirmation du mot de passe requise';
            $('#erreur_confirm_mp_client').text(erreur_confirm_mp_client);
            $('#confirm_mp_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#confirm_mp_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_confirm_mp_client = '';
            $('#erreur_confirm_mp_client').text(erreur_confirm_mp_client);
            $('#confirm_mp_client').css('border-color', '');
        }


        if (adresse_client == '') {
            erreur_adresse_client = 'adresse requise';
            $('#erreur_adresse_client').text(erreur_adresse_client);
            $('#adresse_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#adresse_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_adresse_client = '';
            $('#erreur_adresse_client').text(erreur_adresse_client);
            $('#adresse_client').css('border-color', '');
        }


        if (ville_client == '') {
            erreur_ville_client = 'ville requise';
            $('#erreur_ville_client').text(erreur_ville_client);
            $('#ville_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#ville_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_ville_client = '';
            $('#erreur_ville_client').text(erreur_ville_client);
            $('#ville_client').css('border-color', '');
        }


        if (tel_client == '') {
            erreur_tel_client = 'téléphone requis';
            $('#erreur_tel_client').text(erreur_tel_client);
            $('#tel_client').css('border-color', '#cc0000');
            setTimeout(function() {
                $('#tel_client').css('border-color', '');
            }, 5000);
        } else {
            erreur_tel_client = '';
            $('#erreur_tel_client').text(erreur_tel_client);
            $('#tel_client').css('border-color', '');
        }

        if (nom_client != '' && prenom_client != '' && sexe_client != '' && email_client != '' && login != '' && mp_client != '' && confirm_mp_client != '' && adresse_client != '' && ville_client != '' && tel_client != '') {
            if(confirm_mp_client==mp_client){
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_insc.php",
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
    }
else{
    Swal.fire({
        icon: 'error',
        title: 'Erreur !',
        text: 'Vérifiez votre mot de passe' 

    })
}
} else {
        Swal.fire({
            icon: 'error',
            title: 'Erreur !',
            text: 'Remplissez les champs requis' 

        })

    }

    });


});