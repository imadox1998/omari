var idcarac ;
var idimage ;
var iddelete ;

$(document).ready(function(){
	 
	 //$('#riadlist').html('');

	 $.ajax({
				 "url":"./PHP/VILLA/terrain.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	//alert(rep1);
				  	var obj = JSON.parse(rep1);

				  	for (var i = 0; i < obj.length; i++) {

				  		$('<div class="nk-tb-item" id="itemriad"><div class="nk-tb-col nk-tb-col-check"><div class="custom-control custom-control-sm custom-checkbox notext">'+
                       '<input type="checkbox" class="custom-control-input" id="uid1">'+
                       '<label class="custom-control-label" for="uid1"></label>'+
                       ' </div></div><div class="nk-tb-col tb-col-sm">'+
                       '<span class="tb-product">'+
                       '<img src="./images/villa/'+obj[i]['path']+'" alt="" class="thumb">'+
                       '<span class="title">'+obj[i]['titre']+'</span></span></div>'+
                       '<div class="nk-tb-col"> <span class="tb-sub">'+obj[i]['prix']+'</span></div>'+
                       ' <div class="nk-tb-col"><span class="tb-lead">'+obj[i]['ref']+'</span></div><div class="nk-tb-col"><span class="tb-sub">'+obj[i]['Type']+'</span>'+
                       '</div><div class="nk-tb-col tb-col-md"><span class="tb-sub">'+obj[i]['Adresse']+' </span>'+
                       '</div><div class="nk-tb-col tb-col-md"><div class="asterisk tb-asterisk">'+
                       '<a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>'+
                       '</div></div><div class="nk-tb-col nk-tb-col-tools"><ul class="nk-tb-actions gx-1 my-n1">'+
                       '<li class="mr-n1"><div class="dropdown">'+
                       '<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>'+
                       '<div class="dropdown-menu dropdown-menu-right">'+
                       ' <ul class="link-list-opt no-bdr">'+
                       '<li><a onclick="updateriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-edit"></em><span>Modify</span></a></li>'+
                       '<li><a href="#"><em class="icon ni ni-eye"></em><span>Voir le riad</span></a></li>'+
                       '<li><a onclick="imageriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalimage"><em class="icon ni ni-activity-round"></em><span>Modify images</span></a></li>'+
                       '<li><a onclick="removeriad('+obj[i]['idm']+')" id=""><em class="icon ni ni-trash"></em><span>Delete</span></a></li>'+
                       '</ul></div></div></li></ul></div></div>').insertAfter("#headtable");
				  	}
				     
				  }
			 });


	 $('#Ok').click(function(){
		$.ajax({
				 "url":"./PHP/VILLA/terrain.php",
				 "method":"POST",
				 "data":{},
				  success:function(rep1)
				  {
				  	//alert(rep1);
				  	var obj = JSON.parse(rep1);
				  	$("div[id=itemriad]").remove();

				  	for (var i = 0; i < obj.length; i++) {

				  		$('<div class="nk-tb-item" id="itemriad"><div class="nk-tb-col nk-tb-col-check"><div class="custom-control custom-control-sm custom-checkbox notext">'+
                       '<input type="checkbox" class="custom-control-input" id="uid1">'+
                       '<label class="custom-control-label" for="uid1"></label>'+
                       ' </div></div><div class="nk-tb-col tb-col-sm">'+
                       '<span class="tb-product">'+
                       '<img src="./images/villa/'+obj[i]['path']+'" alt="" class="thumb">'+
                       '<span class="title">'+obj[i]['titre']+'</span></span></div>'+
                       '<div class="nk-tb-col"> <span class="tb-sub">'+obj[i]['prix']+'</span></div>'+
                       ' <div class="nk-tb-col"><span class="tb-lead">'+obj[i]['ref']+'</span></div><div class="nk-tb-col"><span class="tb-sub">'+obj[i]['Type']+'</span>'+
                       '</div><div class="nk-tb-col tb-col-md"><span class="tb-sub">'+obj[i]['Adresse']+' </span>'+
                       '</div><div class="nk-tb-col tb-col-md"><div class="asterisk tb-asterisk">'+
                       '<a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>'+
                       '</div></div><div class="nk-tb-col nk-tb-col-tools"><ul class="nk-tb-actions gx-1 my-n1">'+
                       '<li class="mr-n1"><div class="dropdown">'+
                       '<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>'+
                       '<div class="dropdown-menu dropdown-menu-right">'+
                       ' <ul class="link-list-opt no-bdr">'+
                       '<li><a onclick="updateriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-edit"></em><span>Modify</span></a></li>'+
                       '<li><a href="#"><em class="icon ni ni-eye"></em><span>Voir le riad</span></a></li>'+
                       '<li><a onclick="imageriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalimage"><em class="icon ni ni-activity-round"></em><span>Modify images</span></a></li>'+
                       '<li><a onclick="removeriad('+obj[i]['idm']+')" id=""><em class="icon ni ni-trash"></em><span>Delete</span></a></li>'+
                       '</ul></div></div></li></ul></div></div>').insertAfter("#headtable");
				  	}
				     
				  }
			 });

	});
	 $('#Yes').click(function(){
		$.ajax({
				 "url":"./PHP/VILLA/deletevilla.php",
				 "method":"POST",
				 "data":{id:iddelete},
				  success:function(rep1)
				  {

				  	$.ajax({
						 "url":"./PHP/VILLA/terrain.php",
						 "method":"POST",
						 "data":{},
						  success:function(rep1)
						  {
						  	$("div[id=itemriad]").remove();
						  	//alert(rep1);
						  	var obj = JSON.parse(rep1);

						  	for (var i = 0; i < obj.length; i++) {

						  		$('<div class="nk-tb-item" id="itemriad"><div class="nk-tb-col nk-tb-col-check"><div class="custom-control custom-control-sm custom-checkbox notext">'+
                       '<input type="checkbox" class="custom-control-input" id="uid1">'+
                       '<label class="custom-control-label" for="uid1"></label>'+
                       ' </div></div><div class="nk-tb-col tb-col-sm">'+
                       '<span class="tb-product">'+
                       '<img src="./images/villa/'+obj[i]['path']+'" alt="" class="thumb">'+
                       '<span class="title">'+obj[i]['titre']+'</span></span></div>'+
                       '<div class="nk-tb-col"> <span class="tb-sub">'+obj[i]['prix']+'</span></div>'+
                       ' <div class="nk-tb-col"><span class="tb-lead">'+obj[i]['ref']+'</span></div><div class="nk-tb-col"><span class="tb-sub">'+obj[i]['Type']+'</span>'+
                       '</div><div class="nk-tb-col tb-col-md"><span class="tb-sub">'+obj[i]['Adresse']+' </span>'+
                       '</div><div class="nk-tb-col tb-col-md"><div class="asterisk tb-asterisk">'+
                       '<a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>'+
                       '</div></div><div class="nk-tb-col nk-tb-col-tools"><ul class="nk-tb-actions gx-1 my-n1">'+
                       '<li class="mr-n1"><div class="dropdown">'+
                       '<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>'+
                       '<div class="dropdown-menu dropdown-menu-right">'+
                       ' <ul class="link-list-opt no-bdr">'+
                       '<li><a onclick="updateriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-edit"></em><span>Modify</span></a></li>'+
                       '<li><a href="#"><em class="icon ni ni-eye"></em><span>Voir le riad</span></a></li>'+
                       '<li><a onclick="imageriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalimage"><em class="icon ni ni-activity-round"></em><span>Modify images</span></a></li>'+
                       '<li><a onclick="removeriad('+obj[i]['idm']+')" id=""><em class="icon ni ni-trash"></em><span>Delete</span></a></li>'+
                       '</ul></div></div></li></ul></div></div>').insertAfter("#headtable");
						  	}
						     
						  }
					 });
				  	 
				  }
			 });

	});

	$('#Ajouter').click(function(){
		
		
		//alert('ok');
		//$('#modalAjout').modal('hide');
		 
	
		var Titre = $("#titre").val();
		var Desc = $("#Desc").val();
		var Prix = $("#Prix").val();
		var Ref = 'VT-0' ;
		var Superficie = $("#Supericie").val();
		var Type = 'Terrain';
		var Statu = $("#Statu").val();
		var adresse = $("#Adresse").val();
		var video = $("#Video").val();
		//if (video=='') video="0";

		
		
		//alert('ok');

		//var files = document.getElementById("customFile");
		var files = document.getElementById('customFile').files;

		var pdf = document.getElementById('customFile3').files;

		var form_data3 = new FormData();
		form_data3.append('Titre',Titre);
		form_data3.append('Desc',Desc);
		form_data3.append('Prix',Prix);
		form_data3.append('Ref',Ref);
		form_data3.append('Superficie',Superficie);
		form_data3.append('Type',Type);
		form_data3.append('Statu',Statu);
		form_data3.append('pdf',pdf[0]);
		form_data3.append('video',video);
		form_data3.append('adresse',adresse);

		
		
		$.ajax({
            "url":"./PHP/VILLA/AjouterTerrain.php",
            "method":"POST",
            "data":form_data3,
            processData: false,
            contentType: false,
            success:function(rep)
            {
            	//alert(rep);
            	var id =rep;
            	
            	for (var i = 0; i < files.length; i++)
				{
					//$("div[id=itemriad]").remove();
					var form_data = new FormData();
					form_data.append('id',id);
					form_data.append('Fichier',files[i]);
					//alert(i+'  '+files.length);
					
				   $.ajax({
			            "url":"./PHP/VILLA/Ajouterimagevilla.php",
			            "method":"POST",
			            "data":form_data,
                            processData: false,
                            contentType: false,
			            success:function(rep2)
			            {
			            	
			            }
			        
			        });
				}
                //$('#addProduct').modal('toggle');
                $("#modalAlert").modal('show');
            }
        });
        
		
	});
	$("#Modifer").click(function(){
		//alert('OK');
		var titre =  $("#titre1").val();
		var Prix = $("#Prix1").val();
		var Supericie = $("#Supericie1").val();
		var Desc = $("#Desc1").val();
		var Adresse = $("#Adresse1").val();
		var form_data2= new FormData();
		form_data2.append('id',idcarac);
		form_data2.append('titre',titre);
		form_data2.append('Prix',Prix);
		form_data2.append('Supericie',Supericie);
		form_data2.append('Desc',Desc);
		form_data2.append('Adresse',Adresse);

		//alert('OK');
		$.ajax({
				 "url":"./PHP/VILLA/modifierterrain.php",
				 "method":"POST",
				 "data":form_data2,
				 processData: false,
                 contentType: false,
				  success:function(rep1)
				  {
				  	$("div[id=itemriad]").remove();
				  	$('#modalTabs').modal('toggle');
					$.ajax({
						 "url":"./PHP/VILLA/terrain.php",
						 "method":"POST",
						 "data":{},
						  success:function(rep1)
						  {
						  	//alert(rep1);
						  	//alert(rep1);
						  	var obj = JSON.parse(rep1);

						  	for (var i = 0; i < obj.length; i++) {

						  		$('<div class="nk-tb-item" id="itemriad"><div class="nk-tb-col nk-tb-col-check"><div class="custom-control custom-control-sm custom-checkbox notext">'+
		                       '<input type="checkbox" class="custom-control-input" id="uid1">'+
		                       '<label class="custom-control-label" for="uid1"></label>'+
		                       ' </div></div><div class="nk-tb-col tb-col-sm">'+
		                       '<span class="tb-product">'+
		                       '<img src="./images/villa/'+obj[i]['path']+'" alt="" class="thumb">'+
		                       '<span class="title">'+obj[i]['titre']+'</span></span></div>'+
		                       '<div class="nk-tb-col"> <span class="tb-sub">'+obj[i]['prix']+'</span></div>'+
		                       ' <div class="nk-tb-col"><span class="tb-lead">'+obj[i]['ref']+'</span></div><div class="nk-tb-col"><span class="tb-sub">'+obj[i]['Type']+'</span>'+
		                       '</div><div class="nk-tb-col tb-col-md"><span class="tb-sub">'+obj[i]['Adresse']+' </span>'+
		                       '</div><div class="nk-tb-col tb-col-md"><div class="asterisk tb-asterisk">'+
		                       '<a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>'+
		                       '</div></div><div class="nk-tb-col nk-tb-col-tools"><ul class="nk-tb-actions gx-1 my-n1">'+
		                       '<li class="mr-n1"><div class="dropdown">'+
		                       '<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>'+
		                       '<div class="dropdown-menu dropdown-menu-right">'+
		                       ' <ul class="link-list-opt no-bdr">'+
		                       '<li><a onclick="updateriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-edit"></em><span>Modify</span></a></li>'+
		                       '<li><a href="#"><em class="icon ni ni-eye"></em><span>Voir le riad</span></a></li>'+
		                       '<li><a onclick="imageriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalimage"><em class="icon ni ni-activity-round"></em><span>Modify images</span></a></li>'+
		                       '<li><a onclick="removeriad('+obj[i]['idm']+')" id=""><em class="icon ni ni-trash"></em><span>Delete</span></a></li>'+
		                       '</ul></div></div></li></ul></div></div>').insertAfter("#headtable");
						  	}
						     
						  }
					 });
				  }
			});
	});
	$('#customFile2').change(function(){
		var form_data = new FormData();
		var files = document.getElementById('customFile2').files[0];
		form_data.append('id',idimage);
		form_data.append('Fichier',files);
		
		$.ajax({
				 "url":"./PHP/VILLA/modifierimage.php",
				 "method":"POST",
				 "data":form_data,
                  processData: false,
                  contentType: false,
				  success:function(rep1)
				  {
				  	 $.ajax({
						"url":"./PHP/VILLA/loadoimages.php",
						"method":"POST",
						"data":{id:idcarac},
						 success:function(rep2)
						 {
						 	var obj = JSON.parse(rep2);
						 	$("#imageriad").html("");
						 	for (var i = 0; i < obj.length; i++) {
						 		$("#imageriad").append('<div id="imaged" class="col-lg-4">'+
	                            '<div class="card card-bordered" style="width: 215px">'+
	                                '<img src="./images/villa/'+obj[i]['path']+'" class="card-img-top" alt="">'+
	                                    '<div class="card-inner">'+
	                                       ' <div class="row"> '+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="deleteimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-file-remove"></em></a>'+
	                                            '</div>'+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="clickimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-repeat"></em></a>'+
	                                           ' </div>'+
	                                        '</div>'+
	                                    '</div>'+
	                            '</div>'+
	                        '</div>');
						 	}

						 	
						 }
					})
				  }
			});
		
				
	})
	$("#Ajouter").mouseleave(function(){  
        
      });
	function load_data(query)
	   {
		  $.ajax({
		   url:"./PHP/VILLA/loadvillaByStatu.php",
		   method:"POST",
		   data:{query:query},
		   success:function(data)
		   {
		   	//alert(data);
		    	var obj = JSON.parse(data);
				  	$("div[id=itemriad]").remove();

				  	for (var i = 0; i < obj.length; i++) {

				  		$('<div class="nk-tb-item" id="itemriad"><div class="nk-tb-col nk-tb-col-check"><div class="custom-control custom-control-sm custom-checkbox notext">'+
                       '<input type="checkbox" class="custom-control-input" id="uid1">'+
                       '<label class="custom-control-label" for="uid1"></label>'+
                       ' </div></div><div class="nk-tb-col tb-col-sm">'+
                       '<span class="tb-product">'+
                       '<img src="./images/villa/'+obj[i]['path']+'" alt="" class="thumb">'+
                       '<span class="title">'+obj[i]['titre']+'</span></span></div>'+
                       '<div class="nk-tb-col"> <span class="tb-sub">'+obj[i]['prix']+'</span></div>'+
                       ' <div class="nk-tb-col"><span class="tb-lead">'+obj[i]['ref']+'</span></div><div class="nk-tb-col"><span class="tb-sub">'+obj[i]['Type']+'</span>'+
                       '</div><div class="nk-tb-col tb-col-md"><span class="tb-sub">'+obj[i]['Adresse']+' </span>'+
                       '</div><div class="nk-tb-col tb-col-md"><div class="asterisk tb-asterisk">'+
                       '<a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>'+
                       '</div></div><div class="nk-tb-col nk-tb-col-tools"><ul class="nk-tb-actions gx-1 my-n1">'+
                       '<li class="mr-n1"><div class="dropdown">'+
                       '<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>'+
                       '<div class="dropdown-menu dropdown-menu-right">'+
                       ' <ul class="link-list-opt no-bdr">'+
                       '<li><a onclick="updateriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalTabs"><em class="icon ni ni-edit"></em><span>Modify</span></a></li>'+
                       '<li><a href="#"><em class="icon ni ni-eye"></em><span>Voir le riad</span></a></li>'+
                       '<li><a onclick="imageriad('+obj[i]['idm']+')" data-toggle="modal" data-target="#modalimage"><em class="icon ni ni-activity-round"></em><span>Modify images</span></a></li>'+
                       '<li><a onclick="removeriad('+obj[i]['idm']+')" id=""><em class="icon ni ni-trash"></em><span>Delete</span></a></li>'+
                       '</ul></div></div></li></ul></div></div>').insertAfter("#headtable");
				  	}
		   }
		});
	 }
	$('#default-04').keyup(function(){
		  var search = $(this).val();
		  //alert(search);
		  
		  if(search != '')
		  {
		   	load_data(search);
		  }
		  else
		  {
		   	load_data();
		  }
	 });

})
function imageriad(a){
	idcarac=a;
	$.ajax({
				"url":"./PHP/VILLA/loadoimages.php",
				"method":"POST",
				"data":{id:a},
				 success:function(rep1)
				 {
				 	var obj = JSON.parse(rep1);
				 	$("#imageriad").html("");
				 	for (var i = 0; i < obj.length; i++) {
				 		$("#imageriad").append('<div id="imaged" class="col-lg-4">'+
	                            '<div class="card card-bordered" style="width: 215px">'+
	                                '<img src="./images/villa/'+obj[i]['path']+'" class="card-img-top" alt="">'+
	                                    '<div class="card-inner">'+
	                                       ' <div class="row"> '+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="deleteimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-file-remove"></em></a>'+
	                                            '</div>'+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="clickimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-repeat"></em></a>'+
	                                           ' </div>'+
	                                        '</div>'+
	                                    '</div>'+
	                            '</div>'+
	                        '</div>');
				 	}

				 	
				 }
			})
}
function clickimage(a)
{
	//alert(a);
	idimage = a ;
	$("#customFile2").click();
}
function deleteimage(a)
{
	//alert($(this));
	//alert(this.class)
	//var closest = this.closest(".row");
	 //closest.style.display = "none";
	
	
	//alert(a);
	
	$.ajax({
				"url":"./PHP/VILLA/deleteimages.php",
				"method":"POST",
				"data":{id:a},
				 success:function(rep1)
				 {
				 	$.ajax({
						"url":"./PHP/VILLA/loadoimages.php",
						"method":"POST",
						"data":{id:idcarac},
						 success:function(rep2)
						 {
						 	var obj = JSON.parse(rep2);
						 	$("#imageriad").html("");
						 	for (var i = 0; i < obj.length; i++) {
						 		$("#imageriad").append('<div id="imaged" class="col-lg-4">'+
	                            '<div class="card card-bordered" style="width: 215px">'+
	                                '<img src="./images/villa/'+obj[i]['path']+'" class="card-img-top" alt="">'+
	                                    '<div class="card-inner">'+
	                                       ' <div class="row"> '+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="deleteimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-file-remove"></em></a>'+
	                                            '</div>'+
	                                            '<div class="col-lg-6">'+
	                                                '<a onclick="clickimage('+obj[i]['id']+')" class="btn btn-icon btn-lg btn-primary"><em class="icon ni ni-repeat"></em></a>'+
	                                           ' </div>'+
	                                        '</div>'+
	                                    '</div>'+
	                            '</div>'+
	                        '</div>');
						 	}

						 	
						 }
					})
				 }
			});
			
}
function updateriad(a)
{
	idcarac=a;
	
	//alert(a);
	$.ajax({
				 "url":"./PHP/VILLA/loadoimage.php",
				 "method":"POST",
				 "data":{id:a},
				  success:function(rep1)
				  {
				  		
				  		var obj = JSON.parse(rep1);
				  		//alert(obj[0]['bedrooms']);
				  		$("#titre1").val(obj[0]['titre']);
						$("#Prix1").val(obj[0]['prix']);
						$("#Supericie1").val(obj[0]['meters']);
						$("#Desc1").val(obj[0]['description']);
						$("#Adresse1").val(obj[0]['Adresse']);

						
				  }
			 });
}
function removeriad(a)
	{
		//var idcar = $(this).attr('name');
		//alert(a);
		iddelete=a;
		$("#modalAlert2").modal('show');
		
	}