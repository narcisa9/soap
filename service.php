<?php
include('client.php');
//$id_array=array('id'=>'2');

//echo $client->getTitle($id_array);

//$books=$client->getBooks();
//foreach($books as $book) echo "<br>".$book['title'];
if(isset($_GET["actiune"]))
{
switch($_GET['actiune']) {
	case("filtrare_titlu"):
						$params=array(
									"titlu" => $_GET['titlu'],
									"nume_carte" => 'cartea unu');
						$books=$client->getBooks(array($params));
						if(!empty($books)&&!is_null($books))
						 foreach($books as $book) echo "<br>".$book['titlu'];
						break;
						
	case("show_authors"):
						$params=array();
						$results=$client->getAuthors(array($params));
						//var_dump($results);
					if(!empty($results)&&!is_null($results))
						{
					echo "
					 <table class=\"table table-bordered\">
						<thead>
						  <tr>
							<th>Nr.</th>
							<th>Nume si Prenume autor</th>
							<th>Actiuni</th>
						  </tr>
						</thead>
						<tbody>";
						  $i = 1;
						 foreach($results as $result) 
						echo "
							<tr>
							<td>".$i++."</td>
							<td>".$result['nume_autor']."</td>
							<td>
							   <button  id=".$result['id_autor']."  value=\"".$result['nume_autor']."\" class=\"btn btn-default update\">Modifica</button>
							   <button id=".$result['id_autor']." class=\"btn btn-default delete\">Sterge</button>
							 </td>
						  </tr>";
				 echo" </tbody>
					 </table>"; 
						}  
						break;
	   case("show_authors_book"):
						$params=array();
						$results=$client->getAuthorsBook(array($params));
						echo json_encode($results);
		
						break; 
		case("show_book_for_rent"):
						$params=array();
						$results=$client->getBooksForRent(array($params));
						echo json_encode($results);
		
						break; 
		case("show_client_for_rent"):
						$params=array();
						$results=$client->getClientsForRent(array($params));
						echo json_encode($results);
		
						break;
	    case("show_rents_for_delete"):
						$params=array();
						$results=$client->getRentForDelete(array($params));
						echo json_encode($results);
		
						break; 
        case("show_rent"):
						$params=array();
						$results=$client->getRent(array($params));
					if(!empty($results)&&!is_null($results)){
					echo "
					 <table class=\"table table-bordered\">
						<thead>
						  <tr>
							<th>Nr.</th>
							<th>Client</th>
							<th>Carti imprumutate</th>
							<th>Zile restituit</th>
							<th>Actiuni</th>
						  </tr>
						</thead>
						<tbody>";	
						 $i = 1;
                          foreach($results as $k =>$result) {							  
						 
                          echo "<tr>
						 	    <td>".$i++."</td>
								<td>".$result['id_client_nume']."</td>
								<td>".$result['id_carte_nume']."
								    <p style='font-size:12px;'>Autori: ".$result['autori_carte']."</p></td>
								<td>";
								if($result['termen'] >0){
									echo "<span style='color:red'>Termen depasit cu <b>" .$result['termen']. "</b> zile</span>";
								}else{
									echo "<span style='color:green'>Mai sunt " .abs($result['termen'])." zile pana la restituire</span>";
								}
						echo   "</td>
						        <td>
							   <button  id=".$result['id_imprumut']." data-numar_zile=\"".$result['numar_zile']."\" data-data_imprumut=\"".$result['data_imprumut']."\"  data-client=\"".$result['id_client']."\" data-carteid=\"".$result['id_carte']."\" data-cartetext=\"".$result['id_carte_nume']."\" value=\"".$result['id_client']."\" class=\"btn btn-default updatebookrent\">Modifica</button>
							   <button id=".$result['id_imprumut']." value=\"".$result['id_carte']."\" class=\"btn btn-default deleterent\">Sterge</button>
							 </td>
							   </tr>";
					
						  }
				echo" </tbody>
					 </table>";
						}
		                // var_dump($results);
						break;	
		case("show_authors_of_all_books"):
						$params=array();
						$results=$client->getBooksAuth(array($params));
						$r=array();
						$i=0;
						
						if(!empty($results)&&!is_null($results)){
						
							foreach($results as $k =>$result) {
								
								if(!empty($result['id_autori'])&&!is_null($result['id_autori'])){
									
                                	foreach($result['id_autori'] as $k_id => $val){		
										$r[$i++]=$k_id;
									}
								}					
							}
						}
						echo json_encode($r);
		break;
		case("show_books"):
						$params=array();
						$results=$client->getBooksAuth(array($params));
						if(!empty($results)&&!is_null($results)){
						echo "
					 <table class=\"table table-bordered\">
						<thead>
						  <tr>
							<th>Nr.</th>
							<th>Carte</th>
							<th>Autori</th>
							<th>Actiuni</th>
						  </tr>
						</thead>
						<tbody>";
						  $i = 1;
						 foreach($results as $k =>$result) {
						echo "
							<tr>
							<td>".$i++."</td>
							<td>".$result['titlu']."</td>";
							
							if(!empty($result['id_autori'])&&!is_null($result['id_autori'])){
								$autor=array();
								echo "<td>";
                                	foreach($result['id_autori'] as $k_id => $val){
										echo "<p>".$val."</p>";
										$autor[$k][$k_id] = $k_id;}
								echo "</td>";
							}					
				echo"
							<td>
							   <button  id=".$k." data-autori=\"". implode(",",$autor[$k])."\" value=\"".$result['titlu']."\" class=\"btn btn-default updatebook\">Modifica</button>
							   <button id=".$k." class=\"btn btn-default deletebook\">Sterge</button>
							 </td>
						 </tr>";}
				echo" </tbody>
					 </table>";
						}
						break;
		case("show_clients"):
						$params=array();
						$results=$client->getClients(array($params));
					if(!empty($results)&&!is_null($results))
						{
					echo "
					 <table class=\"table table-bordered\">
						<thead>
						  <tr>
							<th>Nr.</th>
							<th>Nume si Prenume Client</th>
							<th>Actiuni</th>
						  </tr>
						</thead>
						<tbody>";
						  $i = 1;
						 foreach($results as $result) 
						echo "
							<tr>
							<td>".$i++."</td>
							<td>".$result['nume_client']."</td>
							<td>
							   <button  id=".$result['id_client']." value=\"".$result['nume_client']."\" class=\"btn btn-default updateclient\">Modifica</button>
							   <button id=".$result['id_client']." class=\"btn btn-default deleteclient\">Sterge</button>
							 </td>
						  </tr>";
				 echo" </tbody>
					 </table>";
						} 
						break;
	
}
}

//ramura pentru actiunile  de POST
if(isset($_POST["actiune"]))
{
 switch($_POST["actiune"]) {
   case("add_author"):  
	                  $params=array(
				         "nume_autor" => $_POST["nume_autor"],
						 "id_autor" => $_POST["id_autor"]);
				  		 $client->upinAutor(array($params));
                         break;
   case("delete_author"):  
	                  $params=array(
						 "id_autor" =>htmlspecialchars( $_POST["id_autor"]));
				  		 $client->delAutor(array($params));
                         break;
  case("add_client"):  
	                  $params=array(
				         "nume_client" =>htmlspecialchars( $_POST["nume_client"]),
						 "id_client" => htmlspecialchars( $_POST["id_client"]));
				  		 $client->upinClient(array($params));
                         break;
   case("delete_client"):  
	                  $params=array(
						 "id_client" => $_POST["id_client"]);
				  		 $client->delClient(array($params));
                         break;
   case("add_book"):  
	                  $params=array(
				         "titlu_carte" => htmlspecialchars($_POST["titlu_carte"]),
						 "id_carte" => htmlspecialchars($_POST["id_carte"]),
						 "id_autor" =>implode(",",$_POST["id_autor"]));
				  		$client->upinAutorBook(array($params));
                         break;
   case("delete_book"):  
	                  $params=array(
						 "id_carte" =>htmlspecialchars($_POST["id_carte"]));
				  		 $client->delBook(array($params));
                         break;
    case("add_rent"):  
	                  $params=array(
					     "id_imprumut"       => htmlspecialchars($_POST["id_imprumut"]),
				         "id_client"         => htmlspecialchars($_POST["id_client"]),
						 "id_carte"          => htmlspecialchars($_POST["id_carte"]),
						 "id_carte_rent"     => htmlspecialchars($_POST["id_carte_rent"]),
						 "data_imprumut"     => htmlspecialchars($_POST["data_imprumut"]),
						 "numar_zile"        => htmlspecialchars($_POST["numar_zile"]));
				  		$client->upinBookRent(array($params));
                         break;
   case("delete_rent"):  
	                  $params=array(
					     "id_carte"    => htmlspecialchars($_POST["id_carte"]),
						 "id_imprumut" => htmlspecialchars($_POST["id_imprumut"]));
				  		 $client->deleteRent(array($params));
                         break;

	
}
}
?>