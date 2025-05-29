const surveyHelp = document.getElementsByClassName("survey-help")[0];
const modal = document.querySelector(".registr");


function animatiModal(element) {
    element.classList.add("down-top");
}


window.addEventListener("scroll", () => {

    let urveyHelpHeight =  surveyHelp.getBoundingClientRect().top;

    if (window.innerHeight >= urveyHelpHeight) {
        
        surveyHelp.classList.add("anim-appearances");

        surveyHelp.querySelectorAll(".survey-help__block").forEach((element) => {
            element.classList.add("anim-appearances");
        });        

        surveyHelp.addEventListener("animationend", () => {
            surveyHelp.style.right = 0 + "px";
        });

    }
});

