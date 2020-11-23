function checkPass(){
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message1 = document.getElementById('error-nwl1');
    var message2 = document.getElementById('error-nwl2');

    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 7)
    {
        message1.style.color = goodColor;
        message1.innerHTML = "<i class='fa fa-check'></i>"
    }
    else
    {
        message1.style.color = badColor;
        message1.innerHTML = "<i class='fa fa-times'></i>"
        return;
    }
  
    if(pass1.value == pass2.value)
    {
        message2.style.color = goodColor;
        message2.innerHTML = "<i class='fa fa-check'></i>"
    }
	else
    {
        message2.style.color = badColor;
        message2.innerHTML = "<i class='fa fa-times'></i>"
    }
  }