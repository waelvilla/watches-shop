function initialise(){
	var Slides = document.getElementsByClassName("Slides");
	for (var i = 1; i<=(Slides.length-1);i++)
		Slides[i].style.display = "none"; 
}

function position(){
	var temp = 0;
	var Slides = document.getElementsByClassName("Slides");
	for (var i = 0 ; i<=Slides.length;i++)
		if (Slides[i].style.display === "") 
			break;
		else
			temp++;
	return temp;
}

function right(Index){
	var Slides = document.getElementsByClassName("Slides");
	switch(Index){
		case(Slides.length-1):
			Slides[Index].style.display = "none"
			Slides[0].style.display = null;
		break;
		default:
			Slides[Index].style.display = "none";
			Slides[Index+1].style.display = null;
		break;
	 }
}

function left(Index){
	var Slides = document.getElementsByClassName("Slides");
	switch(Index){
		case(0):
			Slides[0].style.display = "none"
			Slides[Slides.length-1].style.display = null;
		break;
		default:
			Slides[Index].style.display = "none";
			Slides[Index-1].style.display = null;
		break;
	}
}
function autoshowSlides(){
	right(position());
	setTimeout(autoshowSlides, 3500);
}

initialise();
autoshowSlides();