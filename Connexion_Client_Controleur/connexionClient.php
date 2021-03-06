<?php


class ConnexionClient extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//connexion à la base de données par défaut dans la config (testcode)

		$this ->load -> database();

		//connexion client 
		$this->connexion();
	}



		public function connexion()
		{
			//	Chargement de la bibliothèque

			$this->load->library('form_validation');
			$this -> load -> model('connexion_Client_Modele');
			

			// mise en place des règles

			$this->form_validation->set_rules('pseudo', 'Nom d\'utilisateur', 'trim|required|min_length[5]|max_length[20]|alpha_dash','pseudo requis');
    		$this->form_validation->set_rules('password', 'mot de passe','required', 'mot de passe requis');

    		//Récupération des données du formulaire

    		$pseudo=$this->input->get_post('pseudo');
    		$password= $this->input->get_post('password');

    		$result = $this -> connexion_Client_Modele -> userlogin($pseudo, $password);
    		

    		//Validation du formulaire 

			if($this->form_validation->run()== FALSE )
			{
				//	Le formulaire est invalide ou vide
				$this->load->view('Base_HTML/Header');
           		$this->load->view('Connexion_Client/Formulaire');
           		$this->load->view('Base_HTML/Footer');
			
				
				
			}
			elseif($this->form_validation->run() AND empty($result))
			{

				//	Le formulaire est valide, mais informations incorrectes
				$this->load->view('Base_HTML/Header');
           			$this->load->view('Connexion_Client/formulaireErreur');
           			$this->load->view('Base_HTML/Footer');

           			$this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');

			}
			else{

				//Le formulaire est correct ainsi que l'identifiant/mdp, on va donc à la page suivante
				$this->load->view('Base_HTML/Header');
				$this->load->view('/Avancement_Client/Formulaire_Commande');
				$this->load->view('Base_HTML/Footer');
				$this->session->set_userdata('NomClient', $result[0]->NomClient);
			}

		}


		
	}
?>
