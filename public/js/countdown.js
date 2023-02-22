//countdown from date const in the countdown id
const countdown = document.querySelector('#countdown');
const dateNow = new Date(new Date().toDateString());
const now = new Date().getTime();
const distance = dateLaunch - now;

if(dateNow > dateFin){
    //stop countdown
    clearInterval(intvl);
    //style and output text
    //countdown.style.color = '#dc3545';
    countdown.innerHTML = "L\'évènement est terminé! <br> Merci d\'avoir participé!";
} else if (distance < 0){
    //stop countdown
    clearInterval(intvl);
    //style and output text
    //countdown.style.color = '#17a2b8';
    countdown.innerHTML = "L\'évènement est en cours!";
}
else{
    $("#countdown").countdown(dateLaunch, function(event){
        $(this).html(event.strftime(''
            + '<div class="holder m-2 h2">%D jour%!d %H heure%!H %M minute%!m</div>'
            //+ '<div class="holder m-2"><span class="h1 font-weight-bold">%S</span> Sec</div>'
        ))
    })
    /*
    const intvl = setInterval(() => {
        //get todays date and time (ms)
        const now = new Date().getTime();


        //distance from now to the launch date
        const distance = dateLaunch - now;

        //time calculations
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //display result
        countdown.innerHTML = '<div class="holder m-2"><span class="h1 font-weight-bold">%D</span> Day%!d</div>'
        + '<div class="holder m-2"><span class="h1 font-weight-bold">%H</span> Hr</div>'
        + '<div class="holder m-2"><span class="h1 font-weight-bold">%M</span> Min</div>'
        + '<div class="holder m-2"><span class="h1 font-weight-bold">%S</span> Sec</div>'
        //countdown.innerHTML = `
        //${days}:${hours}:${minutes}:${seconds} <br>avant l'évènement `;

    }, 1000);*/
}
