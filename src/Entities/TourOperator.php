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
            $this->gradeCount = $data['grade_count'];
            $this->gradeTotal = $data['grade_total'];
            $this->isPremium = $data['is_premium'];

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

        /////////////
        // Methods //
        /////////////

        public function getAverageGrade(): float {

            if ($this->gradeCount == 0) {
                return 0;
            }

            return $this->gradeTotal / $this->gradeCount;

        }

        public function getStars(): string {

            $average = round($this->getAverageGrade());

            $stars = "";

            for ($i = 1; $i <= 5; $i++) {

                if ($i <= $average) {
                    $stars .= "★";
                } else {
                    $stars .= "☆";
                }

            }

            return $stars;

        }

    }

?>