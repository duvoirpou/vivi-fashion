$(document).ready(function() {
    afficher();
    


    function afficher() {
        $.ajax({
            url: "affiche.php",
            method: "POST",
            success: function(data) {
                $('#liste').html(data);
            }
        });
    }

    $(document).on('click', '.supprimer', function() {


        Swal.fire({
            title: 'Etes vous sûr ?',
            text: "Cette opératon est irreversible !",
            icon: 'warning',
            showCloseButton: true,
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer !'
        }).then((result) => {
            if (result.value) {
                var id = $(this).attr('id');
                var action = 'supprimer';
                console.log(id);
                $.ajax({
                    url: "supprimer_commande.php",
                    method: "POST",
                    data: {
                        id: id,
                        action: action
                    },
                    success: function(rep) {
                        afficher();
                        dataTable.ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            text: 'effectué avec success..'

                        })
                    }
                });
            }
        })


    });
    /*$('#user_dialog').dialog({
        autoOpen: false,
        width: 400
    });*/

    $('#add').click(function() {
        $('#Modal').modal('show');
        $('.modal-title').text('Ajouter le produit');
        $('#action').val('insert');
        $('#form_action').val('ajouter');
        $('#user_form')[0].reset();
        $('#form_action').attr('disabled', false);
        //$('#user_dialog').dialog('open');
    });

    $('#user_form').on('submit', function(event) {
        event.preventDefault();
        var erreur_reste = '';
        var avance = parseInt($('#avance').val(), 10);
        var montant = parseInt($('#montant').val(), 10);
        var reste = parseInt($('#reste').val(), 10);
        var somme = avance + reste;
        var somme_reste = montant - avance;
        //alert(typeof(somme));

        if (reste == '') {
            erreur_reste = 'reste requis';
            $('#erreur_reste').text(erreur_reste);
            $('#reste').css('border-color', '#cc0000');
        } else {
            erreur_reste = '';
            $('#erreur_reste').text(erreur_reste);
            $('#reste').css('border-color', '');
        }



        if (erreur_reste == '' && somme <= montant) {

            // $('#form_action').attr('disabled', 'disabled');
            var form_data = $(this).serialize();
            $.ajax({

                url: "action_liste_commande.php",
                method: "POST",
                data: form_data,
                success: function(data) {
                    dataTable.ajax.reload();
                    Swal.fire({
                        icon: 'success',
                        text: 'effectué avec success..'

                    })

                    $('#user_form')[0].reset();

                    setTimeout(function() {
                        $('#action_alert').empty();
                    }, 5000);
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Erreur...',
                text: 'Entrez une somme comprise entre 1 et ' + somme_reste

            })

        }
    });


    $('#user_forms').on('submit', function(event) {
        event.preventDefault();
        var erreur_reste = '';
        var avance = parseInt($('.avance').val(), 10);
        var montant = parseInt($('.montant').val(), 10);
        var reste = parseInt($('.reste').val(), 10);
        var somme = avance + reste;
        var somme_reste = montant - avance;
        //alert(typeof(somme));







        // $('#form_action').attr('disabled', 'disabled');
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_liste_commandes.php",
            method: "POST",
            data: form_data,
            success: function(data) {
                dataTable.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    text: 'effectué avec success..'

                })

                $('#user_forms')[0].reset();

                setTimeout(function() {
                    $('#action_alerts').empty();
                }, 5000);
            }
        });

    });
    $('#rajout_form').on('submit', function(event) {
        event.preventDefault();
        var erreur_reste = '';
        var avance = parseInt($('#avance').val(), 10);
        var montant = parseInt($('#montant').val(), 10);
        var reste = parseInt($('#reste').val(), 10);
        var somme = avance + reste;
        var somme_reste = montant - avance;
        //alert(typeof(somme));


        // $('#form_action').attr('disabled', 'disabled');
        var form_data = $(this).serialize();
        $.ajax({

            url: "action_commande_refaite.php",
            method: "POST",
            data: form_data,
            success: function(data) {
                dataTable.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    text: 'effectué avec success..'

                })

                $('#rajout_form')[0].reset();

                setTimeout(function() {
                    $('#action_alert').empty();
                }, 5000);
            }
        });

    });

    $(document).on('click', '.edit', function() {
        $('#action_alert').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_liste_commande.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {
                $('#erreur_avance').text('');
                $('#avance').css('border-color', '');
                $('#erreur_montant').text('');
                $('#montant').css('border-color', '');
                $('#erreur_prenoms_client').text('');
                $('#prenoms_client').css('border-color', '');
                $('#erreur_noms_client').text('');
                $('#noms_client').css('border-color', '');


                $('#Modal_liste_commande').modal('show');
                $('#id_cmd').val(reponse.id_cmd);
                $('#id_client').val(reponse.id_client);
                $('#noms_client').val(reponse.noms_client);
                $('#montant').val(reponse.montant);
                $('#avance').val(reponse.avance);
                $('#nbre_tissus').val(reponse.nbre_tissus);
                $('#modele').val(reponse.modele);
                $('#epaule').val(reponse.epaule);
                $('#poitrine').val(reponse.poitrine);
                $('#ventre').val(reponse.ventre);
                $('#bassin').val(reponse.bassin);
                $('#ceinture').val(reponse.ceinture);
                $('#cuisse').val(reponse.cuisse);
                $('#bas_pied').val(reponse.bas_pied);
                $('#longueur_manche').val(reponse.longueur_manche);
                $('#tour_manche').val(reponse.tour_manche);
                $('#tour_poignet').val(reponse.tour_poignet);
                $('#col').val(reponse.col);
                $('#contour_tete').val(reponse.contour_tete);
                $('#longueur_chemise').val(reponse.longueur_chemise);
                $('#longueur_pantalon').val(reponse.longueur_pantalon);
                $('#sens_seins').val(reponse.sens_seins);
                $('#pince').val(reponse.pince);
                $('#longueur_haut').val(reponse.longueur_haut);
                $('#longueur_juppe').val(reponse.longueur_juppe);
                $('#longueur_robe').val(reponse.longueur_robe);
                $('#longueur_culotte').val(reponse.longueur_culotte);
                $('#longueur_fente').val(reponse.longueur_fente);
                $('#tour_taille').val(reponse.tour_taille);
                $('#genoux').val(reponse.genoux);
                $('#remarques').val(reponse.remarques);
                if (reponse.id_genre == 1) {
                    $('#genre').val('homme');
                }
                if (reponse.id_genre == 2) {
                    $('#genre').val('femme');
                }
                $('.modal-title').text('Modifier la commande');
                $('#action').val('modifier');
                $('#hidden_id').val(id);
                $('#form_action').val('Modifier');


            }
        });
    });


    $(document).on('click', '#editer', function(ev) {
        ev.preventDefault();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_liste_commandes.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {
                
                $('.action').val('modifier');
                $('.hidden_id').val(id);
                $('.form_action').val('Modifier');
                Swal.fire({
                    icon: 'success',
                    text: 'effectué avec success..'

                })

            }
        });
    });



    $(document).on('click', '.edit_commande', function() {
        $('#action_alert').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_commande_refaite.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {
                $('#erreur_avance').text('');
                $('#avance').css('border-color', '');
                $('#erreur_montant').text('');
                $('#montant').css('border-color', '');
                $('#erreur_prenoms_client').text('');
                $('#prenoms_client').css('border-color', '');
                $('#erreur_noms_client').text('');
                $('#noms_client').css('border-color', '');


                $('#Modal_add_commande').modal('show');
                $('.id_cmd').val(reponse.id_cmd);
                $('.id_client').val(reponse.id_client);
                $('.noms_client').val(reponse.noms_client);
                $('.montant').val(reponse.montant);
                $('.avance').val(reponse.avance);
                $('.nbre_tissus').val(reponse.nbre_tissus);
                $('.modele').val(reponse.modele);
                $('.epaule').val(reponse.epaule);
                $('.poitrine').val(reponse.poitrine);
                $('.ventre').val(reponse.ventre);
                $('.bassin').val(reponse.bassin);
                $('.ceinture').val(reponse.ceinture);
                $('.cuisse').val(reponse.cuisse);
                $('.bas_pied').val(reponse.bas_pied);
                $('.longueur_manche').val(reponse.longueur_manche);
                $('.tour_manche').val(reponse.tour_manche);
                $('.tour_poignet').val(reponse.tour_poignet);
                $('.col').val(reponse.col);
                $('.contour_tete').val(reponse.contour_tete);
                $('.longueur_chemise').val(reponse.longueur_chemise);
                $('.longueur_pantalon').val(reponse.longueur_pantalon);
                $('.sens_seins').val(reponse.sens_seins);
                $('.pince').val(reponse.pince);
                $('.longueur_haut').val(reponse.longueur_haut);
                $('.longueur_juppe').val(reponse.longueur_juppe);
                $('.longueur_robe').val(reponse.longueur_robe);
                $('.longueur_culotte').val(reponse.longueur_culotte);
                $('.longueur_fente').val(reponse.longueur_fente);
                $('.tour_taille').val(reponse.tour_taille);
                $('.genoux').val(reponse.genoux);
                $('.remarques').val(reponse.remarques);
                $('.id_genre').val(reponse.id_genre);
                $('.modal-title').text('Valider la commande');
                $('#action').val('rajouter');
                $('#hidden_id').val(id);
                $('#form_actions').val('Rajouter');


            }
        });
    });


});