var menu_btn = document.querySelector('.fa-bars');

menu_btn.onclick = function(){
  document.querySelector('.menu-container').classList.toggle('hide');
  if(menu_btn.classList.contains('fa-bars')){
    menu_btn.classList.replace('fa-bars', 'fa-xmark');
  }
  else if (menu_btn.classList.contains('fa-xmark')) {
    menu_btn.classList.replace('fa-xmark', 'fa-bars');
  }
}

var btn = document.querySelector('.search-icon');
var icon = btn.querySelector('.fa-magnifying-glass')

btn.onclick = function(){
  
  document.querySelector('.search-box').classList.toggle('hide');
  
  if(icon.classList.contains('fa-magnifying-glass')){
    icon.classList.replace('fa-magnifying-glass', 'fa-xmark');
  }
  else if(icon.classList.contains('fa-xmark')){
    icon.classList.replace('fa-xmark', 'fa-magnifying-glass');
  }
}

var submenu_btn = document.querySelector('.submenu-list');
var icon1 = submenu_btn.querySelector('.fa-caret-down')

submenu_btn.onclick = function() {

  document.querySelector('.sub-menu').classList.toggle('hide');

  if (icon1.classList.contains('fa-caret-down')) {
    icon1.classList.replace('fa-caret-down', 'fa-caret-up');
  }
  else if (icon1.classList.contains('fa-caret-up')) {
    icon1.classList.replace('fa-caret-up', 'fa-caret-down');
  }
}

var lazyadsense2 = false;
window.addEventListener("scroll", function(){
if ((document.documentElement.scrollTop != 0 && lazyadsense2 === false) || (document.body.scrollTop != 0 && lazyadsense2 === false)) {
(function() { var ad = document.createElement('script'); ad.setAttribute('data-ad-client','ca-pub-3708886771161155'); ad.async = true; ad.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'; var sc = document.getElementsByTagName('script')[0]; sc.parentNode.insertBefore(ad, sc); })();
lazyadsense2 = true;
  }
}, true);

var lazyanalisis=!1;window.addEventListener("scroll",function(){(0!=document.documentElement.scrollTop&&!1===lazyanalisis||0!=document.body.scrollTop&&!1===lazyanalisis)&&(!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://www.googletagmanager.com/gtag/js?id=G-S5VJE1415T";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}(),lazyanalisis=!0)},!0);

window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-S5VJE1415T');