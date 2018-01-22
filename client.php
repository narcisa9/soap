<?php

class client {
	public function __construct(){
		$params=array(
		'location'=>'http://infocafe.ro/soap/server.php',
		'uri'=>'urn://infocafe.ro/soap/server.php',
		'trace'=>1);
		$this->instance= new SoapClient(NULL,$params);
	}
	
	public function getTitle($id_array){
		return $this->instance->__soapCall('getBookTitle',$id_array);
	}
	

	// autor
	public function upinAutor($param=array()) {
	return $this->instance->__soapCall('updateInsertAutor',$param);
	}
	public function delAutor($param=array()) {
	 return $this->instance->__soapCall('deleteAutor',$param);
	}
	
	public function getAuthors($param=array()){
		return $this->instance->__soapCall('getAllAuthors',$param);
	}
	public function getAuthorsBook($param=array()){
		return $this->instance->__soapCall('getAllAuthorsBook',$param);
	}
	//client
	public function upinClient($param=array()) {
	return $this->instance->__soapCall('updateInsertClient',$param);
	}
	public function delClient($param=array()) {
	return $this->instance->__soapCall('deleteClient',$param);
	}
	public function getClients($param=array()){
		return $this->instance->__soapCall('getAllClients',$param);
	}
	//book
	public function upinAutorBook($param=array()) {
	return $this->instance->__soapCall('updateInsertAutorBook',$param);
	}
	public function getBooksAuth($param=array()){
		return $this->instance->__soapCall('getAllBooksAuth',$param);
	}
	public function delBook($param=array()) {
	return $this->instance->__soapCall('deleteBook',$param);
	}
	//rent
	public function getBooksForRent($param=array()){
		return $this->instance->__soapCall('getAllBooksForRent',$param);
	}
	public function getClientsForRent($param=array()){
		return $this->instance->__soapCall('getAllClientsForRent',$param);
	}
	public function upinBookRent($param=array()) {
	return $this->instance->__soapCall('updateInsertBookRent',$param);
	}
	public function getRent($param=array()){
		return $this->instance->__soapCall('getAllRent',$param);
	}
	public function deleteRent($param=array()){
		return $this->instance->__soapCall('deleteRentBook',$param);
	}
	public function getRentForDelete($param=array()){
		return $this->instance->__soapCall('getAllRentForDelete',$param);
	}
	
}

$client= new client;

?>