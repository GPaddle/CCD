<?php
namespace GEG\auth;
use GEG\model\User;
class Authentification
{
    /**
     * @param $userName : nom d'utilisateur
     * @param $password : mot de passe
     * Méthode qui créer un utilisateur
     * @param $verifPassword
     * @return bool : retourne vrai si le mot de passe fait plus de 6 caractères
     */
    public static function createUser ( $userName, $password ,$verifPassword, $mail) {
        // vérifier la conformité de $password avec la police
        $username = filter_var($userName, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);
        $verifPassword = filter_var($verifPassword, FILTER_SANITIZE_STRING);
        $retour=0;
        if(strlen($password) >= 6){
            if($verifPassword == $password){
                $hash = password_hash($password,PASSWORD_BCRYPT);
                $compte = new User();
                $compte->nom = $username;
                $compte->password = $hash;
                $compte->mail=$mail;
                $compte->save();
                $_SESSION['id'] = $compte->id;
                $_SESSION['username'] = $compte->userName;
            }else{
                $retour = 1;
            }
        }else{
            $retour = 2;
        }
        return $retour;
        // si ok : hacher $password
        // créer et enregistrer l'utilisateur

    }

    /**
     * @param $username : nom d'utilisateur
     * @param $password : mot de passe
     * Méthode qui permet à l'utilisateur de s'authentifier
     * @return bool : true si le mot de passe correspond au compte
     */
    public static function authenticate ( $username, $password ) {
        // charger utilisateur $user
        $retour=false;
        $compte = User::where('name','=',$username)->first();
        // vérifier $user->hash == hash($password)
        if(password_verify($password,$compte['mdp'])){
            self::loadProfile($compte['id']);
            $retour=true;
        }
        return $retour;
        // charger profil ($user->id)

    }

    /**
     * @param $uid
     * Méthode qui permet de charger le profil de l'utilisateur
     */
    private static function loadProfile( $uid ) {
        // charger l'utilisateur et ses droits
        $compte = User::where('id','=',$uid)->first();
        // détruire la variable de session
        session_destroy();
        // créer variable de session = profil chargé
        session_start();
        $_SESSION = array( 'username' => $compte['userName'],'id' => $compte['id']);


    }
	public static function deconnexion(){
		session_destroy();
	}
    /**public static checkAccessRights ( $required ) {
    si Authentication::$profil['level'] < $required
    throw new AuthException ;
    }*/
}

