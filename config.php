<?php

// require_once 'database/connection.php';

define('BASE_URL', '/hotel-booking');
// define('YOGA_TYPE',['Hatha yoga',
//                     'Ashtanga yoga',
//                     'Vinyasa yoga',
//                     'Iyengar yoga',
//                     'Yin yoga',
//                     'Kundalini yoga',
//                     'Bikram yoga',
//                     'Power yoga',]);

function url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}


function message()
{
    if (isset($_SESSION['error'])) {
        echo '<div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
      ' . htmlspecialchars($_SESSION['error']) . '
    </div>';
        unset($_SESSION['error']); // Clear the message after displaying it
    } 

    if (isset($_SESSION['success'])) {
        echo '<div class="alert-success">
      <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
      ' . htmlspecialchars($_SESSION['success']) . '
    </div>';
        unset($_SESSION['success']); // Clear the message after displaying it
    } 
}

function countYoga()
{
  
}

?>
