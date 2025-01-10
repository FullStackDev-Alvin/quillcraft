<?php
session_start();
 // Start the session
$_SESSION = array();  // Clear session variables

// Delete the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// Destroy the session
session_destroy();
header("location:./login.php");
?>