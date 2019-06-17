<?php 
session_start();
require("functions.php");
// unset any session variables
        session_unset();
        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();

    redirect("/admin");

?>