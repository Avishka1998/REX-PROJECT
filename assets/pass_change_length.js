function checkPass(){
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');

    var goodColor = "#8bf97c";
    var badColor = "#f3846d";
 	
    if(pass1.value.length > 7)
    {
      pass1.style.backgroundColor = goodColor;  
    }
    else
    {
      pass1.style.backgroundColor = badColor;
      return;
    }
  
    if(pass1.value == pass2.value)
    {
      pass2.style.backgroundColor = goodColor;   
    }
	else
    {
      pass2.style.backgroundColor = badColor;    
    }
  }