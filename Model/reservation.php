<?php
	class reservation{
		private int $id;
		private string $nom_c;
		private string $date_reserv;
		private int $numero;
		private int $id_evn;
		
		
		
		function __construct($id, $nom_c,$date_reserv, $numero,$id_evn){
			$this->id=$id;
			$this->nom_c=$nom_c;
			$this->date_reserv=$date_reserv;
			$this->numero=$numero;
			$this->id_evn=$id_evn;
		}
		function getid(){
			return $this->id;
		}
		function getnom_c(){
			return $this->nom_c;
		}
		function getdate_reserv(){
			return $this->date_reserv;
		}
		function getnumero(){
			return $this->numero;
		}
		function getid_evn(){
			return $this->id_evn;
		}
		
		function setid(string $id){
			$this->id=$id;
		}
		function setnom_c(string $nom_c){
			$this->nom_c=$nom_c;
		}
		function setdate_reserv(string $date_reserv){
			$this->date_reserv=$date_reserv;
		}
		function setnumero(string $numero){
			$this->numero=$numero;
		}
		
	}


?>