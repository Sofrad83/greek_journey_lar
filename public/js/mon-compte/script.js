$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })

    $(document).on('click', '.delete-pdp', function(e){
        e.preventDefault()

        $.ajax({
            type: "POST",
            url: urlDeletePdp,
            success: function (data) {
                toastr.success(data.message)
                setTimeout(() => {
                    location.reload()
                }, 500);
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('click', '.edit-pdp', function(e){
        e.preventDefault()

        $('#modalEditPdp').modal('show')
    })

    $(document).on('click', '.pdp-mon-compte', function(e){
        e.preventDefault()

        let url = $(this).data('url')
        $.ajax({
            type: "POST",
            url: urlChangePdp,
            data: {
                url
            },
            success: function (data) {
                location.reload()
            },
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })

    $(document).on('click', '#btnMettreAJour', function(e){
        e.preventDefault()

        let nom = $('#inputNom').val()
        $.ajax({
            type: "POST",
            url: urlChangeInfos,
            data: {
                nom
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

    $(document).on('click', '#btnChangePdpCustom', function(e){
        e.preventDefault()
        $(this).next().trigger('click')
    })

    $(document).on('change', 'input[type=file]', function(e){
        let file = $(this)[0].files[0]

        let formData = new FormData()
        formData.append('pdp', file, file.name)

        $.ajax({
            url: urlChangePdpCustom, 
            method: "POST", 
            data: formData,
            contentType: false, 
            processData: false,   
            success: function(data){
                if(data.error == 1){
                    toastr.error(data.message)
                }else{
                    location.reload()
                }
            }, 
            error: function(data){
                toastr.error("Une erreur est survenue :(")
                console.log(data);
            }
        });
    })
})