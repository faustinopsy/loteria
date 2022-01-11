////////////////////////////////////////////////////////////
// CANVAS
////////////////////////////////////////////////////////////
var stage
var canvasW=0;
var canvasH=0;

/*!
 * 
 * START GAME CANVAS - This is the function that runs to setup game canvas
 * 
 */
function initGameCanvas(w,h){
	var gameCanvas = document.getElementById("gameCanvas");
	gameCanvas.width = w;
	gameCanvas.height = h;
	
	canvasW=w;
	canvasH=h;
	stage = new createjs.Stage("gameCanvas");
	
	createjs.Touch.enable(stage);
	stage.enableMouseOver(20);
	stage.mouseMoveOutside = true;
	
	createjs.Ticker.setFPS(60);
	createjs.Ticker.addEventListener("tick", tick);	
}

var guide = false;
var canvasContainer, mainContainer, gameContainer, confirmContainer, resultContainer;
var guideline, bg, logo, buttonStart, buttonContinue, buttonFacebook, buttonTwitter, buttonGoogle, buttonFullscreen, buttonSoundOn, buttonSoundOff;

$.icon = {};

/*!
 * 
 * BUILD GAME CANVAS ASSERTS - This is the function that runs to build game canvas asserts
 * 
 */
function buildGameCanvas(){
	canvasContainer = new createjs.Container();
	mainContainer = new createjs.Container();
	gameContainer = new createjs.Container();
	scratchContainer = new createjs.Container();
	bitmapContainer = new createjs.Container();
	scratchBgContainer = new createjs.Container();
	scratchLogoContainer = new createjs.Container();
	prizeContainer = new createjs.Container();
	confirmContainer = new createjs.Container();
	resultContainer = new createjs.Container();
	starContainer = new createjs.Container();
	
	bg = new createjs.Bitmap(loader.getResult('background'));
	logo = new createjs.Bitmap(loader.getResult('logo'));
	
	buttonStart = new createjs.Bitmap(loader.getResult('buttonStart'));
	centerReg(buttonStart);
	buttonStart.x = canvasW/2;
	buttonStart.y = canvasH/100 * 77;
	
	//game
	itemGame = new createjs.Bitmap(loader.getResult('itemGame'));
	
	buttonReveal = new createjs.Bitmap(loader.getResult('buttonReveal'));
	centerReg(buttonReveal);
	buttonBuycard = new createjs.Bitmap(loader.getResult('buttonBuycard'));
	centerReg(buttonBuycard);
	
	buttonReveal.x = buttonBuycard.x = canvasW/100 *54.5;
	buttonReveal.y = buttonBuycard.y = canvasH/100 * 80.5;
	
	buttonPlus = new createjs.Bitmap(loader.getResult('buttonPlus'));
	centerReg(buttonPlus);
	
	buttonMinus = new createjs.Bitmap(loader.getResult('buttonMinus'));
	centerReg(buttonMinus);
	
	buttonPlusDisabled = new createjs.Bitmap(loader.getResult('buttonPlusDisabled'));
	centerReg(buttonPlusDisabled);
	
	buttonMinusDisabled = new createjs.Bitmap(loader.getResult('buttonMinusDisabled'));
	centerReg(buttonMinusDisabled);
	
	buttonPlus.x = buttonPlusDisabled.x = canvasW/100 *43.5;
	buttonPlus.y = buttonPlusDisabled.y = canvasH/100 * 80;
	
	buttonMinus.x = buttonMinusDisabled.x = canvasW/100 *38.5;
	buttonMinus.y = buttonMinusDisabled.y = canvasH/100 * 80;
	
	txtStake = new createjs.Text();
	txtStake.font = "35px built_titlingbold";
	txtStake.color = "#fff";
	txtStake.textAlign = "center";
	txtStake.textBaseline='alphabetic';
	txtStake.text = '$100';
	txtStake.x = canvasW/100 *32;
	txtStake.y = canvasH/100 * 82;
	
	txtBalance = new createjs.Text();
	txtBalance.font = "25px built_titlingbold";
	txtBalance.color = "#fff";
	txtBalance.textAlign = "center";
	txtBalance.textBaseline='alphabetic';
	txtBalance.text = '$5000';
	txtBalance.x = canvasW/100 *29;
	txtBalance.y = canvasH/100 * 19.2;
	
	txtWin = new createjs.Text();
	txtWin.font = "25px built_titlingbold";
	txtWin.color = "#fff";
	txtWin.textAlign = "center";
	txtWin.textBaseline='alphabetic';
	txtWin.text = '$5000';
	txtWin.x = canvasW/100 *54.5;
	txtWin.y = canvasH/100 * 19.2;
	
	txtPaid = new createjs.Text();
	txtPaid.font = "25px built_titlingbold";
	txtPaid.color = "#fff";
	txtPaid.textAlign = "center";
	txtPaid.textBaseline='alphabetic';
	txtPaid.text = '$5000';
	txtPaid.x = canvasW/100 *42;
	txtPaid.y = canvasH/100 * 19.2;
	
	txtTimer = new createjs.Text();
	txtTimer.font = "30px built_titlingbold";
	txtTimer.color = "#fff";
	txtTimer.textAlign = "center";
	txtTimer.textBaseline='alphabetic';
	txtTimer.text = '00:00';
	txtTimer.x = canvasW/100 * 68.8;
	txtTimer.y = canvasH/100 * 19.3;
	
	itemRevealBg = new createjs.Bitmap(loader.getResult('itemRevealBg'));
	centerReg(itemRevealBg);
	itemRevealBg.visible = false;
	
	itemStroke = new createjs.Bitmap(loader.getResult('itemStroke'));
	centerReg(itemStroke);
	itemStroke.visible = false;
	
	for(var n=0; n<icon_arr.length; n++){
		$.icon[n] = new createjs.Bitmap(loader.getResult('itemBird'+n));
		centerReg($.icon[n]);
		$.icon[n].visible = false;
		gameContainer.addChild($.icon[n]);
	}
	
	cardShineMask = new createjs.Shape();
	cardShineMask.graphics.beginFill('red').drawRect(222, 193, 535, 360);
	itemShine = new createjs.Bitmap(loader.getResult('itemShine'));
	itemShine.x = -130
	itemShine.y = 190;
	itemShine.mask = cardShineMask;
	
	//result
	itemResult = new createjs.Bitmap(loader.getResult('itemResult'));
	
	resultTitleTxt = new createjs.Text();
	resultTitleTxt.font = "40px built_titlingbold";
	resultTitleTxt.color = "#fff";
	resultTitleTxt.textAlign = "center";
	resultTitleTxt.textBaseline='alphabetic';
	resultTitleTxt.text = resultTitleText;
	resultTitleTxt.x = canvasW/2;
	resultTitleTxt.y = canvasH/100 * 40;
	
	resultScoreTxt = new createjs.Text();
	resultScoreTxt.font = "70px built_titlingbold";
	resultScoreTxt.color = "#fff";
	resultScoreTxt.textAlign = "center";
	resultScoreTxt.textBaseline='alphabetic';
	resultScoreTxt.text = '$8000';
	resultScoreTxt.x = canvasW/2;
	resultScoreTxt.y = canvasH/100 * 49;
	
	resultShareTxt = new createjs.Text();
	resultShareTxt.font = "25px built_titlingbold";
	resultShareTxt.color = "#999";
	resultShareTxt.textAlign = "center";
	resultShareTxt.textBaseline='alphabetic';
	resultShareTxt.text = shareText;
	resultShareTxt.x = canvasW/2;
	resultShareTxt.y = canvasH/100 * 55;
	
	buttonFacebook = new createjs.Bitmap(loader.getResult('buttonFacebook'));
	buttonTwitter = new createjs.Bitmap(loader.getResult('buttonTwitter'));
	buttonGoogle = new createjs.Bitmap(loader.getResult('buttonGoogle'));
	centerReg(buttonFacebook);
	createHitarea(buttonFacebook);
	centerReg(buttonTwitter);
	createHitarea(buttonTwitter);
	centerReg(buttonGoogle);
	createHitarea(buttonGoogle);
	buttonFacebook.x = canvasW/100 * 44;
	buttonTwitter.x = canvasW/2;
	buttonGoogle.x = canvasW/100 * 56;
	buttonFacebook.y = buttonTwitter.y = buttonGoogle.y = canvasH/100*60;
	
	buttonContinue = new createjs.Bitmap(loader.getResult('buttonContinue'));
	centerReg(buttonContinue);
	createHitarea(buttonContinue);
	buttonContinue.x = canvasW/2;
	buttonContinue.y = canvasH/100 * 70;
	
	//option
	buttonFullscreen = new createjs.Bitmap(loader.getResult('buttonFullscreen'));
	centerReg(buttonFullscreen);
	buttonSoundOn = new createjs.Bitmap(loader.getResult('buttonSoundOn'));
	centerReg(buttonSoundOn);
	buttonSoundOff = new createjs.Bitmap(loader.getResult('buttonSoundOff'));
	centerReg(buttonSoundOff);
	buttonSoundOn.visible = false;
	buttonExit = new createjs.Bitmap(loader.getResult('buttonExit'));
	centerReg(buttonExit);
	
	createHitarea(buttonFullscreen);
	createHitarea(buttonSoundOn);
	createHitarea(buttonSoundOff);
	createHitarea(buttonExit);
	
	//exit
	itemExit = new createjs.Bitmap(loader.getResult('itemExit'));
	
	buttonConfirm = new createjs.Bitmap(loader.getResult('buttonConfirm'));
	centerReg(buttonConfirm);
	buttonConfirm.x = canvasW/100* 42;
	buttonConfirm.y = canvasH/100 * 67;
	
	buttonCancel = new createjs.Bitmap(loader.getResult('buttonCancel'));
	centerReg(buttonCancel);
	buttonCancel.x = canvasW/100 * 58;
	buttonCancel.y = canvasH/100 * 67;
	
	confirmMessageTxt = new createjs.Text();
	confirmMessageTxt.font = "35px built_titlingbold";
	confirmMessageTxt.color = "#fff";
	confirmMessageTxt.textAlign = "center";
	confirmMessageTxt.textBaseline='alphabetic';
	confirmMessageTxt.text = exitMessage;
	confirmMessageTxt.lineHeight = 40;
	confirmMessageTxt.x = canvasW/2;
	confirmMessageTxt.y = canvasH/100 *47;
	
	confirmContainer.addChild(itemExit, buttonConfirm, buttonCancel, confirmMessageTxt);
	confirmContainer.visible = false;
	
	if(guide){
		guideline = new createjs.Shape();
		guideline.graphics.setStrokeStyle(2).beginStroke('red').drawRect((stageW-contentW)/2, (stageH-contentH)/2, contentW, contentH);
	}
	
	mainContainer.addChild(logo, buttonStart);
	
	gameContainer.addChild(itemStroke, itemRevealBg, itemGame, buttonReveal, buttonBuycard, buttonPlusDisabled, buttonPlus, buttonMinusDisabled, buttonMinus, txtStake, txtBalance, txtWin, txtPaid, txtTimer, scratchBgContainer, scratchLogoContainer, scratchContainer, bitmapContainer, itemShine, prizeContainer);
	resultContainer.addChild(itemResult, resultTitleTxt, resultScoreTxt, buttonContinue);
	
	if(shareEnable){
		resultContainer.addChild(resultShareTxt, buttonFacebook, buttonTwitter, buttonGoogle);
	}
	
	canvasContainer.addChild(bg, mainContainer, gameContainer, resultContainer, confirmContainer, buttonFullscreen, buttonSoundOn, buttonSoundOff, buttonExit, guideline);
	stage.addChild(canvasContainer);
	
	resizeCanvas();
}


