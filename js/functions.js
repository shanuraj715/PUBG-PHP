

function bodyfunc()
{ 
	
} 


function error404()
{
	//alert("ERROR! 404 (Page Not Found)");
}


//getFullYear()	Get the year as a four digit number (yyyy)
//getMonth()	Get the month as a number (0-11)
//getDate()	Get the day as a number (1-31)
//getHours()	Get the hour (0-23)
//getMinutes()	Get the minute (0-59)
//getSeconds()	Get the second (0-59)
//getMilliseconds()	Get the millisecond (0-999)
//getTime()	Get the time (milliseconds since January 1, 1970)
//getDay()	Get the weekday as a number (0-6)




function getYear()
{
	var d=new Date();
    var year = d.getFullYear();
    return year;
}

function getMonth()
{
	var d=new Date();
    var month = d.getMonth() + 1;
    return month;
}

function getMonthName()
{
	var d=new Date();
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var month = monthNames[getMonth() - 1];
    return month;
}

function getDate()
{
	var d=new Date();
	var date = d.getDate();
	return date;
}

function getDay()
{
	var d=new Date();
	var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var day = days[d.getDay()];
	return day;
}

function getHours()
{
	var d=new Date();
	var hour = d.getHours();
	return hour;
}

function getMinutes()
{
	var d=new Date();
	var mins = d.getMinutes();
	return mins;
}

function getSeconds()
{
	var d=new Date();
	var sec = d.getSeconds();
	return sec;
}

// The below function is use to generate the random variable. it will call an another function 'returnBgImage'
// with parameter 1 to 7.
function changeBackgroundImage()
{
	var today_date = getDate();
	if(today_date<=7)
	{
		returnBgImage(today_date);
	}
	else if(today_date>7 && today_date<=14)
	{
		today_date = today_date-7;
		returnBgImage(today_date);
	}
	else if(today_date>14 && today_date<=21)
	{
		today_date = today_date-14;
		returnBgImage(today_date);
	}
	else if(today_date>21 && today_date<=28)
	{
		today_date = today_date-21;
		returnBgImage(today_date);
	}
	else if(today_date>28 && today_date<=31)
	{
		today_date = today_date-28;
		returnBgImage(today_date);
	}
	else
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg6.jpg')";
	}
}

function returnBgImage(image)
{
	var site_url = "https://www.techfacts007.in/sr7151";
	if(image=='1')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg1.jpg')";
	}
	else if(image=='2')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg2.jpg')";
	}
	else if(image=='3')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg3.jpg')";
	}
	else if(image=='4')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg4.jpg')";
	}
	else if(image=='5')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg5.jpg')";
	}
	else if(image=='6')
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg6.jpg')";
	}
	else
	{
		document.getElementById("content_container01").style.backgroundImage = "url('./images/backgrounds/bg7.jpg')";
	}
}




function navbar_visible()
{
	var position = document.getElementById('navbar_vis').style.display;
	if(position=="")
	{
		document.getElementById('navbar_vis').style.display = "block";
	}
	else if(position=="block")
	{
		document.getElementById('navbar_vis').style.display = "none";
	}
	else if(position=="none")
	{
		document.getElementById('navbar_vis').style.display = "block";
	}
}

function setSeasonPageBackground()
{
	document.getElementById("rp_background").style.backgroundImage = "url('./images/season-background.jpg')";
}