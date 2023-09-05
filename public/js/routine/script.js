$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })

    $(document).on('click', '.add-routine', function(e){
        e.preventDefault()
        
        $.ajax({
            type: "POST",
            url: urlGetFormRoutine,
            data: {
                id: null
            },
            success: function (data) {
                $('#modalBodyAjouterRoutine').html(data.view)
                $('#modalAjouterRoutine').modal('show')
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('click', '.modif-routine', function(e){
        let id = $(this).data('id')

        $.ajax({
            type: "POST",
            url: urlGetFormRoutine,
            data: {
                id
            },
            success: function (data) {
                $('#modalBodyAjouterRoutine').html(data.view)
                $('#modalAjouterRoutine').modal('show')
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('submit', '#formAjouterRoutine', function(e){
        e.preventDefault()

        let form = $(this)
        let exos = getExercices('#tableExercicesRoutine')
        let data = form.serializeArray()
        for (let index = 0; index < exos.length; index++) {
            let element = exos[index];
            data.push({name: "exos[]", value: element})
        }

        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: data,
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

    $(document).on('click', '.del-routine', function(e){
        let id = $(this).data('id')

        $.ajax({
            type: "POST",
            url: urlDeleteRoutine,
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

    $(document).on('click', '#btnAddExerciceToRoutine', function(e){
        e.preventDefault()

        let exo_id = $('#selectAjouterExercice').val()
        let exo_text = $('#selectAjouterExercice option:selected').text()

        if(exo_id == ""){
            toastr.error("Sélectionner un exercice à ajouter.")
        }else{
            $('#tableTbodyExercice').append('<tr><td class="hide-custom">'+exo_id+'</td><td>'+exo_text+'</td><td><a href="javascript:void(0)" class="remove-exercice text-danger"><i class="fas fa-times fa-2x"></i></a></td></tr>')
        }
    })

    $(document).on('click', '.remove-exercice', function(e){
        e.preventDefault()

        $(this).parent().parent().remove()
    })

    $(document).on('click', '.save-routine', function(e){
        e.preventDefault()

        let btn = $(this).find('i')

        let id = $(this).data('id')
        $.ajax({
            type: "POST",
            url: urlSaveRoutine,
            data: {
                id
            },
            success: function (data) {
                if(btn.hasClass('far')){
                    btn.removeClass('far')
                    btn.addClass('fas')
                }else{
                    btn.removeClass('fas')
                    btn.addClass('far')
                }
                toastr.success(data.message)
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

})

function getExercices(tableElement) {
    var exos = [];

    // Parcours de chaque ligne du corps de la table
    $(tableElement).find('tbody tr').each(function() {
        var firstCellText = $(this).find('td:first').text();
        exos.push(firstCellText);
    });

    return exos;
}
