<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $reviewData = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message
    );

    $reviews = json_decode(file_get_contents('reviews.json'), true);

    // Add new review
    $reviews[] = $reviewData;

    // Save updated reviews to file
    file_put_contents('reviews.json', json_encode($reviews, JSON_PRETTY_PRINT));


} else {
    // Send error response if request method is not POST
    http_response_code(405);
    echo json_encode(array('error' => 'Method Not Allowed'));
}
?>
