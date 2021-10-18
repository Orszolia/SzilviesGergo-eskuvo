<?php
// Always start this first
session_start();

if ( ! empty( $_POST ) ) {
    
    if ( $_POST['pwd'] == '20210910' ) {
        // Getting submitted user data from database
        $_SESSION['pwd'] = '20210910';
        
    }
    else{
        echo 'A jelszó nem megfelelő';
    }
}


if(isset($_SESSION['pwd'])){
    echo 'true';
}

?>