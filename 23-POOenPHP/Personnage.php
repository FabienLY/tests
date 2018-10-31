<?php
/**
 * Created by PhpStorm.
 * User: vistoon
 * Date: 10/26/18
 * Time: 9:14 AM
 */

class Personnage
{
    private $_force = 50;
    private $_localisation = 'Lyon';
    private $_experience = 1;
    private $_degats = 0;

    // Déclarations des constantes en rapport avec la force.

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    // Variable statique PRIVÉE.
    private static $_texteADire = 'Je vais tous vous tuer !.<br/>';

    public function __construct($force, $degats) // Constructeur demandant 2 paramètres
    {
        echo 'Voici le constructeur !.<br />'; // Message s'affichant une fois que tout objet est créé.
        $this->setForce($force); // Initialisation de la force.
        $this->setDegats($degats); // Initialisation des dégâts.
        $this->_experience = 1; // Initialisation de l'expérience à 1.
    }

    public function deplacer()
    {

    }

    public function frapper(Personnage $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    public function gagnerExperience()
    {
        // Ceci est un raccourci qui équivaut à écrire « $this->_experience = $this->_experience + 1 »
        // On aurait aussi pu écrire « $this->_experience += 1 »
        $this->_experience++;
    }

    // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
    public function degats()
    {
        return $this->_degats;
    }

    // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
    public function force()
    {
        return $this->_force;
    }

    // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
    public function experience()
    {
        return $this->_experience;
    }

    public function setForce($force)
    {
        // On vérifie qu'on nous donne bien soit une « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
        if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
        {
            $this->_force = $force;
        }
    }

    // Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience)
    {
        if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this->_experience = $experience;
    }

    // Mutateur chargé de modifier l'attribut $_degats.
    public function setDegats($degats)
    {
        if (!is_int($degats)) // S'il ne s'agit pas d'un nombre entier.
        {
            trigger_error('Le niveau de dégâts d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        $this->_degats = $degats;
    }

    // Notez que le mot-clé static peut être placé avant la visibilité de la méthode (ici c'est public).
    public static function parler()
    {
        echo self::$_texteADire; // On donne le texte à dire.
    }
}

