<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
	 <!-- stylsheet  for  select multiple -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.ro.min.js"></script>

</head>

<body>
    <!-- section autor -->
<div class="container-fluid">
<h1>Biblioteca</h1>
 <ul class="nav nav-tabs" id="myTab">
    <li class="active">
	    <a data-toggle="tab" id="imprumut" href="#tabs-1">Imprumut carte</a></li>
    <li><a data-toggle="tab" id="carte" href="#tabs-2">Carti</a></li>
    <li><a data-toggle="tab" id="autor" href="#tabs-3">Autori</a></li>
    <li><a data-toggle="tab" id="client" href="#tabs-4">Clienti</a></li>
  </ul>

 <div class="tab-content">
    <div id="tabs-1" class="tab-pane fade in active">
	    <div class="row">
		   <div class="col-xs-6">
			 <h2>Imprumut carte</h2>
			 <hr>
			 <form class="form-horizontal" action="">
			  <div class="form-group">
				<label class="control-label col-sm-4" for="titlu_carte">Nume Client:</label>
				<div class="col-sm-8">
				   <select class="js-states form-control" id="id_client_rent" name="states[]" required style="width:100%">  
					 <option></option>
					<!-- add dynamically option -->
				   </select>
				   <input id="hidden_id_rent" type="hidden" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="books_rent">Titlu carte:</label>
				<div class="col-sm-8" >
				   <select class="autor-multiple" id="id_carte_rent" name="states[]"  style="width:100%">  
					<option></option>
					<!-- add dynamically option -->
				   </select>
				   <input id="hidden_id_carte_rent" type="hidden" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="">Data imprumut:</label>
				<div class="col-sm-8 date" >
					 <input type="date" class="form-control" id="data_imprumut_rent" value="">
				</div>
			  </div>
			   <div class="form-group">
				<label class="control-label col-sm-4" for="">Numar zile:</label>
				<div class="col-sm-8" >
				   <input type="text" class="form-control" id="numar_zile_rent" placeholder="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="">Restituit:</label>
				<div class="col-sm-8" >
				   	<label class="radio-inline">
					   <input id="da" type="radio" name="booking" value="1" disabled> DA
					</label>
					<label class="radio-inline">
					   <input id="nu" type="radio" name="booking" value="0" checked> NU
					</label>
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				   <button id="submit_rent" class="btn btn-default">Adauga</button>
				</div>
			  </div>
			</form>
			</div>
			<div class="col-xs-6">
				
			</div>
		</div>
        <div class="row">
		   <div class="col-xs-12">
		   <h2>Lista Carti Imprumutate<h2>
				<hr>
				<!-- table autori end -->
				 <div id="rentbooks1"> </div>
				<!-- table autori -->
		   </div>
		</div><!-- end row -->
    </div><!-- end tabs-1 imprumut-->
    <div id="tabs-2" class="tab-pane fade">
			 <div class="row">
			 <div class="col-xs-6">
			 <h2>Carte</h2>
			 <hr>
			 <form class="form-horizontal" action="">
			  <div class="form-group">
				<label class="control-label col-sm-4" for="titlu_carte">Titlu Carte:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="titlu_carte" placeholder="">
				  <input id="hidden_id_carte" type="hidden" value="">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-4" for="aut">Selecteaza Autori:</label>
				<div class="col-sm-8" >
				   <select class="autor-multiple" id="aut" name="states[]" multiple="multiple" style="width:100%">  
					<!-- add dynamically option -->
				   </select>
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				   <button id="submit_carte" class="btn btn-default">Adauga</button>
				</div>
			  </div>
			</form>
			</div>
			<div class="col-xs-6">
				<h2>Lista Carti<h2>
				<hr>
					<!-- table autori end -->
					 <div id="books1"> </div>
					<!-- table autori -->
			</div>
		</div> <!-- end row -->
    </div><!-- end tabs-2 carti-->
    <div id="tabs-3" class="tab-pane fade">
	  <div class="row">
			<div class="col-xs-6">
			 <h2>Autor</h2>
			 <hr>
			 <form class="form-horizontal" action="">
			  <div class="form-group">
				<label class="control-label col-sm-4" for="nume_autor">Nume Autor:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nume_autor" placeholder="">
				  <input id="hidden_id" type="hidden" value="">
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				   <button id="submit_autor" class="btn btn-default">Adauga</button>
				</div>
			  </div>
			</form>
			</div>
			<div class="col-xs-6">
				<h2>Lista Autori<h2>
				<hr>
					<!-- table autori end -->
					 <div id="a1"> </div>
					<!-- table autori -->
			</div>
		</div><!-- end row -->
    </div><!-- end tabs-3 autori-->
    <div id="tabs-4" class="tab-pane fade">
	 <div class="row">
		   <div class="col-xs-6">
			 <h2>Client</h2>
			 <hr>
			 <form class="form-horizontal" action="">
			  <div class="form-group">
				<label class="control-label col-sm-4" for="nume_client">Nume Client:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nume_client" placeholder="">
				  <input id="hidden_id_client" type="hidden" value="">
				</div>
			  </div>
			  <div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-10">
				   <button id="submit_client" class="btn btn-default">Adauga</button>
				</div>
			  </div>
			</form>
			</div>
			<div class="col-xs-6">
				<h2>Lista Clienti<h2>
				<hr>
					<!-- table clienti end -->
					 <div id="c1"> </div>
					<!-- table clienti -->
			</div>
		</div><!-- end row -->
    </div><!-- end tabs-4 clienti -->
  </div><!-- end .tab-content -->
