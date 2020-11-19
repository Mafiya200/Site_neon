let buttonr = document.querySelector('.up-button');

window.onscroll = function () {
    if (window.pageYOffset > 3000) {
        buttonr.classList.add('shown');
    }
    else {
        buttonr.classList.remove('shown');
    }
    buttonr.onclick = function () {

        window.scrollTo(0, 0);
    }
}


let lopt = document.querySelector('.list_opt');
let imgg = document.querySelectorAll('.gallery');
let delet = document.querySelectorAll('.grouped_elements');
rrel='mafiya';
console.log(rrel);
lopt.onchange = function () {
    for (let gmi of imgg) {
        if (gmi.dataset.category !== lopt.value && lopt.value!=='all') {
gmi.classList.add('expansion');
        }
        else{
             gmi.classList.remove('expansion');
             
        }
    }
    for (let del of delet) {
        if (del.dataset.category === lopt.value || lopt.value==='all') {
            del.setAttribute('rel', 'mafiya');
        }
        else {
             del.removeAttribute('rel');
        }
    }
}
