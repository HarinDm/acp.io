
function appendContent(e){
    let el = e.target;
    if (el.classList.contains('open-modal')) {
        let parentEl = el.parentElement;
        if(parentEl){
            let img = parentEl.querySelector('img') ? parentEl.querySelector('img').src : '';
            let name = parentEl.querySelector('.page__title-h5') ? parentEl.querySelector('.page__title-h5').innerText :  '';
            let position = parentEl.querySelector('.position') ? parentEl.querySelector('.position').innerText :  '';
            let description = parentEl.querySelector('.description') ? parentEl.querySelector('.description').innerText :  '';
            let modalDataId = el.dataset.modal;
            let modalId = document.getElementById(modalDataId);
            if(modalId){
                modalId.querySelector('img').setAttribute('src', img);
                modalId.querySelector('.page__title-h2').innerText = name;
                modalId.querySelector('.position').innerText = position;
                modalId.querySelector('.description').innerText = description;
                
            }
        }
    }
}
window.addEventListener('click', appendContent, false);