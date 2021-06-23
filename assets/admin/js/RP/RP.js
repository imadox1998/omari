$(document).ready(function(){
	 //alert('OK');
	 //$('#riadlist').html('');
	 $.ajax({
				 "url":"./PHP/Reports/APPV.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#APPV').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/APPL.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#APPL').html(obj[0]['number']);
				     
				  }
			 });
	 
	 $.ajax({
				 "url":"./PHP/Reports/Vv.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#Vv').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/VL.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#VL').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/RV.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#RV').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/RL.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#RL').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/TV.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#TV').html(obj[0]['number']);
				     
				  }
			 });
	 $.ajax({
				 "url":"./PHP/Reports/LV.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	
				  	var obj = JSON.parse(rep1);
				  	//alert(obj[0]['number']);
				  	$('#LV').html(obj[0]['number']);
				     
				  }
			 });
			 
			 

})
