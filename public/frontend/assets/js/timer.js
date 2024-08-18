
function startCountdown(endTime) {
    let minutesElement = document.getElementById('minutes');
    let secondsElement = document.getElementById('seconds');

    function updateCountdown() {
        let now = new Date().getTime();
        let distance = endTime - now;

        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);


        if (distance < 0) {
            clearInterval(interval);
            document.getElementById('countdown').innerHTML = "EXPIRED";
        }
    }

    updateCountdown();
    let interval = setInterval(updateCountdown, 1000);
}

let endTime = new Date("{{ $endTime }}").getTime();
startCountdown(endTime);
