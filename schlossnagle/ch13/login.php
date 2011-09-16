<?php
require_once 'autoload.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$uri = isset($_GET['originating_uri']) ? $_GET['originating_uri'] : '';

if (!$uri)
{
    $uri = '/';
}

try {
    $userid = Authentication::checkCredentials($name, $password);
    $cookie = new Cookie($userid);
    $cookie->set();
    header("Location: $uri");
    exit;
}
catch (AuthException $e) {
?>
<html>
<title>Entering</title>
<body>
<form name="login" method="post">
User name: <input type="text" name="name"><br>
Password: <input type="password" name="password"><br>
<input type="hidden" name="originating_uri" value="<?php echo $_GET['originating_uri'] ?>">
<input type="submit" name="submitted" value="Login"> 
</form>
</body>
</html>
<?php
}
