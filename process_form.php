<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Your secret key
    $secret = '6LclqSYqAAAAAMg-EE2YScca8GqMeKGoM6HXFCBM';
    
    // The response from reCAPTCHA
    $response = $_POST['g-recaptcha-response'];
    
    // The user's IP address
    $remoteip = $_SERVER['REMOTE_ADDR'];

    // URL to verify the reCAPTCHA response
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    
    // Prepare the data for the POST request
    $data = array(
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip
    );

    // Set up the HTTP context for the POST request
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    
    // Send the request and get the response
    $result = file_get_contents($url, false, $context);
    $resultJson = json_decode($result);

    // Check if reCAPTCHA was successful
    if ($resultJson->success) {
        echo 'reCAPTCHA verified successfully';
        // Process the form submission here
    } else {
        echo 'reCAPTCHA verification failed';
        // Handle the failure case here
    }
} else {
    echo 'Invalid request method.';
}
?>
