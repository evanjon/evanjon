function getInfo1() {
		var extraContent = document.getElementById("extraContent");
		if (extraContent.innerHTML=="The Conceptual Age, a term coined by Daniel Pink in his book, A Whole New Mind, describes the need for more divergent, conceptual thinkers as menial and computational work increasingly becomes the job of both and either computers and cheaper, foreign workers.") {
			extraContent.innerHTML="";
		} else {
				extraContent.innerHTML="The Conceptual Age, a term coined by Daniel Pink in his book, A Whole New Mind, describes the need for more divergent, conceptual thinkers as menial and computational work increasingly becomes the job of both and either computers and cheaper, foreign workers.";	
		} return false;

	}

function getInfo2() {
		var extraContent = document.getElementById("extraContent");
		if (extraContent.innerHTML=="In 2015, we have the choice between thousands of sources. How do people decide which media to follow? Which articles to read? Which headlines to trust? Which peers are credible? These are the types of questions I'm interested in answers.") {
			extraContent.innerHTML="";
		} else {
				extraContent.innerHTML="In 2015, we have the choice between thousands of sources. How do people decide which media to follow? Which articles to read? Which headlines to trust? Which peers are credible? These are the types of questions I'm interested in answers.";	
		} return false;

	}



// ______curriculum list________
function hideList() {
    var hiddenList = document.getElementById("hiddenList");
    var classDescript = document.getElementById("extraContent2");
    var extralist = document.getElementById("moreContent");
    if (hiddenList.style.display == "block") {
        hiddenList.style.display = "none";
        classDescript.innerHTML="";
        extralist.innerHTML="";
    } else {
        hiddenList.style.display = "block";
    } return false;
}

function getInfo3() {
		var extraContent = document.getElementById("extraContent2");
		var moreContent = document.getElementById("moreContent");
		if (extraContent.innerHTML=="This class immerses small teams of students in semester needs assessment and usability evaluation of a product. I was project manager of my team, and we investigated the market viability of mental health tech startup.") {
			extraContent.innerHTML="";
			moreContent.innerHTML="";
		} else {
			extraContent.innerHTML="This class immerses small teams of students in semester needs assessment and usability evaluation of a product. I was project manager of my team, and we investigated the market viability of mental health tech startup.";	
			moreContent.innerHTML="<li>Interaction Mapping</li><li>Heuristic Evaluation</li><li>User Personas & Scenerios</li><li>Competitive Analysis</li><li>Market Assessment Survey</li>";

		} return false;

	}

function removeList() {
	var moreContent = document.getElementById("moreContent");
	moreContent.innerHTML="";
	return false;

}

function getInfo4() {
		var extraContent = document.getElementById("extraContent2");
		if (extraContent.innerHTML=="This class is designed to catch students up to speed on the communication explosion computers have detonated. Topics covered technological determinism, social construction, the Networked Perspective, media habit, Internet news, E-communities, social media sites.<br>You can read my term paper here.") {
			extraContent.innerHTML="";
		} else {
				extraContent.innerHTML="This class is designed to catch students up to speed on the communication explosion computers have detonated. Topics covered technological determinism, social construction, the Networked Perspective, media habit, Internet news, E-communities, social media sites.<br>You can read my term paper here.";	
		} return false;

	}

function getInfo5() {
		var extraContent = document.getElementById("extraContent2");
		if (extraContent.innerHTML=="This class explores the 10 Cardinal Issues of the decision-making process from marketing, and economics, and ethical perspectives. The professor, Dr. Frank Yates, one of my two academic mentors, is an expert in the field whose research formed the backbone of this class.") {
			extraContent.innerHTML="";
		} else {
				extraContent.innerHTML="This class explores the 10 Cardinal Issues of the decision-making process from marketing, and economics, and ethical perspectives. The professor, Dr. Frank Yates, one of my two academic mentors, is an expert in the field whose research formed the backbone of this class.";	
		} return false;

	}

function getInfo6() {
	var extraContent = document.getElementById("extraContent2");
	if (extraContent.innerHTML=="This class examines the nuances of the independent and interdependent cultural influences and outcomes with specific emphasis on the neurobiology, the role of religion, the role of social class, biculturation, and social, genetic, and biological consequences. Prof. Kitayama is an expert in the field.") {
		extraContent.innerHTML="";
	} else {
			extraContent.innerHTML="This class examines the nuances of the independent and interdependent cultural influences and outcomes with specific emphasis on the neurobiology, the role of religion, the role of social class, biculturation, and social, genetic, and biological consequences. Prof. Kitayama is an expert in the field.";	
	} return false;

}

function getInfo7() {
		var extraContent = document.getElementById("extraContent2");
		if (extraContent.innerHTML=="A blank piece of paper is a canvas to explore the nuances of human expression, reaction, decision-making. I use this canvas to describe my observations about how human beings are. Language is my forte, thus writing is my creative stimulation.") {
			extraContent.innerHTML="";
		} else {
				extraContent.innerHTML="A blank piece of paper is a canvas to explore the nuances of human expression, reaction, decision-making. I use this canvas to describe my observations about how human beings are. Language is my forte, thus writing is my creative stimulation.";	
		} return false;

	}


// _________Experience Section_______

function hideList2() {
    var hiddenList2 = document.getElementById("hiddenList2");
    // var classDescript = document.getElementById("extraContent2");
    // var extralist = document.getElementById("moreContent");
    if (hiddenList2.style.display == "block") {
        hiddenList2.style.display = "none";
        // classDescript.innerHTML="";
        // extralist.innerHTML="";
    } else {
        hiddenList2.style.display = "block";
    } return false;
}


function hideList3() {
    var hiddenList3 = document.getElementById("hiddenList3");
    // var classDescript = document.getElementById("extraContent2");
    // var extralist = document.getElementById("moreContent");
    if (hiddenList3.style.display == "block") {
        hiddenList3.style.display = "none";
        // classDescript.innerHTML="";
        // extralist.innerHTML="";
    } else {
        hiddenList3.style.display = "block";
    } return false;
}

