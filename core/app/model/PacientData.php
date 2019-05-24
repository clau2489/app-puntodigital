<?php
class PacientData {
	public static $tablename = "pacient";
	public function PacientData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (
		 
		lastname, 
		name, 
		document, 
		gender, 
		day_of_birth, 
		address, 
		neigh, 
		city, 
		email, 
		phone, 
		whatsapp,
		coverage_id, 
		fb, 
		ig, 
		lk, 
		created_at) ";
		$sql .= "value (
		
		\"$this->lastname\",
		\"$this->name\",
		\"$this->document\",
		\"$this->gender\",
		\"$this->day_of_birth\",
		\"$this->address\",
		\"$this->neigh\",
		\"$this->city\",
		\"$this->email\",
		\"$this->phone\",
		\"$this->whatsapp\",
		\"$this->coverage_id\",
		\"$this->fb\",
		\"$this->ig\",
		\"$this->lk\",
		$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PacientData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set 
		coverage_id=\"$this->coverage_id\",		
		lastname=\"$this->lastname\",
		name=\"$this->name\",
		document=\"$this->document\",
		gender=\"$this->gender\",
		day_of_birth=\"$this->day_of_birth\",
		neigh=\"$this->neigh\",
		address=\"$this->address\",
		city=\"$this->city\",
		email=\"$this->email\",
		phone=\"$this->phone\",
		whatsapp=\"$this->whatsapp\",
		fb=\"$this->fb\",
		ig=\"$this->ig\",
		lk=\"$this->lk\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PacientData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by lastname asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public static function getBySQL($sql){
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}

	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientData());
	}


}

?>