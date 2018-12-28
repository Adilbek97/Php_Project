var visible=true;
function onHide(){
		if(visible){
		 $('#ticket').hide();
		}else{
		$('#ticket').show();	
		}
		visible=!visible;
	}
function onShow(){
	$('#ticket').show();
}
