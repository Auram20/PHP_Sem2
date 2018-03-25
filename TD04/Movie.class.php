<?php
require_once 'MyPDO.imac-movies.include.php'; 


/**
 * Classe Movie
 */
class Movie {

	/***********************ATTRIBUTS***********************/
	
	// Identifiant
	private $id = null;
	// Titre
	private $title = null;
	// Date de sortie
	private $releaseDate = null;
	//Identifiant du pays
	private $idCountry = null;

	/*********************CONSTRUCTEURS*********************/
	
	// Constructeur non accessible
	function __construct() {}

	/**
	 * Usine pour fabriquer une instance de Movie à partir d'un id (via la bdd)
	 * @param int $id identifiant du film à créer (bdd)
	 * @return Movie instance correspondant à $id
	 * @throws Exception s'il n'existe pas cet $id dans a bdd
	 */
	public static function createFromId($id){
		// TO DO
		$stmt = MyPDO::getInstance()->prepare("SELECT * FROM Movie WHERE id= :id");
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, "movie");
        if (($object = $stmt->fetch()) !== false)
            return $object;
        else
            throw new Exception("Error");
	}

	/********************GETTERS SIMPLES********************/
	
	/**
	 * Getter sur l'identifiant
	 * @return int $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Getter sur le titre
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Getter sur la date de sortie
	 * @return string $releaseDate
	 */
	public function getReleaseDate() {
		return $this->releaseDate;
	}

	/**
	 * Getter sur l'identifiant du pays
	 * @return string $idCountry
	 */
	public function getIdCountry() {
		return $this->idCountry;
	}

	/*******************GETTERS COMPLEXES*******************/

	/**
	 * Récupère tous les enregistrements de la table Movie de la bdd
	 * Tri par ordre décroissant sur la date de sortie
	 * puis par ordre alphabétique sur le titre
	 * @return array<Movie> liste d'instances de Movie
	 */
	public static function getAll() {
		$stmt = MyPDO::getInstance()->prepare("SELECT * FROM Movie ORDER BY releaseDate DESC, title ASC");
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_CLASS, "movie");
		$array = array();
		while (($object = $stmt->fetch()) !== false){
			$array[] = $object;
		}
		return $array;
	}

	/**
	 * Récupère tous les films du réalisateur/de la réalisatrice
	 * Tri par ordre décroissant sur la date de sortie
	 * puis par ordre alphabétique sur le titre sur le titre
	 * @param int $idDirector identifiant du réalisateur/de la réalisatrice
	 * @return array<Movie> liste d'instances de Movie
	 */
	public static function getFromDirectorId($idDirector){
		//TO DO next : #04 Jointure Cast - Movie
		$stmt = MyPDO::getInstance()->prepare(" SELECT * FROM Movie JOIN Director ON Movie.id = idMovie	WHERE idDirector=? ORDER BY releaseDate DESC, title ASC");
		 $stmt->execute(array($idDirector));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Movie");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("ERROR");
	}

	/**
	 * Récupère tous les films de l'act.eur.rice avec son rôle pour chaque
	 * Tri par ordre décroissant sur la date de sortie
	 * puis dans l'ordre alphabétique sur le titre
	 * @param int $idActor identifiant l'act.eur.rice
	 * @return array<Movie> liste d'instances de Movie
	 */
	public static function getFromActorId($idActor){
		// TO DO next : #04 Jointure Cast - Movie
		$stmt = MyPDO::getInstance()->prepare(" SELECT * FROM Movie JOIN Actor ON Movie.id = idMovie WHERE idActor=? ORDER BY releaseDate DESC, title ASC");
		 $stmt->execute(array($idActor));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Movie");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("ERROR");
	}

	/**
	 * Récupère les genres du film courant ($this)
	 * Tri par ordre alphabétique
	 * @return array<Genre> liste d'instances de Genre
	 */
	public function getGenres() {
		$stmt = MyPDO::getInstance()->prepare("
		 	SELECT * FROM Genre JOIN MovieGenre ON idGenre = Genre.id WHERE idMovie = ? ORDER BY name");
		 $stmt->execute(array($this->id));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Genre");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("ERROR");
	}
}
	
	

