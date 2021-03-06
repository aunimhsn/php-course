<?php

class Environment {

    /**
     * $time (in hour, 0 to 23) 
     * 
     */
    static public function get_weather($time)  {
        if ($time <= 12)
            echo "It's cloudy";

        if ($time > 12)
            echo "It's sunny"; 

        if ($time >= 24)
            echo "Please enter a time between 0 and 23 "; 
    }

}

?>