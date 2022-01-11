////////////////////////////////////////////////////////////
// SCORE
////////////////////////////////////////////////////////////

/*!
 * 
 * SCOREBOARD SETTING CUSTOMIZATION START
 * 
 */
var displayScoreBoard = true; //toggle submit and scoreboard button
var scoreBoardTitle = 'TOP 10 Scoreboard'; //text for scoreboard title
var scoreRank_arr = ['1st','2nd','3rd','4th','5th','6th','7th','8th','9th','10th']; //scoreboard ranking list

var totalScorePage = 1; //total score pages, .e.g. 2 for 20 listing
var scoreNextText = 'Next'; //text for scoreboard next button
var scorePrevText = 'Prev'; //text for scoreboard prev button

var enableLevel = true; //enable to display game stage/level in scoreboard list
var scoreReverse = false; //reverse scoreboard list in descending
var fixedScreen = false; //enable for to fixed some old games layout issue

//text for scoreboard
//col = table name
//percentX = position x
//align = text alignment

var topScore_arr = [];
if(!enableLevel){
	topScore_arr = [{col:'RANK', percentX:17, align:'center'},
				{col:'NAME', percentX:30, align:'left'},
				{col:'SCORE', percentX:82, align:'center'}];
}else{
	topScore_arr = [{col:'RANK', percentX:17, align:'center'},
				{col:'NAME', percentX:30, align:'left'},
				{col:'LEVEL', percentX:60, align:'center'},
				{col:'SCORE', percentX:82, align:'center'}];	
}

/*!
 * 
 * SCOREBOARD SETTING CUSTOMIZATION END
 * 
 */
 
var scoreBoardContainer, submitScoreContainer;
var scoreTitle, bgScoreboard, bgScoreboardPortrait, saveButton, scoreboardButton, scoreboardCloseButton, scoreNextTxt, scorePrevTxt;
$.scoreList={};
$.scoreData = {score:0, type:''};

/*!
 * 
 * SCOREBOARD ASSETS - This is the function that runs to add scoreboard assets
 * 
 */
function addScoreboardAssets(){
	if(!fixedScreen){
		if(forPortrait){
			manifest.push({src:'assets/scoreboard/bg_scoreboard_portrait.png', id:'bgScoreboard'});
		}else{
			manifest.push({src:'assets/scoreboard/bg_scoreboard_res.png', id:'bgScoreboard'});	
		}
	}else{
		if(forPortrait){
			manifest.push({src:'assets/scoreboard/bg_scoreboard_portrait.png', id:'bgScoreboard'});
		}else{
			manifest.push({src:'assets/scoreboard/bg_scoreboard.png', id:'bgScoreboard'});	
		}	
	}
	manifest.push({src:'assets/scoreboard/button_scoreboard.png', id:'scoreboardButton'});
	manifest.push({src:'assets/scoreboard/button_scoreboard_close.png', id:'scoreboardCloseButton'});
	manifest.push({src:'assets/scoreboard/button_scoreboard_save.png', id:'scoreboardSaveButton'});
}

/*!
 * 
 * SCOREBOARD CANVAS - This is the function that runs to build scoreboard canvas
 * 
 */
