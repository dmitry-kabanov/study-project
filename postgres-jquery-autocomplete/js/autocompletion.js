$(document).ready(function() {
    $('#example').autocomplete({
        serviceUrl: 'autocomplete.php',
        minChars: 1,
        delimiter: /(,|;)\s*/,
        maxHeight: 400,
        width: 300,
        zIndex: 9999,
        deferRequestBy: 300
    });
});