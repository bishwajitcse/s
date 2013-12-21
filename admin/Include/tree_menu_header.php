<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Tree Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>
	li{
		list-style:none;
	}
</style>

<script language="javascript">
function show(subCategory, path){
	var thesub;
	var theimage;
	var imageid;
	var testingdiv;
	
	thesub = document.getElementById(subCategory);
	
	imageid = "img_"+subCategory;
	theimage = document.getElementById(imageid);
	
	testingdiv = document.getElementById("testing");
	
	if(thesub.style.display == 'block'){
		//collapse...
		thesub.style.display = 'none';
		theimage.src = path+'images/plus.png';
		
		/*
		//testing...
		testingdiv.style.display = 'block';
		testingdiv.innerHTML = path+'common/parts_manuals/open.gif';
		*/

	}else{
		//expand/display...
		thesub.style.display = 'block';
		theimage.src =path+'images/minus.png';
		
		/*
		//testing...
		testingdiv.style.display = 'block';
		testingdiv.innerHTML = path+'common/parts_manuals/up.gif';
		*/
	}
	
}
</script>

<script language="javascript" type="text/javascript">
	function nokids(){
		var kidnot;
		kidnot = new Array();
		
		<?php
			for($i=0; $i<count($no_children); $i++){
				print("kidnot.push(\"".$no_children[$i]."\");\n");
			}
		?>
		
		for(i in kidnot){
			
			var theid;
			theid = kidnot[i];
			
			//document.getElementById("testing").innerHTML += theid+", ";
			document.getElementById(kidnot[i]).style.color = "green";
			/*
			var nodelings = document.getElementById(kidnot[i]).childNodes;
			for(var i=0; i<nodelings.length; i++){
				alert(nodelings[i]);
			}
			*/
		}
	}
</script>

</head>
