<?php

    class Manager {

        ///////////////
        // Variables //
        ///////////////
        
        private PDO $bdd;

        ///////////////
        // Construct //
        ///////////////

        public function __construct(PDO $bdd) {
            
            $this->bdd = $bdd;

        }

        //////////////////////
        // Database Methods //
        //////////////////////

        public function getAllDestination(): array {

            $request = $this->bdd->query("SELECT * FROM destination");

            $destinationDatas = $request->fetchAll(PDO::FETCH_ASSOC);

            $destinations = [];

            foreach ($destinationDatas as $destinationData) {

                $destinations[] = new Destination($destinationData);

            }

            return $destinations;

        }

        public function getOperatorByDestination(int $destinationId): array {

            $request = $this->bdd->prepare(

                "SELECT tour_operator.* FROM destination
                JOIN tour_operator ON destination.tour_operator_id = tour_operator.id
                WHERE destination.id = :destinationId"
            
            );

            $request->execute(['destinationId' => $destinationId]);

            $operatorDatas = $request->fetch(PDO::FETCH_ASSOC);

            $operators = [];

            foreach ($operatorDatas as $operatorData) {

                $operators[] = new TourOperator($operatorData);

            }
            
            return $operators;

        }

        public function createReview(Reviews $review): void {

            $request = $this->bdd->prepare(

                "INSERT INTO review (message, author, tour_operator_id)
                Values              (:message, :author, :tourOperatorId)"
                
            );
            $request->execute([

                'message' => $review->getMessage(), 
                'author' => $review->getAuthor(), 
                'tourOperatorId' => $review->getTourOperatorId()

            ]);

        }

        public function getReviewByOperatorId(int $operatorId): array {

            $request = $this->bdd->prepare(

                "SELECT review.* FROM review
                JOIN tour_operator ON review.tour_operator_id = tour_operator.id
                WHERE tour_operator.id = :operatorId"
                
            );

            $request->execute(['operatorId' => $operatorId]);

            $reviewDatas = $request->fetchAll(PDO::FETCH_ASSOC);

            $reviews = [];

            foreach ($reviewDatas as $reviewData) {

                $reviews[] = new Reviews($reviewData);

            }
            
            return $reviews;

        }

        public function getAllOperator(): array {

            $request = $this->bdd->query("SELECT * FROM tour_operator");

            $operatorDatas = $request->fetchAll(PDO::FETCH_ASSOC);

            $operators = [];

            foreach ($operatorDatas as $operatorData) {

                $operators[] = new TourOperator($operatorData);

            }

            return $operators;

        }

        public function updateOperatorToPremium(int $operatorId): void {

            $request = $this->bdd->prepare("UPDATE tour_operator SET is_premium = 1 WHERE id = :id");
            $request->execute(['id' => $operatorId]);

        }

        public function createTourOperator(TourOperator $tourOperator): void {

            $request = $this->bdd->prepare(

                "INSERT INTO tour_operator (name, link, grade_count, grade_total, is_premium)
                Values                     (:name, :link, :grade_count, :grade_total, :is_premium)"

            );
            $request->execute([

                'name' => $tourOperator->getName(), 
                'link' => $tourOperator->getLink(), 
                'grade_count' => $tourOperator->getGradeCount(),
                'grade_total' => $tourOperator->getGradeTotal(),
                'is_premium' => (int) $tourOperator->getIsPremium()

            ]);

        }

        public function createDestination(Destination $destination): void {

            $request = $this->bdd->prepare(
                
                "INSERT INTO destination (location, price, tour_operator_id)
                Values                   (:location, :price, :tour_operator_id)"
                
            );
            $request->execute([

                'location' => $destination->getLocation(), 
                'price' => $destination->getPrice(), 
                'tour_operator_id' => $destination->getTourOperatorId()

            ]);

        }
            public function getLowestPricesByOperator(): array {

            $request = $this->bdd->query(

                "SELECT tour_operator_id, MIN(price)
                FROM destination
                GROUP BY tour_operator_id"

            );

            $prices = $request->fetchAll(PDO::FETCH_KEY_PAIR);

            return $prices;

        }

        public function getOperatorsByLocation(string $location): array {

            $request = $this->bdd->prepare(

                "SELECT DISTINCT tour_operator.*
                FROM tour_operator
                JOIN destination
                ON tour_operator.id = destination.tour_operator_id
                WHERE destination.location = :location"

            );

            $request->execute(['location' => $location]);

            $operatorDatas = $request->fetchAll(PDO::FETCH_ASSOC);

            $operators = [];

            foreach ($operatorDatas as $operatorData) {

                $operators[] = new TourOperator($operatorData);

            }

            return $operators;

        }

        public function getPricesByLocation(string $location): array {

            $request = $this->bdd->prepare(

                "SELECT tour_operator_id, MIN(price)
                FROM destination
                WHERE location = :location
                GROUP BY tour_operator_id"

            );

            $request->execute(['location' => $location]);

            return $request->fetchAll(PDO::FETCH_KEY_PAIR);

        }
        
        public function hasAlreadyReviewed(string $author, int $operatorId): bool {

            $request = $this->bdd->prepare(

                "SELECT id
                FROM review
                WHERE author = :author
                AND tour_operator_id = :operatorId
                LIMIT 1"

            );

            $request->execute([

                'author' => $author,
                'operatorId' => $operatorId

            ]);

            return $request->fetch() !== false;

        }

                public function addGrade(int $operatorId, int $grade): void {

            $request = $this->bdd->prepare("
                UPDATE tour_operator
                SET grade_count = grade_count + 1,
                    grade_total = grade_total + :grade
                WHERE id = :id
            ");

            $request->execute([
                'grade' => $grade,
                'id' => $operatorId
            ]);

        }
    
    }

?>