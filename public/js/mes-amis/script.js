$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })
    
    $(document).on('click', '#btnCopieCodeAmi', function(e){
        e.preventDefault()

        $('#inputCodeAmi').select()
        document.execCommand('copy')
    })

    $(document).on('submit', '#formDemandeAmi', function(e){
        e.preventDefault()

        let form = $(this)
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                if(data.error == 1){
                    toastr.error(data.message)
                }else{
                    toastr.success(data.message)
                }
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('click', '.accept-demande', function(e){
        e.preventDefault()

        let demande_id = $(this).data('id')
        $.ajax({
            type: "POST",
            url: urlAcceptDemande,
            data: {
                demande_id
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

    $(document).on('click', '.retirer-ami', function(e){
        e.preventDefault()

        let id = $(this).data('id')
        $.ajax({
            type: "POST",
            url: urlRetirerAmi,
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