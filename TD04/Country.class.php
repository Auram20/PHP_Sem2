<?php
require_once 'MyPDO.imac-movies.include.php'; //TO DO : à modifier

/**
 * Classe Country
 */
class Country {

	/***********************ATTRIBUTS***********************/
	
	// Identifiant
	private $id = null;
	// Nom
	private $name = null;


	/*********************CONSTRUCTEURS*********************/
	
	// Constructeur non accessible
	function __construct() {}

	/**
	 * Usine pour fabriquer une instance de Genre à partir d'un id (via la bdd)
	 * @param int $id identifiant du genre à créer (bdd)
	 * @return Genre instance correspondant à $id
	 * @throws Exception s'il n'existe pas cet $id dans a bdd
	 */
	public static function createFromId($id){
		// TO DO
		 $stmt = MyPDO::getInstance()->prepare("SELECT * FROM Country WHERE id=?");
		 $stmt->execute(array($id));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Country");
		 if (($object = $stmt->fetch()) !== false)
			return $object;
		 else
			throw new Exception("ERROR");
	}

	/********************GETTERS SIMPLES********************/
	
	/**
	 * Getter sur l'identifiant
	 * @return int $id
	 */
	public function getId() {
		// TO DO
		return $this->code;

		
	}

	/**
	 * Getter sur le nom
	 * @return string $name
	 */
	public function getName() {
		// TO DO
		return $this->name;
	}

	/*******************GETTERS COMPLEXES*******************/

	/**
	 * Récupère tous les enregistrements de la table Genre de la bdd
	 * qui ont au moins un film associé au genre
	 * Tri par ordre alphabétique
	 * @return array<Genre> liste d'instances de Genre
	 */
	public static function getAll() {
		// TO DO
		
	}

}

