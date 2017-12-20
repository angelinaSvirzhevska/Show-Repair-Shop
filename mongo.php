<?php;
$mongo = new MongoClient();
?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$exe = array( 
    "name" => $name,
    "email" => $email,
    "message" => $message
);

$collection= $mongo-> Otzyvy-> otzyvy;
$collection->insert($exe);
if( $collection == true)
{
    
     echo "<html><head><meta http-equiv = 'Refresh' content = '0; URL = http://www/contacts.html'></head></html>"; 
   
    
}
 else
    {
        
       echo "error";
    }
?>
