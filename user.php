<?php
require_once('classes/user.php');
// I will be creating a username and password for array 
// My name is Paul Sola Moses
// Github - https://github.com/sonawap
// twitter - https://twitter.com/sonawap


////// array containing usernames
$username = $user->getUsernames();

///// name before the coding

echo "<h1>Usernames of some workers at DEV_TECH</h1>";

// Count the Number of Item in array
$arrlength = $user->getUsernamesLength();


///////// Show list of username

$user->showUsernames();




////// Checking if any of the name is less than is 6 letters or Greater than 8 letters

echo "<h1>List of usernames that are less than 6 letters or Greater than 8 letters</h1>";

$user->wrongUsernames();

////////////// Changing username of names less than 6 letters or Greater than 8 letters

echo "<h1>Assigning a default username to usernames less than 6 letters or Greater than 8 letters</h1>";

$user->changeUsernames();

///////////// Listing new usernames
echo "<h1>List of usernames of the workers now with Generated Pasword</h1>";

$user->newList();

