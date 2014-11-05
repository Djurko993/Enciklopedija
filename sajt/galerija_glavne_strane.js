var imagecount = 1;
var total = 10;
var turn_on_slider = 0;
var slider_on = 0;

function kreni(x){
	var image = document.getElementById('glavna_slika_galerije');
	imagecount = imagecount + x;
	if(imagecount === total+1)
		imagecount=1;
	if(imagecount === 0 || imagecount === -1)
		imagecount=total;
	image.src = 'Slike/Galerija glavne strane/'+imagecount+'.jpg';	
}

function slide_it(){
	if(turn_on_slider===1){
		var image = document.getElementById('glavna_slika_galerije');
		imagecount = imagecount + 1;
		if(imagecount === total+1)
			imagecount=1;
		image.src = 'Slike/Galerija glavne strane/'+imagecount+'.jpg';
		setTimeout("slide_it()",4000);
	}
	else	
		return;
}

function pokreni_slike(){
	turn_on_slider = 1;
}

function zaustavi_slike(){
	turn_on_slider = 0;
	slider_on = 0;
}

function proveri(){
	if(slider_on === 1)
		return;
	else{
		slider_on = 1;
		slide_it();
	}
}