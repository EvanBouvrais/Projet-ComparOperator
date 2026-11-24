<?php

    class TourOperator {

        ///////////////
        // Variables //
        ///////////////
        
        private int $id;
        private string $name;
        private string $link;
        private int $gradeCount;
        private int $gradeTotal;
        private bool $isPremium;

        ///////////////
        // Construct //
        ///////////////
            
        public function __construct(array $data) {
            
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->link = $data['link'];
            $this->gradeCount = $data['gradeCount'];
            $this->gradeTotal = $data['gradeTotal'];
            $this->isPremium = $data['isPremium'];

        }
    
        /////////////////////////
        // Getters and Setters //
        /////////////////////////

        public function getId(): int {

            return $this->id;

        }

        public function getName(): string {

            return $this->name;

        }

        public function getLink(): string {

            return $this->link;

        }

        public function getGradeCount(): int {

            return $this->gradeCount;

        }

        public function getGradeTotal(): int {

            return $this->gradeTotal;

        }

        public function getIsPremium(): bool {

            return $this->isPremium;

        }

    }

?>