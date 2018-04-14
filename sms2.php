<?php
require 'Clockwork.php';
require 'ClockworkException.php';
 $options = array( 'ssl' => false );

 $apikey="30711cb506d4bc75767f1c66aaf89379aa940a3b";
$clockwork = new mediaburst\ClockworkSMS\Clockwork(  $apikey ,$options ); //Be careful not to post your API Keys to public repositories.
$message = array( 'to' => '+918281526518', 'message' => 'This is a test!' );
$result = $clockwork->send( $message );

 
?>