<?php 

namespace App\Services;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FirebaseService {

    private $session;
    private $apiKey; 
    private $authDomain;
    private $databaseURL; 
    private $projectId;
    private $storageBucket;

    public function __construct(SessionInterface $session)
    {
        $this->session;
        $this->apiKey = $_ENV['APIKEY'];
        $this->authDomain = $_ENV['AUTHDOMAIN'];
        $this->databaseURL = $_ENV['DATABASEURL'];
        $this->projectId = $_ENV['PROJECTID'];
        $this->storageBucket = $_ENV['STORAGEBUCKET'];
    }

    public function firebaseConfing () 
    {
        
    }
}