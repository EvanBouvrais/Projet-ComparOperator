<?php

    class Reviews {
        
        ///////////////
        // Construct //
        ///////////////

        public function __construct(

            private int $id,
            private string $message,
            private string $author,
            private int $tourOperatorId

        )
        {

        }
    
    }

?>