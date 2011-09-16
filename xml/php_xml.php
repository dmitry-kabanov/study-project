<html>
<head>
    <title>XML-функции PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="<?php print $_SERVER['PHP_SELF'] ?>"
    <input type="hidden" name="posted" value="true">
    <table border="1" cellpadding="10">
        <tr>
            <td>
                <h2>Использование XML-средств PHP</h2>
            </td>
        </tr>
<?php
if (isset($_POST['posted'])) {
    $cmdButton = $_POST['cmdButton'];
    $root_element_name = $_POST['root_element_name'];
    $element01_name = $_POST['element01_name'];

}
