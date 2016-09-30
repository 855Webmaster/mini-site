function loadStyleSheet(src){if (document.createStyleSheet) document.createStyleSheet(src); else {var stylesheet = document.createElement('link');stylesheet.href = src;stylesheet.rel = 'stylesheet';stylesheet.type = 'text/css';document.getElementsByTagName('head')[0].appendChild(stylesheet);}}
loadStyleSheet('more.css');		

if (document.getElementById('gmap')) {
	var gmapDisplay = document.getElementById('gmap');
	gmapDisplay.innerHTML = '<iframe class="gm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.729109364663!2d-90.5765327490566!3d41.51014479623723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e233655d845339%3A0xbfc9325f492236d6!2sSEO+Copywriters!5e0!3m2!1sen!2sus!4v1474043840642"></iframe>';
}
