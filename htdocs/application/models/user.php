<?php

	class User extends CI_Model {

	    private $idNumber;
	    private $password;
	    private $firstName;
	    private $lastName;
	    private $email;

	    public function getIdNumber() {
	        return $this->idNumber;
	    }

	    public function setIdNumber($idNumber) {
	        $this->idNumber = $idNumber;
	    }

	    public function setPassword($password){
	    	$this->password = $password;
	    }

	    public function getFirstName(){
	    	return $this->firstName;
	    }

	    public function setFirstName($firstName){
	    	$this->firstName = $firstName;
	    }

	    public function getLastName(){
	    	return $this->lastName;
	    }

	    public function setLastName($lastName){
	    	$this->lastName = $lastName;
	    }

	    public function getEmail(){
	    	return $this->email;
	    }

	    public function setEmail($email){
	    	$this->email = $email;
	    }

	}

?>