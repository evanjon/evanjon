// ______EDUCATION_____

function getInfo1() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="Der Ära des begriffliches Denkens ist ein Ausdruck, den Daniel Pink in seinem Buch, A Whole New Mind, kreiert hat. Pink meint hauptsächlich, dass die Wirtscahft mehr abweichende und begriffliche Denkerinnen und Arbeitschaften brauchen, weil viel Arbeit billiger mit Computers oder mit Arbeitschaften, die in Asia leben, schaffen können.") {
			extraContent.innerHTML="";
			div.style.display="none";
		} else {
				extraContent.innerHTML="Der Ära des begriffliches Denkens ist ein Ausdruck, den Daniel Pink in seinem Buch, A Whole New Mind, kreiert hat. Pink meint hauptsächlich, dass die Wirtscahft mehr abweichende und begriffliche Denkerinnen und Arbeitschaften brauchen, weil viel Arbeit billiger mit Computers oder mit Arbeitschaften, die in Asia leben, schaffen können.";	
				div.style.display="block";

		} return false;

	}

function getInfo2() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="Im Jahr 2015 haben wir die Entscheidung zwischen Tausende von Auswahl! Wie entscheiden Leute welche Medien zu benutzen? Welche Artikel zu lesen? Welche Hauptiteln aufzuvertrauen? Diese Fragen sind die Art von Fragen, darauf ich interessiert bin.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Im Jahr 2015 haben wir die Entscheidung zwischen Tausende von Auswahl! Wie entscheiden Leute welche Medien zu benutzen? Welche Artikel zu lesen? Welche Hauptiteln aufzuvertrauen? Diese Fragen sind die Art von Fragen, darauf ich interessiert bin.";	
				div.style.display="block";
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

	if (div.style.display=="block") {
		div.style.display="none";
	} return false;

}

function getInfo3() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");
		var moreContent = document.getElementById("moreContent");
		if (extraContent.innerHTML=="Diese Klase tauchten kleine Gruppe von Studenten in einem Semester lang Bedarfsanalyse und Nutzbarkeit Einschätzung eines Produkts ein. Ich war der Projekt Leiter, und wir untersuchten der Markt Viabilität von psychisch Gesundheit technologie Startups.") {
			extraContent.innerHTML="";
			div.style.display="none";
			moreContent.innerHTML="";
		} else {
			extraContent.innerHTML="Diese Klase tauchten kleine Gruppe von Studenten in einem Semester lang Bedarfsanalyse und Nutzbarkeit Einschätzung eines Produkts ein. Ich war der Projekt Leiter, und wir untersuchten der Markt Viabilität von psychisch Gesundheit technologie Startups.";	
			moreContent.innerHTML="<li class=\"white\">Interaction Mapping</li><li class=\"white\">Heuristic Evaluation</li><li class=\"white\">User Personas & Scenerios</li><li class=\"white\">Competitive Analysis</li><li class=\"white\">Market Assessment Survey</li>";
			div.style.display="block";

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

		if (extraContent.innerHTML=="Dieser Kurs lehrt Studenten begriffliche Rahmen die Kommunication Explosion überzudenken. Thema waren technologisch Determinismus, soziale Gesetzestextauslegung, das vernetzte Publikum, medien Gewohnheiten, Internet Nachricht, Internet Gemeinschaften, und soziale Medien. <br> Bitte lesen Sie meine Seminararbeit hier.") {
			extraContent.innerHTML="";
			div.style.display="none";
		} else {
				extraContent.innerHTML="Dieser Kurs lehrt Studenten begriffliche Rahmen die Kommunication Explosion überzudenken. Thema waren technologisch Determinismus, soziale Gesetzestextauslegung, das vernetzte Publikum, medien Gewohnheiten, Internet Nachricht, Internet Gemeinschaften, und soziale Medien. <br> Bitte lesen Sie meine Seminararbeit hier.";	
				div.style.display="block";
		} return false;

	}

