//countdown from date const in the countdown id
const countdown = document.querySelector('#countdown');

//update every second
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
    countdown.innerHTML = `
        ${days}:${hours}:${minutes}:${seconds} <br>avant l'évènement
    `;

    //if launch date passed
    if(distance < 0){
        //stop countdown
        clearInterval(intvl);
        //style and output text
        countdown.style.color = '#17a2b8';
        countdown.innerHTML = 'Launched!';
    }
});
