$(document).ready(function() {
    // Ajoute par défaut le token csrf aux requetes ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    })

    const canvas = document.querySelector('#confetti-canvas');
    var myConfetti = confetti.create(canvas, {
        resize: true,
        useWorker: true
    });
    myConfetti({
        particleCount: 1000,
        spread: 150,
        colors: ['FFE400', 'FFBD00', 'E89400', 'FFCA6C', 'FDFFB8'],
        origin: { y: 0.95 },
        startVelocity: 70
    });
})
