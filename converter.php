<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputText = $_POST['inputText'];

    // Convert text to uppercase
    $outputTextUpperCase = strtoupper($inputText);

    // Convert text to lowercase
    $outputTextLowerCase = strtolower($inputText);

    // Convert text to title case
    $outputTextTitleCase = ucwords(strtolower($inputText));

    // Convert text to sentence case
    $outputTextSentenceCase = ucfirst(strtolower($inputText));

    // Convert text to capitalize case
    $outputTextCapitalizeCase = ucwords($inputText);

    // Convert text to invert case
    $outputTextInvertCase = invertCase($inputText);

    // Return the converted texts as JSON
    $output = [
        'upperCase' => $outputTextUpperCase,
        'lowerCase' => $outputTextLowerCase,
        'titleCase' => $outputTextTitleCase,
        'sentenceCase' => $outputTextSentenceCase,
        'capitalizeCase' => $outputTextCapitalizeCase,
        'invertCase' => $outputTextInvertCase
    ];
    echo json_encode($output);
} else {
    // Method not allowed
    http_response_code(405);
    echo "Method Not Allowed";
}

// Function to invert case of each character
function invertCase($text) {
    $invertedText = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_upper($char)) {
            $invertedText .= strtolower($char);
        } elseif (ctype_lower($char)) {
            $invertedText .= strtoupper($char);
        } else {
            $invertedText .= $char;
        }
    }
    return $invertedText;
}
?>
