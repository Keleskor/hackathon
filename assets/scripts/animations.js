const surveyHelp = document.getElementsByClassName("survey-help")[0];

window.addEventListener("scroll", () => {

    let height =  surveyHelp.getBoundingClientRect().top;

    if (window.innerHeight >= height) {
        
        surveyHelp.classList.add("anim-appearances");

        surveyHelp.querySelectorAll(".survey-help__block").forEach((element) => {
            element.classList.add("anim-appearances");
        });        

        surveyHelp.addEventListener("animationend", () => {
            surveyHelp.style.right = 0 + "px";
        });

    }
});
