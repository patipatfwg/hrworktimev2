<?php

session_start();

function checkLogin() 
{
    if( isset($_SESSION["login_status"]) )
    {
        header( "location: main.php" );
        exit(0);    
    }
    else
    {
        if($_GET["menu"]=="login")
        {
            // header( "location: main.php?res=0" );
            echo "Hi";
        }

    }

     
}

?>