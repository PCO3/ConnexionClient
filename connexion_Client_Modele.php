<?php

class Connexion_Client_Modele extends CI_Model
{

	//fonction pour lier les données de connexion à la base de données
	public function userLogin($pseudo, $password)
	{
		return $this->db->select('NomClient')
						->from('clientzodiac')
						->where('NomClient', $pseudo)
						->where('Password',$password)
						->limit(1)
						->get()
						->result();
	}
}

?>