function buildScoreBoardCanvas(){
	if(!displayScoreBoard){
		return;	
	}
	
	//scoreboard page
	scoreBoardContainer = new createjs.Container();
	bgScoreboard = new createjs.Bitmap(loader.getResult('bgScoreboard'));
	
	scoreTitle = new createjs.Text();
	scoreTitle.font = "50px bariol_regularregular";
	scoreTitle.color = "#ffffff";
	scoreTitle.text = scoreBoardTitle;
	scoreTitle.textAlign = "center";
	scoreTitle.textBaseline='alphabetic';
	scoreTitle.x = canvasW/2;
	scoreTitle.y = canvasH/100*21;
	
	scorePrevTxt = new createjs.Text();
	scorePrevTxt.font = "30px bariol_regularregular";
	scorePrevTxt.color = "#ffffff";
	scorePrevTxt.text = scorePrevText;
	scorePrevTxt.textAlign = "left";
	scorePrevTxt.textBaseline='alphabetic';
	scorePrevTxt.x = canvasW/100 * 5;
	scorePrevTxt.y = canvasH/100*93;
	scorePrevTxt.hitArea = new createjs.Shape(new createjs.Graphics().beginFill("#000").drawRect(-100, -30, 200, 40));
	
	scoreNextTxt = new createjs.Text();
	scoreNextTxt.font = "30px bariol_regularregular";
	scoreNextTxt.color = "#ffffff";
	scoreNextTxt.text = scoreNextText;
	scoreNextTxt.textAlign = "right";
	scoreNextTxt.textBaseline='alphabetic';
	scoreNextTxt.x = canvasW/100 * 95;
	scoreNextTxt.y = canvasH/100*93;
	scoreNextTxt.hitArea = new createjs.Shape(new createjs.Graphics().beginFill("#000").drawRect(-100, -30, 200, 40));
	
	if(!fixedScreen){
		scorePrevTxt.x = canvasW/100 * 13;
		scorePrevTxt.y = canvasH/100*85;
		scoreNextTxt.x = canvasW/100 * 87;
		scoreNextTxt.y = canvasH/100*85;
	}
	
	scoreBoardContainer.addChild(bgScoreboard, scoreTitle, scorePrevTxt, scoreNextTxt);
	scoreBoardContainer.visible = false;
	
	var scoreStartY = canvasH/100*28;
	var scoreSpanceY = 42.8;
	if(!fixedScreen && !forPortrait){
		scoreStartY = canvasH/100*27.5;
		scoreSpanceY = 38.5;	
	}
	
	for(scoreNum=0;scoreNum<=10;scoreNum++){
		for(scoreColNum=0;scoreColNum<topScore_arr.length;scoreColNum++){
			$.scoreList[scoreNum+'_'+scoreColNum] = new createjs.Text();
			$.scoreList[scoreNum+'_'+scoreColNum].font = "28px bariol_regularregular";
			$.scoreList[scoreNum+'_'+scoreColNum].color = "#ffffff";
			$.scoreList[scoreNum+'_'+scoreColNum].textAlign = topScore_arr[scoreColNum].align;
			$.scoreList[scoreNum+'_'+scoreColNum].textBaseline='alphabetic';
			$.scoreList[scoreNum+'_'+scoreColNum].x = canvasW/100 * topScore_arr[scoreColNum].percentX;
			$.scoreList[scoreNum+'_'+scoreColNum].y = scoreStartY;
			
			if(scoreColNum == 0){
				//position
				$.scoreList[scoreNum+'_'+scoreColNum].text = scoreRank_arr[scoreNum-1];	
			}
			
			if(scoreNum == 0){
				$.scoreList[scoreNum+'_'+scoreColNum].text = topScore_arr[scoreColNum].col;	
			}
			
			scoreBoardContainer.addChild($.scoreList[scoreNum+'_'+scoreColNum]);
		}
		scoreStartY += scoreSpanceY;
	}
	
	//buttons
	scoreboardButton = new createjs.Bitmap(loader.getResult('scoreboardButton'));
	centerReg(scoreboardButton);
	
	scoreboardCloseButton = new createjs.Bitmap(loader.getResult('scoreboardCloseButton'));
	centerReg(scoreboardCloseButton);
	
	saveButton = new createjs.Bitmap(loader.getResult('scoreboardSaveButton'));
	centerReg(saveButton);
	
	//save button position
	saveButton.x = canvasW/100 * 40;
	saveButton.y = canvasH/100 * 75;
	
	if(typeof resultContainer != 'undefined'){
		resultContainer.addChild(saveButton);
	}
	
	canvasContainer.addChild(scoreBoardContainer, scoreboardCloseButton, scoreboardButton);
	
	if(typeof buttonFullscreen != 'undefined'){
		canvasContainer.addChild(buttonFullscreen, buttonSoundOn, buttonSoundOff);	
	}
	
	if(typeof $.editor != 'undefined'){
		if($.editor.enable){
			toggleScoreboardButton(false);
		}
	}
	
	$.get('submit.html', function(data){
		$('#canvasHolder').append(data);
		
		if(forPortrait){			
			$('#scoreHolder .title').attr('data-fontsize',50);
			$('#scoreHolder .scoreInnerContent').addClass('portrait');
		}
		
		if(typeof offset == "undefined"){
			$('#scoreHolder .scoreInnerContent').addClass('static');
		}
		
		buildScoreboardButtons();
		resizeScore();
	});
}

