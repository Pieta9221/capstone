
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../.././sign.php"); // Redirecting To Home Page
}
?>
