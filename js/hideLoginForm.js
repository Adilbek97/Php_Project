var login1 = sessionStorage.getItem("msg");
      if(login1=="user_in"){
         $('#login_div').hide();
         var divOut=document.getElementById('out_link');
         var element = document.createElement('div');
		    element.innerHTML=sessionStorage.getItem("login")+"   <a href='php_src/signOut.php'  >выход</a> ";
		    element.style.color="green";
		    divOut.appendChild(element);
      }else{
      	$('#login_div').show();
      }
