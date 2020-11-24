function showLiveTime() {
  var today = new Date();
  var year = today.getFullYear();
  var monthName = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  var month = monthName[today.getMonth()];
  var date = today.getDate();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  h= checkTime(h);
  m = checkTime(m);
  s = checkTime(s);
  if((m==0) && (s==0))
  {
    document.getElementById('liveTime').style.fontSize = "x-large";
  }
  else
  {
    document.getElementById('liveTime').style.fontSize = "initial";
  }
  document.getElementById('liveTime').innerHTML = h + ":" + m + ":" + s + " " + date + "-" + month + "-" + year;
  var t = setTimeout(showLiveTime, 200);
}

function checkTime(i) {
  if (i < 10) 
  {
  i = "0" + i
  };  // add zero in front of numbers < 10
  return i;
}







// Signup Form Validation

function validate_signup_form()
{
  var fname = document.getElementByName('fname').value;
  var lname = document.getElementByName('lname').value;
  var username = document.getElementByName('username').value;
  var pass = document.getElementByName('password').value;
  var repass = document.getElementByName('repass').value;
  var email = document.getElementByName('email').value;
  var mobile = document.getElementByName('mobile');
  var characterid = document.getElementByName('c_id').value;
  var age = document.getElementByName('age');
  var gender = document.getElementByName('gender').value;
  var state = document.getElementByName('state').value;
  var flag = false;

  if(fname!="" && lname!="" && username!="")
  {
    var flag = true;
  }
  else
  {
    flag = false;
  }
  if(pass!="" && repass!="" && flag==true)
  {
    if(pass==repass)
    {
      flag = true;
    }
  }
  else
  {
    flag = false;
  }
  if(email!="" && flag==true)
  {
    flag = true;
  }
  else
  {
    flag = false;
  }
  if(isNaN(mobile)==false && flag==true)
  {
    if(mobile.length==10)
    {
      flag = true;
    }
  }
  else
  {
    flag = false;
  }
  if(isNaN(characterid)==false && flag==true)
  {
    flag = true;
  }
  else
  {
    flag = false;
  }
  if(age!="" && gender!="" && state!="" && flag==true)
  {
    flag = true;
  }
  else
  {
    flag = false;
  }
  if(flag==true)
  {
    return true;
  }
  else
    return false;
}

function changebackground()
{
  document.getElementById("background").style.backgroundImage = "url('./images/backgrounds/01.jpg')";
}
