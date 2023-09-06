$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })

    $(document).on('click', '.card-start-seance', function(e){
        e.preventDefault()

        let form = $(this).data('form')
        $(form).trigger('submit')
    })

    $(document).on('click', '.btn-add-serie', function(e){
      e.preventDefault()
      let target = $(this).data('target')
      let target_rep = $(this).data('target_rep')
      let target_poids = $(this).data('target_poids')

      let rep = $(target_rep).val() != "" ? $(target_rep).val() : 0
      let poids = $(target_poids).val() != "" ? $(target_poids).val() : 0
      if(rep > 0){
        $(target).append(
          '<tr><td class="td-rep">'+rep+'</td><td class="td-poids">'+poids+'</td><td><button class="btn btn-danger btn-remove-serie btn-sm" type="button"><i class="fas fa-times"></i></button></td></tr>'
        )
      }
      
    })

    $(document).on('click', '.btn-remove-serie', function(e){
      e.preventDefault()
      $(this).parent().parent().remove()
    })

    $(document).on('click', '.btn-terminer-seance', function(e){
      e.preventDefault()
      let serie_a_confirmer = $('.btn-confirm-serie').length
      if(serie_a_confirmer){
        $('#modalTerminerSeanceNon').modal('show')
      }else{
        $('#modalTerminerSeance').modal('show')
      }
    })

    $(document).on('click', '.btn-confirm-serie', function(e){
      e.preventDefault()

      let td_btn = $(this).parent()
      let td_rep = $(this).parent().parent().find('td.td-rep')
      let td_poids = $(this).parent().parent().find('td.td-poids')

      td_rep.html(td_rep.find('input').val() != "" ? td_rep.find('input').val() : 0)
      td_poids.html(td_poids.find('input').val() != "" ? td_poids.find('input').val() : 0)
      td_btn.html('<button class="btn btn-danger btn-remove-serie btn-sm" type="button"><i class="fas fa-times"></i></button>')
    })

    $(document).on('click', '#btnTerminerSeance', function(e){
      e.preventDefault()

      let form = new FormData()

      let tables = $('.table-exercice')
      tables.each(function(index){
        let exercice = $(this).data('exercice')
        let tbodies = $(this).find('tbody')
        tbodies.each(function(i){
          $(this).children().each(function(k){
            let serie = k + 1
            let rep = $(this).find('td.td-rep').text()
            let poids = $(this).find('td.td-poids').text()

            form.append('exercices['+exercice+']['+serie+'][rep]', rep)
            form.append('exercices['+exercice+']['+serie+'][poids]', poids)
          })
        })
      })

      $.ajax({
        type: "POST",
        url: urlStoreSeance,
        data: form,
        processData: false,
        contentType: false,
        success: function (data) {
            window.open(data.recap_url, "_self")
        },
        error: function(data){
            toastr.error("Une erreur est survenue :(")
            console.log(data);
        }
    });
      
    })
})

let chrono = $('.text-chrono');
let resetBtn = $('#btnStopChrono');
let stopBtn = $('#btnPauseChrono');
let startBtn = $('#btnPlayChrono');

let heures = 0;
let minutes = 0;
let secondes = 0;
let milli = 0;

let timeout;

let estArrete = true;

const demarrer = () => {
  if (estArrete) {
    estArrete = false;
    defilerTemps();
  }
};

const arreter = () => {
  if (!estArrete) {
    estArrete = true;
    clearTimeout(timeout);
  }
};

const defilerTemps = () => {
  if (estArrete) return;

  milli = parseInt(milli);
  secondes = parseInt(secondes);
  minutes = parseInt(minutes);
  heures = parseInt(heures);

  milli++;

  if (milli == 60) {
    secondes++;
    milli = 0;
  }

  if (secondes == 60) {
    minutes++;
    secondes = 0;
  }

  if (minutes == 60) {
    heures++;
    minutes = 0;
  }

  //   affichage
  if (milli < 10) {
    milli = "0" + milli;
  }

  if (secondes < 10) {
    secondes = "0" + secondes;
  }

  if (minutes < 10) {
    minutes = "0" + minutes;
  }

  if (heures < 10) {
    heures = "0" + heures;
  }

  chrono.html(`${heures}:${minutes}:${secondes}:<span class='milli-chrono'>${milli}</span>`);

  timeout = setTimeout(defilerTemps, 1);
};

const reset = () => {
  chrono.html("00:00:00:<span class='milli-chrono'>00</span>");
  estArrete = true;
  heures = 0;
  minutes = 0;
  secondes = 0;
  milli = 0;
  clearTimeout(timeout);
};

$(document).on('click', '#btnPlayChrono', demarrer)
$(document).on('click', '#btnPauseChrono', arreter)
$(document).on('click', '#btnStopChrono', reset)
