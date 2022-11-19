function checkSlide(e){
    let el = e.target;
    if (el.classList.contains('open-modal')) {
        let parentEl = el.parentElement;
        let itemImg = parentEl.querySelector('img').getAttribute('src');
        if(itemImg){
            let modalDataId = el.dataset.modal;
            let modalId = document.getElementById(modalDataId);
            if(modalDataId == 'modal-gallery'){
                let modalDataIdItemsImg = modalId.querySelectorAll('.page__img_small img')
                modalDataIdItemsImg.forEach((item)=>{
                    if(item.getAttribute('src') == itemImg){
                        item.parentElement.click();
                    }
                    
                });
            }
        }
    }
}
window.addEventListener('click', checkSlide, false);