</div><!-- end .container-fluid -->

	<script type="text/javascript">
	$(document).ready(function()
	{
		//========= tabs ==============
		$('#myTab a').click(function(e) {
		  e.preventDefault();
		  $(this).tab('show');
		});
		// store the currently selected tab in the hash value
		$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
		  var id = $(e.target).attr("href").substr(1);
		  window.location.hash = id;
		});
		// on load of the page: switch to the currently selected tab
		var hash = window.location.hash;
		$('#myTab a[href="' + hash + '"]').tab('show');
		//----- tabs end -----------------

			 show_authors();
			 show_clients();
			 show_books();
			 show_authors_book();
			 show_for_rent("show_book_for_rent","#id_carte_rent");
			 show_for_rent("show_client_for_rent","#id_client_rent");
             show_rent();
       //  show autors ---------
		function show_authors(){
						var json2 = {"actiune":"show_authors"};
					    var url2 = "service.php";
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
								$("#a1").html(data);
								// alert("succes: "+data);
								//alert("Autorul a fost adaugat");
							
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								
								//$("#box").html('Error connecting to:' + url);
								//alert("Probleme la afisare autori"+textStatus+errorThrown);
							}
						});
						
						// Loading message
						$("#a1").html('loading...');
		}	
		//------- submit_autor ---------------
	    $("#submit_autor").click(function(){
			var json = {"actiune":"add_author",
						"nume_autor" : $("#nume_autor").val(),
						"id_autor"   : $("#hidden_id").val()
						};
			$("#nume_autor").val('');
			 $("#hidden_id").val('');
			var url = "service.php";
		
			$.ajax({
				url: url,
				type: 'POST',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					alert("Autorul a fost adaugat");
					location.reload();
					//alert($data);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					//alert("Probleme la adaugare");
				}
			});
		});
		
		//------for update data autor---------------------
		$(document).on('click','.update',function(e) {
			  var nume_autor = $(this).val();
			  var id_autor   = $(this).attr('id');
			  $('#nume_autor ').val(nume_autor);
			  $('#hidden_id').val(id_autor);
		  }); 
		 //------for delete data autor---------------------
		 function callback_autor_delete(data,field_value){

			var data_json=eval(data);				
			var found=0;
			
			for (var i = 0; i < data_json.length; i++) {
				if(data_json[i]==field_value) {
					found=1; 
					break; 
				}  
			}
				
			if(found==1) alert("Autorul nu se poate sterge deoarece exista carti cu acest autor!");
			else {
										 
			  var result = confirm("Want to delete?");
				  if (result) {
					  var json = {"actiune": "delete_author",
								  "id_autor":  field_value};
					  var url = "service.php";
						 $.ajax({
							url: url,
							type: 'POST',
							data: json,
							success: function(data, textStatus, XMLHttpRequest)
							{
								alert("Autorul a fost sters");
								 show_authors();
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								//alert("Probleme la stergere");
							}
						});
					 
				  } 
			}
		 }
		 function show_authors_of_all_books_for_delete(callback,field_value){
						var json2 = {"actiune":"show_authors_of_all_books"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest){
								// alert(data);
								callback(data,field_value);
								
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						//$("#c1").html('loading...');
		}
		$(document).on('click','.delete',function(e) {
			  var id_autor   = $(this).attr('id');
			  show_authors_of_all_books_for_delete(callback_autor_delete,id_autor);
			  /*
			  var result = confirm("Want to delete?");
              if (result) {
				  var json = {"actiune": "delete_author",
				              "id_autor":  id_autor};
				  var url = "service.php";
					 $.ajax({
						url: url,
						type: 'POST',
						data: json,
						success: function(data, textStatus, XMLHttpRequest)
						{
							alert("Autorul a fost sters");
							 show_authors();
						},
						error: function(XMLHttpRequest, textStatus, errorThrown)
						{
							//alert("Probleme la stergere");
						}
					});
				 
			  } */
			  
		  }); 
		 
//-- II. client----------------------------------------------------------------------------------------------
		 //------- submit_client ---------------
	    $("#submit_client").click(function(){
			var json = {"actiune":"add_client",
						"nume_client" : $("#nume_client").val(),
						"id_client"   : $("#hidden_id_client").val()
						};
			$("#nume_client").val('');
		    $("#hidden_id_client").val('');
			var url = "service.php";
			$.ajax({
				url: url,
				type: 'POST',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					alert("Clientul a fost adaugat");
					location.reload();
					//alert($data);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					alert("Probleme la adaugare");
				}
			});
		});
		// --- show clients ---------
		function show_clients(){
						var json2 = {"actiune":"show_clients"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
								$("#c1").html(data);
								// alert("succes: "+data);
							
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						$("#c1").html('loading...');
		}
				// --- show clients ---------
				
		function callback_delete(data,field_name,field_value) {
			
								
								//alert(data);
								data_json=eval(data);
								var found=0;
								for (var i = 0; i < data_json.length; i++) {
									if(found==1) break;
									var object = data_json[i];
									for (property in object) {
										if(property==field_name) { // filtreaza pt. a alege doar anumite proprietati din json
										var value = object[property];
										if(value==field_value) {found=1; break; } //alert(property + "=" + value); 
										
										}
									}
								}
								
								// deoarece functia e folosita atat pt. stergere clienti, cat si autori sau carti
								// construim mesajul in functie de caz (pe care il deducem din parametrul field_name)
								var message="";
								var actiune="";
								var message_success="";
								
								switch(field_name){
									case "id_client":
									message="Clientul nu poate fi sters deoarece detine carti nereturnate!";
									actiune="delete_client";
									message_success="Clientul a fost sters";
									
									break;
									case "id_carte":
									message="Cartea nu poate fi stearsa deoarece este imprumutata!";
									actiune="delete_book";
									message_success="Cartea a fost stearsa";
									
									break;
									
								}
									
								if(found==1) alert(message);
								else {
									
								 //alert("none"+"ramura stergere");	
									var result = confirm("Want to delete?");
									if (result) {
										
										 var json = {"actiune": actiune };
										 json[field_name]=field_value;
												  /*
									  var json = {"actiune": actiune,
												  "id_client":  field_value};  // "id_client":...
												  */
									  var url = "service.php";
										 $.ajax({
											url: url,
											type: 'POST',
											data: json,
											success: function(data2, textStatus, XMLHttpRequest)
											{
												alert(message_success);
												switch(field_name){
													case "id_client":
													show_clients();
													break;
													case "id_carte":
													show_books();
													break;
												}
											},
											error: function(XMLHttpRequest, textStatus, errorThrown)
											{
												//alert("Probleme la stergere");
											}
										});
									}   	
								}			  
								//alert("succes: "+data);
								
							
		}
		function show_rents_for_delete(callback,field_name,field_value){
						var json2 = {"actiune":"show_rents_for_delete"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest){
								callback(data,field_name,field_value);
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						//$("#c1").html('loading...');
		}
				/*
		function show_rents_for_delete(field_name,field_value){
						var json2 = {"actiune":"show_rents_for_delete"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
								//$("#c1").html(data);
								
						
														
								// alert(data);
								
								
								data_json=eval(data);
								var found=0;
								for (var i = 0; i < data_json.length; i++) {
									if(found==1) break;
									var object = data_json[i];
									for (property in object) {
										if(property==field_name) { // filtreaza pt. a alege doar anumite proprietati din json
										var value = object[property];
										if(value==field_value) {found=1; break; }//return value; //alert(property + "=" + value); 
										
										}
									}
								}
								if(found==1) return field_value;// alert(field_value);	
								else return "none";/// alert("none");								
								//alert("succes: "+data);
								
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						//$("#c1").html('loading...');
		}
		*/
		//------for update data client ---------------------
		$(document).on('click','.updateclient',function(e) {
			//alert('ok');
			  var nume_client = $(this).val();
			  var id_client   = $(this).attr('id');
			  $('#nume_client').val(nume_client);
			  $('#hidden_id_client').val(id_client);
		  }); 
	  //------for delete data client ---------------------
		$(document).on('click','.deleteclient',function(e) {
			  var id_client   = $(this).attr('id');
			  
			  show_rents_for_delete(callback_delete,"id_client",id_client);
		  }); 
//########## III. book ###########################
		 //------- show_authors_book  ---------------
          function show_authors_book(){
						var json2 = {"actiune":"show_authors_book"};
						var url2 = "service.php";
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
							  var data3 = $.map(JSON.parse(data), function (obj) {
							    obj.id = obj.id || obj.pk; // replace pk with your identifier
								return obj;
								}); 
								
								//$("#aut").html(data);
							   //==========jquery  select  multiple ====================
								$('#aut').select2({
			                       data:data3
                 				});
								//=========== end  jquery select  multiple ===============
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								//alert("Probleme la afisare autori"+textStatus+errorThrown);
							}
						});
						// Loading message
						$("#aut").html('loading...');
		    } 
          //------- submit_book ---------------			
		  $("#submit_carte").click(function(){
			var json = {"actiune":"add_book",
						"titlu_carte" : $("#titlu_carte").val(),
						"id_carte"   : $("#hidden_id_carte").val(),
						"id_autor" : $("#aut").val(),
						};
			$("#titlu_carte").val('');
			$("#hidden_id_carte").val('');
			$("#aut").val('').trigger('change');
			var url = "service.php";
			$.ajax({
				url: url,
				type: 'POST',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					alert("Cartea a fost adaugata");
					show_books();
					location.reload();
					//alert($data.html);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					alert("Probleme la adaugare");
				}
			}); 
		});
		// --- show books ---------
		function show_books(){
						var json2 = {"actiune":"show_books"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
								$("#books1").html(data);
								//$( "button:first" ).trigger( "click" ); exemplu trigger
								//alert("succes: "+data);
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						$("#books1").html('loading...');
		}
		//------for update data book ---------------------
		$(document).on('click','.updatebook',function(e) {
			  var titlu_carte = $(this).val();
			   var id_carte  = $(this).attr('id');
			   var autori =  $(this).data('autori');
			   var data3 = JSON.parse("[" + autori + "]");
				  
			  $('#titlu_carte').val(titlu_carte);
			  $('#hidden_id_carte').val(id_carte);
              $('#aut').val(data3).trigger('change');
			 // $('#aut').val([1,2]).trigger('change');  multiple selected array
		  }); 
		  	  //------for delete data book ---------------------
		$(document).on('click','.deletebook',function(e) {
			  var id_book   = $(this).attr('id');
			  show_rents_for_delete(callback_delete,"id_carte",id_book);
			/*  var result = confirm("Want to delete?");
              if (result) {
				  var json = {"actiune": "delete_book",
				              "id_carte":  id_book};
				  var url = "service.php";
					 $.ajax({
						url: url,
						type: 'POST',
						data: json,
						success: function(data, textStatus, XMLHttpRequest)
						{
							alert("Cartea a fost stearsa");
							show_books();
						},
						error: function(XMLHttpRequest, textStatus, errorThrown)
						{
							//alert("Probleme la stergere");
						}
					});
			  }  
			  */
		  }); 
		  
		//------for update data client ---------------------
   //-- III. book end ----------------------------------------------------------------------------------------------
   //-- IV. rent book --------------------------------------------------------------------------------------------------
    function show_for_rent(action_show,id ){
						var json2 = {"actiune":action_show};
						var url2 = "service.php";
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
							  var data3 = $.map(JSON.parse(data), function (obj) {
							    obj.id = obj.id || obj.pk; // replace pk with your identifier
								return obj;
								}); 
								//$("#aut").html(data);
							   //==========jquery  select  multiple ====================
								$(id).select2({
			                       data:data3,
								   allowClear: true,
                                   placeholder: '(Selecteaza .......)'
                 				});
								//=========== end  jquery select  multiple ===============
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								//alert("Probleme la afisare "+textStatus+errorThrown);
							}
						});
						// Loading message
						$("#aut").html('loading...');
		    }
    //------- submit_rent_book ---------------			
		  $("#submit_rent").click(function(){
			
			var booking = $('input[name=booking]:checked').val();
			if(booking == 1){
				var json = {"actiune": "delete_rent",
				              "id_imprumut":  $("#hidden_id_rent").val(),
							  "id_carte" :   $("#id_carte_rent").val()};
			}else{
			var json = {"actiune"       :"add_rent",
						"id_client"     : $("#id_client_rent").val(),
						"id_carte"      : $("#id_carte_rent").val(),
						"id_carte_rent" : $("#hidden_id_carte_rent").val(),
						"data_imprumut" : $("#data_imprumut_rent").val(),
						"numar_zile"    : $("#numar_zile_rent").val(),
						"id_imprumut"   : $("#hidden_id_rent").val()
						};
			}
			var url = "service.php";
			$.ajax({
				url: url,
				type: 'POST',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					//alert("Imprumut carte adaugat");
					show_rent();
					location.reload();
					//alert($data.html);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					//alert("Probleme la adaugare");
				}
			}); 
		});	
         //------- show_rent_book ---------------			
   function show_rent(){
						var json2 = {"actiune":"show_rent"};
						var url2 = "service.php";
					
						$.ajax({
							url: url2,
							type: 'GET',
							data: json2,
							success: function(data, textStatus, XMLHttpRequest)
							{
								$("#rentbooks1").html(data);
								//$( "button:first" ).trigger( "click" ); exemplu trigger
								//alert("succes: "+data);
							},
							error: function(XMLHttpRequest, textStatus, errorThrown)
							{
								// Error Message
								//alert("Probleme la afisare clienti"+textStatus+errorThrown);
							}
						});
						// Loading message
						$("#rentbooks1").html('loading...');
		}
	
	//------ delete rent ---------------------
	$(document).on('click','.deleterent',function(e) {
			  var id_imprumut   = $(this).attr('id');
			  var id_carte = $(this).val();
			  var result = confirm("Want to delete?");
              if (result) {
				  var json = {"actiune": "delete_rent",
				              "id_imprumut":  id_imprumut,
							  "id_carte" : id_carte};
				  var url = "service.php";
					 $.ajax({
						url: url,
						type: 'POST',
						data: json,
						success: function(data, textStatus, XMLHttpRequest)
						{
							alert("Imprumutul a  fost sters");
							show_rent();
							show_for_rent("show_book_for_rent","#id_carte_rent");
						},
						error: function(XMLHttpRequest, textStatus, errorThrown)
						{
							//alert("Probleme la stergere");
						}
					});
			  }  
		  });
