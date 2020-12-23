<?php
require_once(LIB_PATH.DS.'database.php');
 class Lesson {
	protected static  $tblname = "tbllesson";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}
	function listoflesson(){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname);
		return $cur;
	}
	function find_lesson($id="",$chapter=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE LessonID = {$id} OR LessonChapter = '{$chapter}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	} 

	function find_all_lesson($chapter=""){
		global $mydb;
		$mydb->setQuery("SELECT * FROM ".self::$tblname." 
			WHERE LessonChapter = '{$chapter}'");
		$cur = $mydb->executeQuery();
		$row_count = $mydb->num_rows($cur);
		return $row_count;
	}
	 
	function single_lesson($id=0){
			global $mydb;
			$mydb->setQuery("SELECT * FROM ".self::$tblname." 
				Where LessonID= '{$id}' LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	}

	 
	static function instantiate($record) {
		$object = new self;

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		} 
		return $object;
	}
	
	
	
	private function has_attribute($attribute) {
	
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
	
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	
	
	public function save() {
	
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $mydb;
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update($id=0) {
	  global $mydb;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE LessonID=". $id;
	  $mydb->setQuery($sql);
	 	if(!$mydb->executeQuery()) return false; 	
		
	}

	public function delete($id=0) {
		global $mydb;
		  $sql = "DELETE FROM ".self::$tblname;
		  $sql .= " WHERE LessonID=". $id;
		  $sql .= " LIMIT 1 ";
		  $mydb->setQuery($sql);
		  
			if(!$mydb->executeQuery()) return false; 	
	
	}	


}
?>