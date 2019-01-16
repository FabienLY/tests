<?php

namespace OpenClassrooms\Blog\Model2;

require_once("model/Manager.php");

class AccountManager extends Manager
{
	public function req_insert_member($pseudo_apply, $pass_apply, $email_apply)
	{
		$db = $this->db_connect();

		$req_insert_member = $db->prepare('
			INSERT INTO members (pseudo, pass, email) 
			VALUES (:pseudo_apply, :pass_apply, :email_apply)
			');
		$req_insert_member->bindParam(':pseudo_apply', $pseudo_apply, \PDO::PARAM_INT);
		$req_insert_member->bindParam(':pass_apply', $pass_apply, \PDO::PARAM_INT);
		$req_insert_member->bindParam(':email_apply', $email_apply, \PDO::PARAM_INT);
		$req_insert_member->execute() or die(print_r($req_insert_member->errorInfo(), TRUE));

		return $req_insert_member ;
	}

	public function req_pseudo_check($pseudo_apply)
	{
		$db = $this->db_connect();

		$req_pseudo_check = $db->prepare('
			SELECT COUNT(*) as pseudo_count
			FROM members
			WHERE pseudo = :pseudo_apply
			');
		$req_pseudo_check->bindParam(':pseudo_apply', $pseudo_apply, \PDO::PARAM_INT);
		$req_pseudo_check->execute() or die(print_r($req_pseudo_check->errorInfo(), TRUE));

		$data_req_pseudo_check = $req_pseudo_check->fetch();

		return $data_req_pseudo_check ;
	}

	public function req_login_check($pseudo)
	{
		$db = $this->db_connect();

		$req_login_check = $db->prepare('
			SELECT id, pseudo, pass
			FROM members
			WHERE pseudo = :pseudo
			');
		$req_login_check->bindParam(':pseudo', $pseudo, \PDO::PARAM_INT);
		$req_login_check->execute() or die(print_r($req_login_check->errorInfo(), TRUE));

		$data_req_login_check = $req_login_check->fetch();

		return $data_req_login_check ;
	}

	public function req_cookie_check($cookie_pseudo)
	{
		$db = $this->db_connect();

		$req_cookie_check = $db->prepare('
			SELECT COUNT(*) as cookie_exists
			FROM members
			WHERE pseudo = :cookie_pseudo
			');
		$req_cookie_check->bindParam(':cookie_pseudo', $cookie_pseudo, \PDO::PARAM_INT);
		$req_cookie_check->execute() or die(print_r($req_cookie_check->errorInfo(), TRUE));

		$req_cookie_check = $req_cookie_check->fetch();

		return $req_cookie_check ;
	}





}