//------for update data book ---------------------
		$(document).on('click','.updatebookrent',function(e) {
			  //var titlu_carte = $(this).val();
			   var id_imprumut  = $(this).attr('id');
			   var client =  $(this).data('client');
			   var data_client = JSON.parse("[" + client + "]");
			   var data_imprumut =  $(this).data('data_imprumut');
			   var numar_zile =  $(this).data('numar_zile');
		       var id_carte      =  $(this).data('carteid');
			   var text_carte    =  $(this).data('cartetext');
			   var data = { id: id_carte,
						    text: text_carte};
			  var newOption = new Option(data.text, data.id, false, false);
		
              $('#id_client_rent').val(data_client).trigger('change'); 
			  $('#id_carte_rent').append(newOption).trigger('change');
			  $('#id_carte_rent').val(data['id']).trigger('change');
			  $('#data_imprumut_rent').val(data_imprumut);
			  $('#numar_zile_rent').val(numar_zile);
			  $('#da').prop("disabled", false);
			  $('#hidden_id_rent').val(id_imprumut);
			  $('#hidden_id_carte_rent').val(id_carte);
			   //alert(id_carte);
			  
		  }); 		  
   //-- IV. rent book end ----------------------------------------------------------------------------------------------	   
	  
	/*	$("#f1").keyup(function(){
			var json = {"actiune":"filtrare_titlu",
						"titlu" : $("#f1").val()};
			var url = "service.php";
		
			$.ajax({
				url: url,
				
				type: 'GET',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					$("#box").html(data);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					// Error Message
					$("#box").html('Error connecting to:' + url);
				}
			});
			
			// Loading message
			$("#box").html('loading...');
		});

		$("#f1").keyup(function(){
			var json = {"actiune":"filtrare_titlu",
						"titlu" : $("#f1").val()};
			var url = "service.php";
		
			$.ajax({
				url: url,
				
				type: 'GET',
				data: json,
				success: function(data, textStatus, XMLHttpRequest)
				{
					$("#box").html(data);
				},
				error: function(XMLHttpRequest, textStatus, errorThrown)
				{
					// Error Message
					$("#box").html('Error connecting to:' + url);
				}
			});
			
			// Loading message
			$("#box").html('loading...');
		});
		//add  select multiple class
		 
		/*
		$(document).on('click','.btn-default',function(e) {
			alert('ok');
			 ('.selectpicker').selectpicker('val', 'Mustard');
		  }); 
*/
	
	});
 


	</script>
	
</body>
<html>