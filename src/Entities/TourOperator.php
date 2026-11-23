<?php

    class TourOperator {
        
        ///////////////
        // Construct //
        ///////////////

        public function __construct(

            private int $id,
            private string $name,
            private string $link,
            private int $gradeCount,
            private int $gradeTotal,
            private bool $isPremium

        )
        {

        }
    
    }

?>