<?php

    class Destination {
        
        ///////////////
        // Construct //
        ///////////////

        public function __construct(

            private int $id,
            private string $location,
            private int $price,
            private int $tourOperatorId

        )
        {

        }
    
    }

?>