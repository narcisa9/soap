<?php
include('database.php');
class server {
	private $con;
	public function __construct(){
		$this->db = new Database();
	}

	/*
	public function getBookTitle($id_array){
		$con = mysqli_connect("localhost","root","","library");
		$id=$id_array['id'];
		$sql="SELECT title FROM books WHERE id='$id'";
		$qry=mysqli_query($this, $sql);
		$res=mysql_fetch_array($qry);
		return $res['title'];
	}
	
	public function getAllBooks($param=array()){
		$con = mysqli_connect("localhost","root","","library");
		$a="";
		
		if(sizeof($param)!=0) $a=" WHERE titlu LIKE '%".$param['titlu']."%'";
		
		$sql="SELECT titlu FROM carti".$a;
		$qry=mysqli_query($this, $sql);
		
		if (mysqli_num_rows($qry) > 0) {
		$matrix=array();
			while($row = mysql_fetch_assoc($qry)) {
			$matrix[]= $row;
		}
					
		return $matrix;
		}
		return false;
		}  */
	 
	
//##################### methods for authors ##################################
	public function updateInsertAutor($param=array()) {
		
		if($param['id_autor']==null) { // insert
			$sql="INSERT INTO autori (nume_autor) values('".$param['nume_autor']."')";
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		} else {// update
			$sql = "UPDATE autori SET nume_autor = '".$param['nume_autor']."' WHERE id_autor= ".$param['id_autor'];
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		}
		//return false;
	}

	public function deleteAutor($param=array()) {
		if($param['id_autor']==!null) { // set status 
			$sql = "DELETE FROM autori WHERE id_autor= ".$param['id_autor']; 
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		   }
		return false;
	} 
	public function getAllAuthors($param=array()){
		$matrix=array();
		$sql="SELECT * FROM autori ";
		$qry = mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[]= $row;
		}
			return	$matrix;	
		
		} 
		return false;
	} 
//------------------- method authors end ---------------------------------------
 
//################### methods for clients #######################################
     public function getAllAuthorsBook($param=array()){
		$matrix=array();
		$sql="SELECT * FROM autori ";
		$qry = mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[$row['id_autor']]['id']= $row['id_autor'];
			$matrix[$row['id_autor']]['text']= $row['nume_autor'];
		}
			return	$matrix;	
		
		} 
		return false;
	}
	 public function updateInsertClient($param=array()) {
		if($param['id_client']==null) { // insert
			$sql="INSERT INTO clienti (nume_client) values('".$param['nume_client']."')";
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		} else {// update
			$sql = "UPDATE clienti SET nume_client = '".$param['nume_client']."' WHERE id_client= ".$param['id_client'];
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		}
		}
		
	public function deleteClient($param=array()) {
      /*  $matrix_del=array();
		$sql_del="SELECT * FROM imprumuturi";
		$qry_del= mysqli_query($this->db->getConnection(), $sql_del);
		
		if (mysqli_num_rows($qry_del) > 0) {
			while($row_del = mysqli_fetch_assoc($qry_del)) {
			$matrix_del[]= $row_del['id_client'];
		}	*/
		//and !in_array($param['id_client'],$matrix_del)
		if($param['id_client']==!null ) { // set status 
			$sql = "DELETE FROM clienti  WHERE id_client= ".$param['id_client']; ;
			mysqli_query($this->db->getConnection(), $sql);
		   }else{
			   return false;
		   }
		return $param;} 
	public function getAllClients($param=array()){
		$matrix=array();
		$sql="SELECT * FROM clienti";
		$qry= mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[]= $row;
		}			
		return $matrix;
		}
		return $false;}   
//---------------methods for clients End ------------------------------------
//################### methods for Book ####################################
	public function getAllBooksAuth($param=array()){
		//get autori
		 $carti = array();
		$id=array();
		$sql3="SELECT * FROM autori  ";
		$q= mysqli_query($this->db->getConnection(), $sql3);
		if (mysqli_num_rows($q) > 0) {
		 $autori=array();
		  	while($row = mysqli_fetch_assoc($q)) {
			$autori[ $row['id_autor']]= $row['nume_autor'];
		    $id[]=$row['id_autor'];
		    }
			//return  implode(",",$id) ;
	      }
	    // get carti
		$sql="SELECT * FROM carti ";
		$qry = mysqli_query($this->db->getConnection(), $sql);
		if (mysqli_num_rows($qry) > 0) {
		$json=array();
		$matrix=array();
		$t=array();
			while($row = mysqli_fetch_assoc($qry)) {
			 $carti[$row['id_carte']]['titlu'] = $row['titlu_carte'];
			 $matrix[$row['id_carte']]['id_autori']= explode(",",$row['id_autor']);
			}
			 foreach($matrix as $k => $val){
			   foreach($val['id_autori'] as $kk => $vv){
				   $carti[$k]['id_autori'][$vv]=$autori[$vv];}}
        return $carti;}}
	public function updateInsertAutorBook($param=array()) {
		if($param['id_carte']==null) { // insert
			$sql="INSERT INTO carti (titlu_carte,id_autor,status) values('".$param['titlu_carte']."','".$param['id_autor']."',1)";
			 mysqli_query($this->db->getConnection(), $sql);
			return true;
		} else {// update
			$sql = "UPDATE carti SET titlu_carte = '".$param['titlu_carte']."',id_autor = '".$param['id_autor']."' WHERE id_carte= ".$param['id_carte'];
		    mysqli_query($this->db->getConnection(), $sql);
	    return true;}} 	
	public function deleteBook($param=array()) {
		if($param['id_carte']==!null) { // set status 
			$sql = "DELETE FROM carti WHERE id_carte= ".$param['id_carte']; ;
			mysqli_query($this->db->getConnection(), $sql);
			return true;
		   }} 
	  
