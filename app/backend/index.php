<?php
require_once('./classes/DBConnection.php');
require_once('./classes/EventDetailDaywise.php');
require_once('./classes/EventDS.php');
require_once('./classes/Event.php');
require_once('./classes/User.php');
//require_once('./classes/Admin.php');

$reqJSON = json_decode(file_get_contents("php://input") , false);
$response  = "";
$event = new Event();
$user = new User();
$event->createConnection();

//get event handler 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'getEvent') {

	$response = $event->getEvent($reqJSON->data->eventID);
	echo json_encode($response);
	
}
//create User Accout 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'createUserAccount') {
    echo "create User Account";
	echo $reqJSON->data->firstName;
	$user->createUserAccount($reqJSON->data);
}
//create Event request handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'createEvent') {
    echo "create event handler";
}
//modify Event handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'modifyEvent') {
    echo "modify event handler";
}

//delete Event handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'deleteEvent') {
    echo "delete event handler";
}

//approve Event by admin handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'acceptEvent') {
    echo "approve event handler";
}

//reject Event by Admin handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'rejectEvent') {
    echo "reject event handler";
}
//pending Event by Admin handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'pendingEvent') {
    echo "pending event handler";
}
//search Event handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'searchEvent') {
    echo "search event handler";
}
//authenticate Username and password
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'verfiyUserAccount') {
    echo "verify username and password";
}
//send status email to create handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'sendStatusEmailToCreater') {
    echo "sendStatusEmailToCreater";
}
//get all events according to status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'getManyEvents') {
    
	$response = $event->getManyEvents($reqJSON->data->status,"");
	echo json_encode($response);
}

//subscribe to emails handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $reqJSON->_action == 'subscribeToEmails') {
    echo "subscribe";
}

$event->closeConnection();

?>