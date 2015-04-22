// ______EDUCATION_____

function getInfo1() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="The Conceptual Age, a term coined by Daniel Pink in his book, A Whole New Mind, describes the need for more divergent, conceptual thinkers as menial and computational work increasingly becomes the job of both and either computers and cheaper, foreign workers.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";
		} else {
				extraContent.innerHTML="The Conceptual Age, a term coined by Daniel Pink in his book, A Whole New Mind, describes the need for more divergent, conceptual thinkers as menial and computational work increasingly becomes the job of both and either computers and cheaper, foreign workers.";	
				div.style.visibility="visible";

		} return false;

	}

function getInfo2() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="In 2015, we have the choice between thousands of sources. How do people decide which media to follow? Which articles to read? Which headlines to trust? Which peers are credible? These are the types of questions I'm interested in answers.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="In 2015, we have the choice between thousands of sources. How do people decide which media to follow? Which articles to read? Which headlines to trust? Which peers are credible? These are the types of questions I'm interested in answers.";	
				div.style.visibility="visible";
		} return false;

	}



// ______curriculum list________
function hideList() {
    var hiddenList = document.getElementById("hiddenList");
    var classDescript = document.getElementById("extraContent");
    var extralist = document.getElementById("moreContent");
    if (hiddenList.style.display == "block") {
        hiddenList.style.display = "none";
        classDescript.innerHTML="";
        extralist.innerHTML="";
    } else {
        hiddenList.style.display = "block";
    } return false;
}

function hideDiv() {
	var div = document.getElementById("hiddenDiv1");

	if (div.style.visibility=="visible") {
		div.style.visibility="hidden";
	} return false;

}

function getInfo3() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");
		var moreContent = document.getElementById("moreContent");
		if (extraContent.innerHTML=="This class immerses small teams of students in semester needs assessment and usability evaluation of a product. I was project manager of my team, and we investigated the market viability of mental health tech startup.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";
			moreContent.innerHTML="";
		} else {
			extraContent.innerHTML="This class immerses small teams of students in semester needs assessment and usability evaluation of a product. I was project manager of my team, and we investigated the market viability of mental health tech startup.";	
			moreContent.innerHTML="<li class=\"white\">Interaction Mapping</li><li class=\"white\">Heuristic Evaluation</li><li class=\"white\">User Personas & Scenerios</li><li class=\"white\">Competitive Analysis</li><li class=\"white\">Market Assessment Survey</li>";
			div.style.visibility="visible";

		} return false;

	}

function removeList() {
	var moreContent = document.getElementById("moreContent");
	moreContent.innerHTML="";
	return false;

}

function getInfo4() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="This class is designed to catch students up to speed on the communication explosion computers have detonated. Topics covered technological determinism, social construction, the Networked Perspective, media habit, Internet news, E-communities, social media sites.<br>You can read my term paper here.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";
		} else {
				extraContent.innerHTML="This class is designed to catch students up to speed on the communication explosion computers have detonated. Topics covered technological determinism, social construction, the Networked Perspective, media habit, Internet news, E-communities, social media sites.<br>You can read my term paper here.";	
				div.style.visibility="visible";
		} return false;

	}

function getInfo5() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="This class explores the 10 Cardinal Issues of the decision-making process from marketing, and economics, and ethical perspectives. The professor, Dr. Frank Yates, one of my two academic mentors, is an expert in the field whose research formed the backbone of this class.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";
		} else {
				extraContent.innerHTML="This class explores the 10 Cardinal Issues of the decision-making process from marketing, and economics, and ethical perspectives. The professor, Dr. Frank Yates, one of my two academic mentors, is an expert in the field whose research formed the backbone of this class.";	
				div.style.visibility="visible";

		} return false;

	}

function getInfo6() {
	var extraContent = document.getElementById("extraContent");
	var div = document.getElementById("hiddenDiv1");

	if (extraContent.innerHTML=="This class examines the nuances of the independent and interdependent cultural influences and outcomes with specific emphasis on the neurobiology, the role of religion, the role of social class, biculturation, and social, genetic, and biological consequences. Prof. Kitayama is an expert in the field.") {
		extraContent.innerHTML="";
		div.style.visibility="hidden";

	} else {
			extraContent.innerHTML="This class examines the nuances of the independent and interdependent cultural influences and outcomes with specific emphasis on the neurobiology, the role of religion, the role of social class, biculturation, and social, genetic, and biological consequences. Prof. Kitayama is an expert in the field.";	
			div.style.visibility="visible";

	} return false;

}

function getInfo7() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="A blank piece of paper is a canvas to explore the nuances of human expression, reaction, decision-making. I use this canvas to describe my observations about how human beings are. Language is my forte, thus writing is my creative stimulation.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="A blank piece of paper is a canvas to explore the nuances of human expression, reaction, decision-making. I use this canvas to describe my observations about how human beings are. Language is my forte, thus writing is my creative stimulation.";	
				div.style.visibility="visible";

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


