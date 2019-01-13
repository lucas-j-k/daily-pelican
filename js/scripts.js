
var mainMenuState = 0;

var mainMenuToggle = document.getElementById('mainMenuToggle');
var mainMenu = document.getElementById('mainMenu');

mainMenuToggle.addEventListener('click', toggleMainMenu);



function toggleMainMenu(){
	if(mainMenuState){
		mainMenu.style.display = "none";
		mainMenuState = 0;
	}
	else {
		mainMenu.style.display = "block";
		mainMenuState = 1;
	}
	console.log(mainMenuState);
};