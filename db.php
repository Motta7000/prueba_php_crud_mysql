
<?php
$conn = mysqli_connect (
    'localhost:3307',
    'root',
    '',
    'php_mysql_crud'
);

if (isset($conn)){
    echo 'DB is connected';
}

?>