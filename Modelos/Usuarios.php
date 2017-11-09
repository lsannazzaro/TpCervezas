<?php namespace Modelos;

class Usuarios {

	private $id;
	private $username;
	private $email;
	private $pass;
	private $rol;


	public function __construct($user=' ',$mail= ' ',$pass= ' ',$rol ' '){

			$this->usename = $user;
			$this->email = $email;
			$this->pass = $pass;
			$this->rol = $rol;


	}


	//GETTER

	public function getId(){

		return $this->id;
	}

	public function getUser(){

		return $this->username;
	}

	public function getEmail(){

		return $this->email;
	}

	public function getPass(){

		return $this->pass;
	}

	public function getRol(){

		return $this->rol;
	}

	//SETTER

	public function setId($id){

		$this->id = $id;
	}
public function setUser($user){

		$this->username = $user ;
	}
	public function setEmail($email){

		$this->email = $email;
	}
	public function setPass($pass){

		$this->pass = $pass;
	}
	public function setRol($rol){

		$this->rol = $rol ;
	}

}