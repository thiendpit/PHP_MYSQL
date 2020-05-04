<?php 
    
    $dayofweek = date('w');
    switch ($dayofweek) {
        case 1:
            echo "Thu hai";
            break;
        case 2:
            echo "Thu ba";
            break;
        case 3:
            echo "Thu tu";
            break;
        case 4:
            echo "Thu nam";
            break;
        case 5:
            echo "Thu sau";
            break;
        case 6:
            echo "Thu bay";
            break;
        default:
            echo "Chu nhat";
            break;
    }

?>