function getInfo8() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Personally conducted ~50 in-person customer interviews ranging from general needs assessment to paper-prototype usability testing.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="Personally conducted ~50 in-person customer interviews ranging from general needs assessment to paper-prototype usability testing.";	
				div.style.visibility="visible";

		} return false;

	}


function getInfo9() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Usability UX design at its rawest. Working closely with Aaron Schippert on content function and interaction design on a playful paper mockup.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="Usability UX design at its rawest. Working closely with Aaron Schippert on content function and interaction design on a playful paper mockup.";	
				div.style.visibility="visible";

		} return false;

	}

function getInfo10() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Incubating at the University of Michigan Tech Arboritum, a space next to Menlo Innovation (see Richard Sheridan's Joy Inc.), I've had the opportunity to learn their world renown unique approach to creating an well-oiled, hard-working, but joyful workplace.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="Incubating at the University of Michigan Tech Arboritum, a space next to Menlo Innovation (see Richard Sheridan's Joy Inc.), I've had the opportunity to learn their world renown unique approach to creating an well-oiled, hard-working, but joyful workplace.";	
				div.style.visibility="visible";
		} return false;

	}


function getInfo11() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="First, I hacked an over-the-shelf web-cam and used open source eye-tracking software out of  Copenhagen, Denmark. With it came all the headaches of using early 21st century eye-tracking tech. Eventually, I graduated to using GazePoint. I also have experience with Arrington's ViewPoint.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="First, I hacked an over-the-shelf web-cam and used open source eye-tracking software out of  Copenhagen, Denmark. With it came all the headaches of using early 21st century eye-tracking tech. Eventually, I graduated to using GazePoint. I also have experience with Arrington's ViewPoint.";	
				div.style.visibility="visible";
		} return false;

	}


function getInfo12() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Data was cleaned and massaged using R. Statistical analysis was performed. Then, using GGplot2, heat maps were used to represent the data.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="Data was cleaned and massaged using R. Statistical analysis was performed. Then, using GGplot2, heat maps were used to represent the data.";	
				div.style.visibility="visible";
		} return false;

	}


// ______ADDITIONAL SKILLS________


function getInfo13() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="My inspiration to learn German dawned on me one family when I was sitting in a park two years ago reflecting on how if my Oma & Opa hadn't immigrated to the States back in the 1950's, I never would've been born. From that moment, I decided to explore my family heritage and have since developed a conversational and professional proficiency with the German language.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="My inspiration to learn German dawned on me one family when I was sitting in a park two years ago reflecting on how if my Oma & Opa hadn't immigrated to the States back in the 1950's, I never would've been born. From that moment, I decided to explore my family heritage and have since developed a conversational and professional proficiency with the German language.";	
				div.style.visibility="visible";
		} return false;

	}

function getInfo14() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="I have been crafting wood in my spare time for the past six years. I have made an array of smaller objects: boxes, sunglass cases, serving trays, and shelves. But my expertise is in modern furniture design, having made a coffee table/bench and full-size bed. I am currently crafting a time-capsule chest.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="I have been crafting wood in my spare time for the past six years. I have made an array of smaller objects: boxes, sunglass cases, serving trays, and shelves. But my expertise is in modern furniture design, having made a coffee table/bench and full-size bed. I am currently crafting a time-capsule chest.";	
				div.style.visibility="visible";
		} return false;

	}


function getInfo15() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="I've always been partially ambidextrous—using my left hand for fine motor skills and my right hand for gross motor skills. But in order to strengthen my cross-hemispheral neuro-cognitive capabilities, I'm actively working on developing complete ambidexterity.") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="I've always been partially ambidextrous—using my left hand for fine motor skills and my right hand for gross motor skills. But in order to strengthen my cross-hemispheral neuro-cognitive capabilities, I'm actively working on developing complete ambidexterity.";	
				div.style.visibility="visible";
		} return false;

	}


function getInfo16() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="The state of Michigan's state stone is the Petoskey stone. Growing up near the rocky shores of Lake Huron, one of my oldest hobbies is spotting their distinct, shimmering patterns among thousands of others. When I go home, it's not surprising to find me out by the lake, a cup of coffee in the morning, switching, a Corona (with a lime) in the afternoon, all day looking for these rocks. Want one?") {
			extraContent.innerHTML="";
			div.style.visibility="hidden";

		} else {
				extraContent.innerHTML="The state of Michigan's state stone is the Petoskey stone. Growing up near the rocky shores of Lake Huron, one of my oldest hobbies is spotting their distinct, shimmering patterns among thousands of others. When I go home, it's not surprising to find me out by the lake, a cup of coffee in the morning, switching, a Corona (with a lime) in the afternoon, all day looking for these rocks. Want one?";	
				div.style.visibility="visible";
		} return false;

	}