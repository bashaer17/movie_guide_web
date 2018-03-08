<?php
    // After initialize the class
    // First request a token from API
    $token = $tmdb->getAuthToken();
?>
<?php
	// Request valid session for that particular user from API
	$session = $tmdb->getAuthSession();
?>