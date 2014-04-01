<?php

class User_Model extends CI_Model{

	
	public function getUserInfo($idnumber, $password){
	   $this->db->select('idnumber, password, firstname, lastname, type');
	   $this->db->from('user');
	   $this->db->where('idnumber', $idnumber);
	   $this->db->where('password', $password);
	   $this->db->limit(1);

	   $query = $this->db->get();
	   if($query->num_rows() == 1)
	   {
	   	return $query->row();
	   }
	   else
	   	return false;
	 
	 }

	 public function getUserInfo2($idnumber){
	   $this->db->select('idnumber, firstname, lastname, email');
	   $this->db->from('user');
	   $this->db->where('idnumber', $idnumber);
	   $this->db->limit(1);

	   $query = $this->db->get();
	   if($query->num_rows() == 1)
	   {
	   	return $query->row();
	   }
	   else
	   	return false;
	 
	 }

	 public function register($inputs){
	 	$checkFlags = $this->checkExist($inputs['idnum'], $inputs['email']);
	 	
	 	if (strpos($inputs['email'],'_') != false) 
   		 $type = 1;
   		 else
   		 $type = 2;

		if($checkFlags['idnum_exist'] == 1 || $checkFlags['email_exist'] == 1)
			return $checkFlags;
		$queryStr = 'INSERT INTO user VALUES(?,?,?,?,?,?)';
		$insertResult = $this->db->query($queryStr, array($inputs['idnum'], $inputs['password'], $inputs['firstname'], $inputs['lastname'], $inputs['email'], $type)); 
	
		return $insertResult;

	 }

	private function checkExist($idnum, $email){
		$queryStr = 'SELECT (SELECT COUNT(idnumber) FROM user WHERE idnumber = ?) as idnumber, (SELECT COUNT(idnumber) FROM user WHERE email = ?) as email';
		$query = $this->db->query($queryStr, array($idnum, $email));
		$queryResult = $query->row();
		$checkFlags = array('idnum_exist'=>$queryResult->idnumber, 'email_exist'=>$queryResult->email);
		
		return $checkFlags;
	}

}
?>