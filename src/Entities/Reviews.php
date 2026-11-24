<?php

    class Reviews {
        
        ///////////////
        // Variables //
        ///////////////

        private int $id;
        private string $message;
        private string $author;
        private int $tourOperatorId;

        ///////////////
        // Construct //
        ///////////////

        public function __construct(array $data) {

            $this->id = $data['id'];
            $this->message = $data['message'];
            $this->author = $data['author'];
            $this->tourOperatorId = $data['tourOperatorId'];
            
        }
    
        /////////////////////////
        // Getters and Setters //
        /////////////////////////

        public function getId(): int {

            return $this->id;

        }

        public function getMessage(): string {

            return $this->message;

        }

        public function getAuthor(): string {

            return $this->author;

        }

        public function getTourOperatorId(): int {

            return $this->tourOperatorId;

        }

    }

?>