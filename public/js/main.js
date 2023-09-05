$(document).ready(function(){
    $(document).on('click', '.carousel-cell', function(){
        let href = $(this).data('href')
        window.open(href, "_self")
    })
})

// Utilisation de JavaScript pour empêcher le téléphone de se verrouiller
const preventScreenLock = () => {
    const wakeLock = navigator.wakeLock || navigator.mozWakeLock || navigator.webkitWakeLock;
    if (wakeLock) {
        wakeLock.request("screen").then(() => {
            console.log("Écran verrouillé empêché avec succès.");
        }).catch((error) => {
            console.error("Erreur lors de la demande de verrouillage de l'écran : ", error);
        });
    }
}

// Appel de la fonction pour empêcher le verrouillage de l'écran
preventScreenLock();