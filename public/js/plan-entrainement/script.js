$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })
    
    $(document).on('change', '.assign-routine', function(e){
        e.preventDefault()

        let routine_id = $(this).find('option:selected').val()
        let jour_id = $(this).data('jour_id')

        $.ajax({
            type: "POST",
            url: urlAssignRoutine,
            data: {
                routine_id,
                jour_id
            },
            success: function (data) {
                toastr.success(data.message)
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })
})