function getInfo5() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="Diese Klase explorierte die Zehn Grundlagen von dem Entscheidung-machen Prozess mit spezialen Überlegungen zu marketing, wirtschaftliche und ethische Perspektiven. Der Professor, Frank Yates, ein von meiner akedemischen Berater, ist ein Experte im Fachgebeit.") {
			extraContent.innerHTML="";
			div.style.display="none";
		} else {
				extraContent.innerHTML="Diese Klase explorierte die Zehn Grundlagen von dem Entscheidung-machen Prozess mit spezialen Überlegungen zu marketing, wirtschaftliche und ethische Perspektiven. Der Professor, Frank Yates, ein von meiner akedemischen Berater, ist ein Experte im Fachgebeit.";	
				div.style.display="block";

		} return false;

	}

function getInfo6() {
	var extraContent = document.getElementById("extraContent");
	var div = document.getElementById("hiddenDiv1");

	if (extraContent.innerHTML=="Diese Klase untersucht die Nuancen zwischen unabhängige und verflochtene kulturelle Einflüsse und Ergibnisse mit spezifische Betonung auf die Neurobiologie, die Aufgabe von Religion, die Aufgabe von sozialer Klasse, und kulturelle Anpassung. Der Professor, Shinobu Kitayama ist ein Expert im Fachgebeit.") {
		extraContent.innerHTML="";
		div.style.display="none";

	} else {
			extraContent.innerHTML="Diese Klase untersucht die Nuancen zwischen unabhängige und verflochtene kulturelle Einflüsse und Ergibnisse mit spezifische Betonung auf die Neurobiologie, die Aufgabe von Religion, die Aufgabe von sozialer Klasse, und kulturelle Anpassung. Der Professor, Shinobu Kitayama ist ein Expert im Fachgebeit.";	
			div.style.display="block";

	} return false;

}

function getInfo7() {
		var extraContent = document.getElementById("extraContent");
		var div = document.getElementById("hiddenDiv1");

		if (extraContent.innerHTML=="Ein leeres Blatt Papier ist ein Leinwand die Nuances von menschlichem Ausdruck zu explorieren. Ich benutze diesen Leinwand meine Beobachtungen wie Menschen sein zu beschreiben. Sprache ist meine Stärke, deshalb ist Screiben meine kreative Stimulierung.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Ein leeres Blatt Papier ist ein Leinwand die Nuances von menschlichem Ausdruck zu explorieren. Ich benutze diesen Leinwand meine Beobachtungen wie Menschen sein zu beschreiben. Sprache ist meine Stärke, deshalb ist Screiben meine kreative Stimulierung.";	
				div.style.display="block";

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

		if (extraContent.innerHTML=="Ich habe mehr wie fünfzige mögliche Kunden befragt. Diese Interviews waren gegen eine halbe Stunde lang. Thema waren Bedarfanalyse und Brauchbarkeit Bewertung.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="PIch habe mehr wie fünfzige mögliche Kunden befragt. Diese Interviews waren gegen eine halbe Stunde lang. Thema waren Bedarfanalyse und Brauchbarkeit Bewertung.";	
				div.style.display="block";

		} return false;

	}


function getInfo9() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Brauchbarkeit UX Design während des Products noch ganz jung war. Ich habe mit Aaron Schippert für Inhalt Funktion auf eine spielerische Papier Attrappe.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Brauchbarkeit UX Design während des Products noch ganz jung war. Ich habe mit Aaron Schippert für Inhalt Funktion auf eine spielerische Papier Attrappe.";	
				div.style.display="block";

		} return false;

	}

function getInfo10() {
		var extraContent = document.getElementById("extraContent2");
		var div = document.getElementById("hiddenDiv2");

		if (extraContent.innerHTML=="Ich habe das Menlo Weg für Project Leitung gelehrnt.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Ich habe das Menlo Weg für Project Leitung gelehrnt.";	
				div.style.display="block";
		} return false;

	}
// ______Research Apprentice_____	


function getInfo11() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="Erste habe ich eine Standard Webcam gehackt und ein Opensource Augenverfolgende Software aus Copenhagen, Dänemark benutzt. Ich habe auch Erlebnisse mit Arringtons ViewPoint. Jetzt benutze ich Gazepoint.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Erste habe ich eine Standard Webcam gehackt und ein Opensource Augenverfolgende Software aus Copenhagen, Dänemark benutzt. Ich habe auch Erlebnisse mit Arringtons ViewPoint. Jetzt benutze ich Gazepoint.";	
				div.style.display="block";
		} return false;

	}