//---------------methods for book End ------------------------------------
//############## methods for rent book ##################################
 public function getAllBooksForRent($param=array()){
		$matrix=array();
		$sql="SELECT * FROM carti WHERE booking = 0";
		$qry = mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[$row['id_carte']]['id']= $row['id_carte'];
			$matrix[$row['id_carte']]['text']= $row['titlu_carte'];
		}
			return	$matrix;} 
		return false;}
 public function getAllClientsForRent($param=array()){
		$matrix=array();
		$sql="SELECT * FROM clienti ";
		$qry = mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[$row['id_client']]['id']= $row['id_client'];
			$matrix[$row['id_client']]['text']= $row['nume_client'];
		}
			return	$matrix;} 
		return false;}
  public function updateInsertBookRent($param=array()) {
		if($param['id_imprumut']==null) { // insert
			$sql="INSERT INTO imprumuturi (id_client,id_carte,data_imprumut,numar_zile,status) values('".$param['id_client']."','".$param['id_carte']."','".$param['data_imprumut']."','".$param['numar_zile']."',1)";
			 mysqli_query($this->db->getConnection(), $sql);
			$sql_carte="UPDATE carti SET booking = 1 where id_carte = ".$param['id_carte'];
			mysqli_query($this->db->getConnection(), $sql_carte);
			//return $true;
		} else {// update
			$sql = "UPDATE imprumuturi SET id_client = '".$param['id_client']."',id_carte = '".$param['id_carte']."',numar_zile = '".$param['numar_zile']."',data_imprumut = '".$param['data_imprumut']."' WHERE id_imprumut= ".$param['id_imprumut'];
		    $sql_carte="UPDATE carti SET booking = 1 where id_carte = ".$param['id_carte'];
			mysqli_query($this->db->getConnection(), $sql);
			mysqli_query($this->db->getConnection(), $sql_carte);
			 if($param['id_carte_rent'] != $param['id_carte']){
				  $sql_carte_rent="UPDATE carti SET booking = 0 where id_carte = ".$param['id_carte_rent'];
				   mysqli_query($this->db->getConnection(), $sql_carte_rent);
			 }
	    return true;}} 
  public function getAllRent($param=array()){
	    //clienti
		$autoriN=array();
		$sql_autori="SELECT * FROM autori ";
		$qry_autori= mysqli_query($this->db->getConnection(), $sql_autori);
		
		if (mysqli_num_rows($qry_autori) > 0) {
			while($row_autori = mysqli_fetch_assoc($qry_autori)) {
			$autoriN[$row_autori['id_autor']]= $row_autori['nume_autor'];
		}}
		$clienti=array();
		$sql1="SELECT * FROM clienti ";
		$qry1= mysqli_query($this->db->getConnection(), $sql1);
		
		if (mysqli_num_rows($qry1) > 0) {
			while($row3 = mysqli_fetch_assoc($qry1)) {
			$clienti[$row3['id_client']]= $row3['nume_client'];
		}}
		$carti=array();
		$autor=array();
		$autori = array();
		$sql2="SELECT * FROM carti";
		$qry2= mysqli_query($this->db->getConnection(), $sql2);
		
		if (mysqli_num_rows($qry2) > 0) {
			while($row2 = mysqli_fetch_assoc($qry2)) {
			$carti[$row2['id_carte']]['titlu_carte']= $row2['titlu_carte'];
			$autori[$row2['id_carte']] = explode(",",$row2['id_autor']);
			foreach($autori[$row2['id_carte']] as $k => $val){
				$autor[$row2['id_carte']][]= $autoriN[$val];
			}
			$carti[$row2['id_carte']]['autori_carte']= implode(",", $autor[$row2['id_carte']]);
			
		}}
		$matrix=array();
		$sql="SELECT * FROM imprumuturi ";
		$qry= mysqli_query($this->db->getConnection(), $sql);
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[$row['id_imprumut']]= $row;
			$matrix[$row['id_imprumut']]['id_client_nume']       = $clienti[$row['id_client']];
			$matrix[$row['id_imprumut']]['id_carte_nume']        = $carti[$row['id_carte']]['titlu_carte'];
			$matrix[$row['id_imprumut']]['autori_carte']        = $carti[$row['id_carte']]['autori_carte'];
			$matrix[$row['id_imprumut']]['data_restituire']      = date('Y-m-d', strtotime($row['data_imprumut']. ' + '.$row['numar_zile']. ' days'));
			$matrix[$row['id_imprumut']]['termen']               = floor((time()-strtotime($matrix[$row['id_imprumut']]['data_restituire']))/ (60 * 60 * 24));;
		}			
		 return $matrix;
		//return $autor;
		}
		//return $false;
		}  
	public function getAllRentForDelete($param=array()){
		$matrix=array();
		$sql="SELECT * FROM imprumuturi";
		$qry= mysqli_query($this->db->getConnection(), $sql);
		
		if (mysqli_num_rows($qry) > 0) {
			while($row = mysqli_fetch_assoc($qry)) {
			$matrix[] = $row;
		}			
		return $matrix;
		}
		return $false;}   		
 public function deleteRentBook($param=array()) {
		if($param['id_imprumut']==!null) { // set status 
			$sql = "DELETE FROM imprumuturi  WHERE id_imprumut= ".$param['id_imprumut']; ;
			mysqli_query($this->db->getConnection(), $sql);
			$sql_carte="UPDATE carti SET booking = 0 where id_carte = ".$param['id_carte'];
			mysqli_query($this->db->getConnection(), $sql_carte);
			return true;
		   }} 
//-------------- methods for rent book end ------------------------------
}

$params=array('uri' =>'server.php');
$server = new SoapServer(NULL,$params);
$server->setClass('server');
$server->handle();
?>