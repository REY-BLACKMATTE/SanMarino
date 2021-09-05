const body = document.querySelector("body");
const modal = document.querySelector(".modal-login");
const modalButton = document.querySelector(".modal-button");
const closeButton = document.querySelector(".close-button");
const scrollDown = document.querySelector(".scroll-down");
const containerLogin = document.querySelector(".container-login");

window.onload = function() {
    var d = new Date();
    var n = d.getHours();

    if(n >= 7 && n <= 19){
        containerLogin.style.backgroundImage = "url('./img/bg-resident.png')";
    }else{
        containerLogin.style.backgroundImage = "url('./img/bg-resident-night.png')";
    }

  };


let isOpened = false;

const openModal = () => {
	modal.classList.add("is-open");
	body.style.overflow = "hidden";
};

const closeModal = () => {
	window.scrollTo({
		top: 0,
		behavior: 'smooth'
	});
	modal.classList.remove("is-open");
	body.style.overflow = "initial";
	scrollDown.style.display = "flex";
	isOpened = false;
};

modalButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

var lastScrollTop = 0;
// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
   var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   if (st > lastScrollTop){
      // downscroll code
	  console.log("is down");
	  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
	  	isOpened = true;
	  	scrollDown.style.display = "none";
	  	openModal();
	  }
   } else {
      // upscroll code
	  console.log("is up");
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);


document.onkeydown = evt => {
	evt = evt || window.event;
	evt.keyCode === 27 ? closeModal() : false;
};

function loginMessage(message){
  toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  openModal();
  toastr.error(message);

}

function ALERTACARGANDO() {
    const alerta = Swal.mixin({
        customClass: {
            popup: 'containerTransparent',
        }
    })

    alerta.fire({
        position: 'center',
        title: '',
        // html: '<div class="loader">Loading...</div>',
        html: '<div class="preloader loading">'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '  <span class="slice"></span>'+
        '</div>',
        type: '',
        showConfirmButton: false,
        allowOutsideClick: false,
    })
}

function CERRARALERTA() {
    Swal.close()
}


