$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })

    $(document).on('click', '.add-exercice', function(e){
        e.preventDefault()
        $('#formAjouterExercice').trigger('reset')
        $('#btnSubmitFormAjouterExercice').text('Ajouter')
        $('#modalAjouterExercice').modal('show')
    })

    $(document).on('click', '.modif-exercice', function(e){
        let id = $(this).data('id')

        $.ajax({
            type: "POST",
            url: urlGetExercice,
            data: {
                id
            },
            success: function (data) {
                $('#formAjouterExercice').trigger('reset')
                $('#btnSubmitFormAjouterExercice').text('Modifier')
                $('#inputNomExercice').val(data.nom)
                $('#inputDescriptionExercice').val(data.description)
                $('#inputHiddenIdExercice').val(data.id)
                if(data.private){
                    $('#radioPrivate').trigger('click')
                }else{
                    $('#radioPublique').trigger('click')
                }
                $('#modalAjouterExercice').modal('show')

            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('submit', '#formAjouterExercice', function(e){
        e.preventDefault()

        let form = $(this)

        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                toastr.success(data.message)
                setTimeout(() => {
                    location.reload()
                }, 1000);
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('click', '.del-exercice', function(e){
        let id = $(this).data('id')

        $.ajax({
            type: "POST",
            url: urlDeleteExercice,
            data: {
                id
            },
            success: function (data) {
                toastr.success(data.message)
                setTimeout(() => {
                    location.reload()
                }, 1000);
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

})