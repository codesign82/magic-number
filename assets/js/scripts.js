
//region define variables
const esoEmail = document.querySelector('.eso-email');
const nextQues = document.querySelector('.next-ques');
let loading = document.getElementById('loading');
const step1 = document.querySelector('#step-1');
const step2 = document.querySelector('#step-2');
const $question = document.querySelector('.question');

//endregion define variables


//region fix container
function fixContainer() {
    if (window.innerWidth > 1500) {
        document.documentElement.style.fontSize = `${10}px`;
    } else if (window.innerWidth >= 1024) {
        document.documentElement.style.fontSize = `${10 * window.innerWidth / 1500}px`;
    } else {
        document.documentElement.style.fontSize = `${10}px`;
    }
}

fixContainer();
window.addEventListener('resize', fixContainer);
//endregion fix container


//region Initializing step 2
beginBtn.classList.add('active');
esoEmail.addEventListener('input',e=>window.sendToEmail = esoEmail.value)
document.addEventListener('wpcf7mailsent', function (event) {
    window.sendToEmail = esoEmail.value;
    step1.classList.remove('active');
    step1.nextElementSibling.classList.add('active');
}, false);
//endregion Initializing step 2