/*!
 * 
 * SCOREBOARD BUTTONS - This is the function that runs to build scoreboard buttons
 * 
 */
function buildScoreboardButtons(){
	$('#buttonCancel').click(function(){
		goScorePage('');
	});
	
	$('#buttonSubmit').click(function(){
		submitUserScore($.scoreData.score, $.scoreData.type);
	});
	
	scoreBoardContainer.addEventListener("click", function(evt) {
		
	});
	
	scorePrevTxt.cursor = "pointer";
	scorePrevTxt.addEventListener("click", function(evt) {
		toggleScorePage(false);
	});
	
	scoreNextTxt.cursor = "pointer";
	scoreNextTxt.addEventListener("click", function(evt) {
		toggleScorePage(true);
	});
	
	saveButton.cursor = "pointer";
	saveButton.addEventListener("click", function(evt) {
		goScorePage('submit');
	});
	
	scoreboardButton.cursor = "pointer";
	scoreboardButton.addEventListener("click", function(evt) {
		toggleScoreboardPage();
	});
	
	scoreboardCloseButton.cursor = "pointer";
	scoreboardCloseButton.addEventListener("click", function(evt) {
		toggleScoreboardPage();
	});
}

function toggleScoreboardPage(){
	if(scoreBoardContainer.visible){
		scoreboardButton.visible = true;
		scoreBoardContainer.visible = false;
	}else{
		scoreboardButton.visible = false;
		goScorePage('scoreboard');
	}	
}

function toggleScoreboardButton(con){
	scoreboardButton.visible = scoreboardCloseButton.visible = con;
}

function toggleScoreboardSave(con){
	saveButton.visible = con;
}

/*!
 * 
 * DISPLAY TOP 10 SCOREBOARD - This is the function that runs to display top ten scoreboard
 * 
 */

function goScorePage(page){
	var targetContainer;
	scoreBoardContainer.visible = false;
	$('#scoreHolder').hide();
	
	switch(page){
		case 'submit':
			targetContainer = null;
			$('#scoreHolder').show();
		break;
		
		case 'scoreboard':
			targetContainer = scoreBoardContainer;
			loadScoreboard();
		break;
		
		case '':
			targetContainer = null;
		break;
	}
	
	if(targetContainer != null){
		targetContainer.visible = true;
		resizeScore();
	}
}

/*!
 * 
 * SUBMIT - This is the function that runs to submit user score data
 * 
 */
function submitUserScore(score, type){
	var errorCon = false;
	var errorMessage = 'Submission error:';
	
	if($('#uName').val().length == 0){
		errorCon = true;
		errorMessage += '\n*Please enter your name';
	}
	
	if($('#uEmail').val().length == 0){
		errorCon = true;
		errorMessage += '\n*Please enter your email';
	}
	
	if(!validateEmail($('#uEmail').val())){
		errorCon = true;
		errorMessage += '\n*Please enter a valite email';
	}
	
	if(errorCon){
		alert(errorMessage);	
	}else{
		//proceed	
		$.ajax({
		  type: "POST",
		  url: 'addScoreUnique.php',
		  data: { name: $('#uName').val(), email: $('#uEmail').val(), type:type, score:score, enableLevel:enableLevel},
		  success: submitScoreSuccess,
		  dataType  : 'json'
		});
	}
}

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function submitScoreSuccess(data){
	if(data.status == true){
		goScorePage('');
		toggleScoreboardSave(false);
	}else{
		if(data.error == 0){
			alert('Database connection error');	
		}else{
			alert('Submission error, please try again.');	
		}
	}
}

/*!
 * 
 * LOAD DATA - This is the function that runs to load scoreboard data
 * 
 */
