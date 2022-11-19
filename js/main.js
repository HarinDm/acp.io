let bannerInfoLinkToggle = document.querySelector('.banner-info .page__link-toggle');
let bannerInfoContent = document.querySelectorAll('.banner-info .banner-info-content .page__text');
if(bannerInfoLinkToggle){
  bannerInfoLinkToggle.addEventListener('click', (e)=>{
    if(!e.target.classList.contains('page__link-toggle_hide')){
      e.target.innerText = 'скрыть';
  
    } else{
      e.target.innerText = 'еще даты';
    }
    e.target.classList.toggle('page__link-toggle_hide');
    
    
    bannerInfoContent.forEach((link)=>{
      link.classList.toggle('hide');
    });
  
  });
}


if(document.getElementById('sliderBanner')){
  var sliderBanner = tns({
    container: "#sliderBanner",
    // mode: "gallery",
    items: 1,
    // loop: true,
    navContainer: "#customizeThumbnails",
    navAsThumbnails: true,
    autoplay: true,
    autoplayResetOnVisibility: false,
    controls: false,
    autoplayPosition: "bottom",
    autoplayButton:".btn-play",
    autoplayHoverPause:true,
    autoplayText: [
        "▶",
        "❚❚"
      ],
    autoplayTimeout: 1800,
    swipeAngle: true,
    animateIn: "jello",
    animateOut: "rollOut",
    lazyload: true,
    speed: 800,
    
  });
}
if(document.getElementById('sliderGames')){
  var sliderGames = tns({
    container: "#sliderGames",
    // mode: "gallery",
    items: 1,
    // loop: true,
    navContainer: "#customizeThumbnailsGames",
    navAsThumbnails: true,
    autoplay: true,
    autoplayResetOnVisibility: false,
    controls: false,
    autoplayButton:false,
    
    autoplayButton:".btn-play",
    autoplayTimeout: 1800,
    swipeAngle: true,
    lazyload: false,
    speed: 800,
    
  });
}
if(document.getElementById('emotionsBanner')){
  var sliderEmotions = tns({
    container: "#emotionsBanner",
    // mode: "gallery",
    items: 1,
    // loop: true,
    navContainer: "#customizeThumbnailsEmotions",
    navAsThumbnails: true,
    autoplay: false,
    autoplayResetOnVisibility: false,
    controls: false,
    autoplayButton:false,
    autoplayTimeout: 1800,
    swipeAngle: true,
    lazyload: false,
    speed: 800,
    
  });
 }
if(document.getElementById('sliderTrust')){
    var sliderEmotions = tns({
      container: "#sliderTrust",
      // mode: "gallery",
      items: 1,
      // loop: true,
      navContainer: "#customizeThumbnailsTrust",
      navAsThumbnails: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: false,
      autoplayButton:false,
      autoplayTimeout: 1800,
      swipeAngle: true,
      lazyload: false,
      speed: 800,
      
    });
  }
  
if(document.getElementById('sliderInfoSlider')){
    var sliderEmotions = tns({
      container: "#sliderInfoSlider",
      // mode: "gallery",
      items: 1,
      // loop: true,
      navContainer: "#customizeThumbnailsInfoSlider",
      navAsThumbnails: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: true,
      controlsPosition:"bottom",
      controlsText:[
        "",
        ""
      ],
      autoplayButton:false,
      autoplayTimeout: 1800,
      swipeAngle: true,
      lazyload: false,
      speed: 800,
      
    });
  }
  

function addCurrentIndexOfSlider(sliderName, slider) {
    let elementNavNumberActive = document.querySelector(`${sliderName} .page-nav__number.active`);
    let elementNavNumbers = document.querySelectorAll(`${sliderName} .page-nav__number`);
    elementNavNumberActive.innerHTML = '0' + slider.getInfo().displayIndex;
    elementNavNumbers[1].innerHTML = '0' + slider.getInfo().slideCount;
    let rationMenuBtns = document.querySelectorAll(`${sliderName} .page__btn_prev,${sliderName} .page__btn_next`);
    rationMenuBtns.forEach((e) => {
        e.onclick = function () {
            elementNavNumberActive.innerHTML = '0' + slider.getInfo().displayIndex;
        };
    });
}

if(document.getElementById('sliderGallery')){
    var sliderEmotions = tns({
      container: "#sliderGallery",
      // mode: "gallery",
      items: 1,
      loop: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: true,
      controlsPosition:"bottom",
      prevButton: '.gallery-page .page__btn_prev',
      nextButton: '.gallery-page .page__btn_next',
      controlsText:[
        "",
        ""
      ],
      autoplayButton:false,
      autoplayTimeout: 1800,
      swipeAngle: true,
      lazyload: false,
      speed: 800,
      responsive: {
        1920:{
          loop: true,
        },
        1025: {
          items: 1,
        },
        768:{
          items: 2,
        },
        620:{
          items: 1,
         
        },
        320:{
        }
      }
      
    });
    addCurrentIndexOfSlider('.gallery-page', sliderEmotions)
  }
if(document.getElementById('sliderSmi')){
    var sliderEmotions = tns({
      container: "#sliderSmi",
      // mode: "gallery",
      items: 1,
      // loop: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: true,
      controlsPosition:"bottom",
      prevButton: '.smi .page__btn_prev',
      nextButton: '.smi .page__btn_next',
      controlsText:[
        "",
        ""
      ],
      autoplayButton:false,
      autoplayTimeout: 1800,
      swipeAngle: true,
      lazyload: false,
      speed: 800,
      
    });
    addCurrentIndexOfSlider('.smi', sliderEmotions)
  }
 
if(document.getElementById('sliderVideo')){
    var sliderEmotions = tns({
      container: "#sliderVideo",
      // mode: "gallery",
      items: 1,
      // loop: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: true,
      controlsPosition:"bottom",
      prevButton: '.video-page .page__btn_prev',
      nextButton: '.video-page .page__btn_next',
      controlsText:[
        "",
        ""
      ],
      autoplayButton:false,
      autoplayTimeout: 1800,
      swipeAngle: true,
      lazyload: false,
      speed: 800,
      
    });
    addCurrentIndexOfSlider('.video-page', sliderEmotions)
  }
 


  if(document.getElementById('sliderModalGallery')){
    var sliderBanner = tns({
      container: "#sliderModalGallery",
      // mode: "gallery",
      items: 1,
      loop: true,
      navContainer: "#customizeThumbnailsModalGallery",
      navAsThumbnails: true,
      autoplay: false,
      autoplayResetOnVisibility: false,
      controls: true,
      prevButton: '.modal-gallery .page__btn_prev',
      nextButton: '.modal-gallery .page__btn_next',
      autoplayPosition: "bottom",
      autoplayButton:".btn-play",
      autoplayHoverPause:true,
      autoplayText: [
          "▶",
          "❚❚"
        ],
      autoplayTimeout: 1800,
      swipeAngle: true,
      animateIn: "jello",
      animateOut: "rollOut",
      lazyload: false,
      speed: 800,
      
    });
  }