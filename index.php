<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert text | Text Convert Case | Convert upper case to lower case, lower case to upper case and Capitalized
        Case To small Case </title>
    <meta name="description"
        content="Easily convert text between different letter cases: lower case, UPPER CASE, Sentence case, Capitalized Case, aLtErNaTiNg cAsE and more online.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Text Case Converter </h1>
        <textarea id="inputText" placeholder="Enter text..."></textarea>
        <div class="buttons">
            <button class="UPPERCASE" onclick="convertToUpperCase()">UPPERCASE</button>
            <button class="lowercase" onclick="convertToLowerCase()">lowercase</button>
            <button class="Title" onclick="convertToTitleCase()">Title Case</button>
            <button class="Sentence" onclick="convertToSentenceCase()">Sentence Case</button>
            <button class="Capitalize" onclick="convertToCapitalizeCase()">Capitalize Case</button>
            <button class="Invert" onclick="convertToInvertCase()">Invert Case</button>
        </div>
        <br>
        <textarea id="outputText" placeholder="Converted text will appear here..." readonly></textarea>
        <button id="copyButton" onclick="copyToClipboard()">Copy to Clipboard</button>
    </div>
    <!-- Footer -->
    <footer>
        <p> Copyright © 2024 Eleven Coder All Rights Reserved By &nbsp; <span
                class="material-symbols-outlined">favorite</span>
            &nbsp; <a class="bobby" target="__blank" href="https://www.linkedin.com/in/bobbycoder01/"> Bobby Singh </a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/index.js"></script>
</body>

</html>