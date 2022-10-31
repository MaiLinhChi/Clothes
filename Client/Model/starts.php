<?php
    class Start {
        // properties

        // contructor
        function __construct()
        {
            
        }

        // methods
        function averaged() {
            $db = new connect();

            $query = "SELECT mahh, ROUND(AVG(rating), 2) AVG FROM rating GROUP BY mahh";
            $result = $db->getListItems($query);

            $average = [];
            
            while($rating = $result->fetch())
            {
                $average[$rating["mahh"]] = $rating["AVG"];
            }

            return $average;
        }

        function getRating($username, $mahh) {
            $db = new connect();

            $query = "SELECT rating FROM rating WHERE username = '$username' AND mahh = $mahh";

            $result = $db->getItem($query);

            return $result;
        }

        function updateRating($productid, $username, $numberstar) {
            $db = new connect();

            $query = "REPLACE INTO rating(mahh, username, rating) VALUE(?,?,?)";
            $stm = $db->getPrepare($query);
            $stm->execute([$productid, $username, $numberstar]);
        }
    }
?>