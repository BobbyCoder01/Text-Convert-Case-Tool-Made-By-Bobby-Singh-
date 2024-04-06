function convertToUpperCase() {
    convertText('upperCase');
}

function convertToLowerCase() {
    convertText('lowerCase');
}

function convertToTitleCase() {
    convertText('titleCase');
}

function convertToSentenceCase() {
    convertText('sentenceCase');
}

function convertToCapitalizeCase() {
    convertText('capitalizeCase');
}

function convertToInvertCase() {
    convertText('invertCase');
}

function convertText(convertType) {
    var inputText = document.getElementById('inputText').value;
    if (inputText.trim() !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'converter.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);
                document.getElementById('outputText').value = response[convertType];
                // Success message using SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Text converted successfully!',
                });
            }
        };
        var params = 'inputText=' + encodeURIComponent(inputText);
        xhr.send(params);
    } else {
        // Error message using SweetAlert2
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please enter some text!',
        });
    }
}
function copyToClipboard() {
    var outputText = document.getElementById('outputText');
    if (outputText.value.trim() !== '') { // Check if input box is not empty
        outputText.select();
        document.execCommand('copy');
        // Success message using SweetAlert2
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Text copied to clipboard!',
        });
    }
}


// function copyToClipboard() {
//     var outputText = document.getElementById('outputText');
//     outputText.select();
//     document.execCommand('copy');
//     // Success message using SweetAlert2
//     Swal.fire({
//         icon: 'success',
//         title: 'Copied!',
//         text: 'Text copied to clipboard!',
//     });
// }
