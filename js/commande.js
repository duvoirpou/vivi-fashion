$(document).ready(function() {

    var dataTable = $('#mydatatable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "liste_commande.php",
            type: "post"
        }

    });

    $('#form_user').on('submit', function(event) {
        event.preventDefault();
        




            $('#form_action').attr('disebled', 'disebled');
            var form_data = $(this).serialize();

            $.ajax({

                url: "action_commande.php",
                method: "POST",
                data: form_data,
                success: function(data) {
                    dataTable.ajax.reload();
                    $('#action_message').html(data);

                    $('#form_user')[0].reset();


                    setTimeout(function() {
                        $('#action_message').html('');
                    }, 5000);

                }
            });


    });

    $(document).on('click', '.edit', function() {
        $('#action_message').empty();
        var id = $(this).attr('id');
        var action = 'afficher';
        $.ajax({
            url: "action_commande.php",
            method: "POST",
            data: { id: id, action: action },
            dataType: "JSON",
            success: function(reponse) {
                $('#erreur_nom_commande').text('');
                $('#nom_commande').css('border-color', '');
                $('#erreur_prix').text('');
                $('#prix').css('border-color', '');

                $('#erreur_mois_commande').text('');
                $('#mois_commande').css('border-color', '');


                $('#comm').modal('show');
                $('#id_commande').val(reponse.id_commande);
                $('#nom_commande').val(reponse.nom_commande);
                $('#prix').val(reponse.prix);
                $('#mois_commande').val(reponse.mois_commande);
                $('#annee_commande').val(reponse.annee_commande);
                $('#date_commande').val(reponse.date_commande);
                $('#id_client').val(reponse.id_client);
                $('#paye').val(reponse.paye);
                $('#photo').val(reponse.photo);
                $('#nom_client').val(reponse.nom_client);
                $('#prenom_client').val(reponse.prenom_client);
                $('.modal-title').text('Modifier le client');
                $('#action').val('modifier');
                $('#id_cache').val(id);
                $('#form_users').val('Modifier');


            }
        });
    });

});