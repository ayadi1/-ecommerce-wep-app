<h1>admin login</h1>
<?php  
require_once 'functions/admin.php';
admin::login('ayadi@ayadi.com','d');

echo admin::$errorMgs;

?>