/*!
 * 
 * RESIZE GAME CANVAS - This is the function that runs to resize game canvas
 * 
 */
function resizeCanvas(){
 	if(canvasContainer!=undefined){
		if(curPage == 'main'){
			buttonExit.visible = false;
			buttonSoundOn.x = buttonSoundOff.x = canvasW - offset.x;
			buttonSoundOn.y = buttonSoundOff.y = offset.y;
			buttonSoundOn.x = buttonSoundOff.x -= 40;
			buttonSoundOn.y = buttonSoundOff.y += 35;
			
			buttonFullscreen.x = buttonSoundOn.x-65;
			buttonFullscreen.y = buttonSoundOn.y;
		}else{
			buttonExit.visible = true;
			buttonExit.x = (canvasW - offset.x) - 40;
			buttonExit.y = offset.y + 35;
			buttonSoundOn.x = buttonSoundOff.x = buttonExit.x;
			buttonSoundOn.y = buttonSoundOff.y = buttonExit.y;
			buttonSoundOn.x = buttonSoundOff.x = buttonExit.x - 65;
			buttonSoundOn.y = buttonSoundOff.y = buttonExit.y;
			
			buttonFullscreen.x = buttonSoundOn.x - 65;
			buttonFullscreen.y = buttonSoundOn.y;	
		}
	}
}

/*!
 * 
 * REMOVE GAME CANVAS - This is the function that runs to remove game canvas
 * 
 */
 function removeGameCanvas(){
	 stage.autoClear = true;
	 stage.removeAllChildren();
	 stage.update();
	 createjs.Ticker.removeEventListener("tick", tick);
	 createjs.Ticker.removeEventListener("tick", stage);
 }

/*!
 * 
 * CANVAS LOOP - This is the function that runs for canvas loop
 * 
 */ 
function tick(event) {
	updateGame();
	stage.update(event);
}

/*!
 * 
 * CANVAS MISC FUNCTIONS
 * 
 */
function centerReg(obj){
	obj.regX=obj.image.naturalWidth/2;
	obj.regY=obj.image.naturalHeight/2;
}

function createHitarea(obj){
	obj.hitArea = new createjs.Shape(new createjs.Graphics().beginFill("#000").drawRect(0, 0, obj.image.naturalWidth, obj.image.naturalHeight));
}