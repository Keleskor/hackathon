const footer__description = document.querySelector(".footer__description");

let textAnimation = footer__description.innerHTML.split("");

let isFillText = false;
let i = 1;

footer__description.innerHTML = "";

setInterval(() => {

    if (isFillText) {

        if (i < 2) {
            isFillText = false;
        }        
        
        footer__description.innerHTML = textAnimation.slice(0, i).join("");

        i--;

    } else {

        if (footer__description.innerHTML == textAnimation.join("")) {
            isFillText = true;
        }

        footer__description.innerHTML =  textAnimation.slice(0, i).join("");
        i++;
    }

}, 50);