function getInfo12() {
		var extraContent = document.getElementById("extraContent3");
		var div = document.getElementById("hiddenDiv3");

		if (extraContent.innerHTML=="Wir benutzten R für statistiche Analyse. (Ggplot2 für heatmaps.)") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Wir benutzten R für statistiche Analyse. (Ggplot2 für heatmaps.)";	
				div.style.display="block";
		} return false;

	}


// ______ADDITIONAL SKILLS________


function getInfo13() {
		var extraContent = document.getElementById("extraContent4");
		var div = document.getElementById("hiddenDiv4");

		if (extraContent.innerHTML=="Ich habe so viele Familie, die in Deutschland wohnen. Ich möchte mit meinem Erbe verbinden.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Ich habe so viele Familie, die in Deutschland wohnen. Ich möchte mit meinem Erbe verbinden.";	
				div.style.display="block";
		} return false;

	}

function getInfo14() {
		var extraContent = document.getElementById("extraContent4");
		var div = document.getElementById("hiddenDiv4");

		if (extraContent.innerHTML=="Ich habe seit 2009 Schnitzkunst gemacht. Ich habe viele kleine Objekte gemacht: Kasten, Sonnenbrillen Kasten, altgediente Tabletts, Bretter. Aber ich mache lieber moderne Möbel. Ich habe einen Kaffeetisch und ein Bett gemacht. Jetzt mache ich eine Zeitkapsel Kiste.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Ich habe seit 2009 Schnitzkunst gemacht. Ich habe viele kleine Objekte gemacht: Kasten, Sonnenbrillen Kasten, altgediente Tabletts, Bretter. Aber ich mache lieber moderne Möbel. Ich habe einen Kaffeetisch und ein Bett gemacht. Jetzt mache ich eine Zeitkapsel Kiste.";	
				div.style.display="block";
		} return false;

	}


function getInfo15() {
		var extraContent = document.getElementById("extraContent4");
		var div = document.getElementById("hiddenDiv4");

		if (extraContent.innerHTML=="Ich war immer teilweise beidhändig sein. Ich benutzte meine linke Hand für Feinmotorik und meine rechte Hand für Bruttomotorik. Aber um meine <span class=\"italic white\">cross-hemispheral neuro-cognitive capabilities</span> zu verstärken, übe ich beide meiner Hände für alle Funktionen jeden Tag.") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Ich war immer teilweise beidhändig sein. Ich benutzte meine linke Hand für Feinmotorik und meine rechte Hand für Bruttomotorik. Aber um meine <span class=\"italic white\">cross-hemispheral neuro-cognitive capabilities</span> zu verstärken, übe ich beide meiner Hände für alle Funktionen jeden Tag.";	
				div.style.display="block";
		} return false;

	}


function getInfo16() {
		var extraContent = document.getElementById("extraContent4");
		var div = document.getElementById("hiddenDiv4");

		if (extraContent.innerHTML=="Die Staat Michigans Staat Stein ist der Petoskey Stein. Erwachsenwerden in der nahe die felsige Küsten Lake Huron war ein meines Zeitvertriebe ihren deutliche, schimmernde Muster inmitten tausende von andere Gesteine entdecken. Wenn ich zu Hause bin, es ist nicht ungewöhnliche mich bei dem See mit einem Bier auf der Suche Gesteine zu finden. Wollen Sie ein?") {
			extraContent.innerHTML="";
			div.style.display="none";

		} else {
				extraContent.innerHTML="Die Staat Michigans Staat Stein ist der Petoskey Stein. Erwachsenwerden in der nahe die felsige Küsten Lake Huron war ein meines Zeitvertriebe ihren deutliche, schimmernde Muster inmitten tausende von andere Gesteine entdecken. Wenn ich zu Hause bin, es ist nicht ungewöhnliche mich bei dem See mit einem Bier auf der Suche Gesteine zu finden. Wollen Sie ein?";	
				div.style.display="block";
		} return false;

	}