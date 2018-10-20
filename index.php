<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . "/echocash/db.php";

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;

$options = array (
  #make array options here for each form we enter
  #ex 'signup' => 'signup'
  'signup' => 'signup',
  'login' => 'login',
  'logout' => 'logout'
);

if (array_key_exists($action, $options)) {
    $function = $options[$action];
    call_user_func($function);
} else {
    header("Location: dashboard.php");
}

function signup() {
  #set session, client id, and direct them to the dashboard.
  #make a new record in the database (include a HereDoc and stuff like that)
}


function login() {
  #same as signup, but don't make a new record in the database
}

function logout() {
  #unset session
}


include_once $_SERVER['DOCUMENT_ROOT'] . '/echocash/tpl/app_footer.php';
?>
