function bindCategoriesToggle(trigger, content){
	let button = {
		'element': document.querySelector(trigger),
		'active': false
	};
	const box = document.querySelector(content);
	button.element.addEventListener('click', (evt) =>{
		evt.preventDefault();
		if (button.active === false) {
			button.active = true;
			box.style.height = 160 +'px';
		}else {
      button.active = false;
      box.style.height = 0 + 'px';
    }
	});
};
bindCategoriesToggle('.categoriesToggle', '.serviceСategories')

function openingWindows(popups, feedbBotton, closeButton){
	let button = document.querySelector(feedbBotton);
	let popup = document.querySelector(popups);
	let close = document.querySelector(closeButton);
	button.addEventListener('click', (evt) =>{
		evt.preventDefault();
		popup.classList.add('show');
	});
	close.addEventListener('click', (evt) =>{
		evt.preventDefault();
		popup.classList.remove('show');
	})
	window.addEventListener("keydown", function (evt) {
	    if (evt.keyCode === 27) {
	      evt.preventDefault();
	      if (popup.classList.contains("show")) {
	        popup.classList.remove("show");
	      }
	    }
	  });
};
openingWindows('.feedback', '.feedbackBotton', '.closeFeedback');

document.getElementById("bottonLeft").onclick = sliderLeft;
document.getElementById('bottonRight').onclick = sliderRight;

let left = 0;

function sliderLeft() {
  let polosa = document.getElementById("polosa");
  left = left - 1000;
  if ( left < -2000){
    left = 0;
  }
  polosa.style.left = left +'px';
};

function sliderRight() {
  let polosa = document.getElementById("polosa");
  left = left + 1000;
  if ( left > 0){
    left = -2000;
  }
  polosa.style.left = left +'px';
};