var scoreListsData = {page:1, newPage:1};
function toggleScorePage(con){
	if(con){
		scoreListsData.newPage++;
		scoreListsData.newPage = scoreListsData.newPage > totalScorePage ? totalScorePage : scoreListsData.newPage;
	}else{
		scoreListsData.newPage--;
		scoreListsData.newPage = scoreListsData.newPage < 1 ? 1 : scoreListsData.newPage;	
	}
	
	loadScoreboard();
}

function detectScorePage(){
	if(totalScorePage <= 1){
		scorePrevTxt.visible = scoreNextTxt.visible = false;
	}else{
		scorePrevTxt.visible = scoreNextTxt.visible = false;
		if(scoreListsData.page > 1){
			scorePrevTxt.visible = true;
		}
		
		if(scoreListsData.page < totalScorePage){
			scoreNextTxt.visible = true;
		}
	}
}

function loadScoreboard(type){
	if(scoreListsData.newPage != scoreListsData.page){
		scoreListsData.page = scoreListsData.newPage;	
	}
	
	detectScorePage();
	
	var pageLimit = String(((scoreListsData.page-1) * 10)+','+((scoreListsData.page) * 10));
	
	$.ajax({
	  type: "POST",
	  url: 'topRank.php',
	  data: {type:type, reverse:scoreReverse, limit:pageLimit },
	  success: loadScoreboardSuccess,
	  dataType  : 'json'
	});	
}

function loadScoreboardSuccess(data){
	var listCount = (scoreListsData.page-1) * 10;
	
	for(var i=0; i<10; i++){
		$.scoreList[(i+1)+'_'+0].text = '';
		
		if(typeof scoreRank_arr[listCount] != "undefined"){
			$.scoreList[(i+1)+'_'+0].text = scoreRank_arr[listCount];	
		}
		
		$.scoreList[(i+1)+'_'+1].text = '';
		$.scoreList[(i+1)+'_'+2].text = '';
		$.scoreList[(i+1)+'_'+3].text = '';
		listCount++;
	}
	
	if(data.status == true){
		var scoreList = data.datas;
		
		if(scoreList.length>0){
			for(var i=0; i<scoreList.length; i++){
				if(typeof scoreList[i] != "undefined"){
					if(enableLevel){
						$.scoreList[(i+1)+'_'+1].text = scoreList[i].name;
						$.scoreList[(i+1)+'_'+2].text = scoreList[i].type;
						$.scoreList[(i+1)+'_'+3].text = scoreList[i].score;
					}else{
						$.scoreList[(i+1)+'_'+1].text = scoreList[i].name;
						$.scoreList[(i+1)+'_'+2].text = scoreList[i].score;	
					}
				}
			}
		}
	}else{
		if(data.error == 0){
			alert('Database connection error');	
		}
	}
}

/*!
 * 
 * RESIZE SCORE - This is the function that runs to resize score
 * 
 */
function resizeScore(){
	$('.fontLink').each(function(index, element) {
		$(this).css('font-size', Math.round(Number($(this).attr('data-fontsize'))*scalePercent));
	});
	
	$('#scoreHolder').css('width',stageW*scalePercent);
	$('#scoreHolder').css('height',stageH*scalePercent);
	
	$('#scoreHolder').css('left', (offset.left/2));
	$('#scoreHolder').css('top', (offset.top/2));
	
	$('#scoreHolder .scoreInnerContent').css('width',contentW*scalePercent);
	$('#scoreHolder .scoreInnerContent').css('height',contentH*scalePercent);
	
	var spaceTop = (stageH - contentH)/2;
	var spaceLeft = (stageW - contentW)/2;
	$('#scoreHolder .scoreInnerContent').css('left', spaceLeft*scalePercent);
	$('#scoreHolder .scoreInnerContent').css('top', spaceTop*scalePercent);
	
	if (typeof scoreboardButton != "undefined") {
		scoreboardButton.x = scoreboardCloseButton.x = offset.x + 50;
		scoreboardButton.y = scoreboardCloseButton.y = offset.y + 40;
	}
	
	if(fixedScreen){
		$('#scoreHolder .scoreInnerContent').addClass('extraGap');	
	}
}