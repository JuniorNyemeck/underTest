<?php

    namespace App\Chat;

    class Chat
    {

        protected $type;

        protected $ephemeral;
    }

    trait message
    {
        public $contentText;

        public $dateOfMessage;

    }

    trait User
    {
        public $name;

        public $identify;
    }
    
    

?>