<?php

    class Destination {
        
        ///////////////
        // Variables //
        ///////////////

        private int $id;
        private string $location;
        private int $price;
        private int $tourOperatorId;

        ///////////////
        // Construct //
        ///////////////

        public function __construct(array $data) {

            $this->id = $data['id'];
            $this->location = $data['location'];
            $this->price = $data['price'];
            $this->tourOperatorId = (int) $data['tourOperatorId'];
            
        }

        /////////////////////////
        // Getters and Setters //
        /////////////////////////
    
        public function getId(): int {

            return $this->id;

        }

        public function getLocation(): string {

            return $this->location;

        }

        public function getPrice(): int {

            return $this->price;

        }

        public function getTourOperatorId(): int {

            return $this->tourOperatorId;

        }

    }

?>