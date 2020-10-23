<?php

/**
 * 
 Declaring the User class
 */
class User
{
	public $username = ['sonawap', 'lanresam', 'kayye', 'aybliss', 'toppy'];

	public $password = ['son', 'lan', 'kay', 'ayb', 'top'];

	/////// return array list of users
	public function getUsernames(){
		return $this->username;
	}


	///// return array list length
	public function getUsernamesLength(){
		return count($this->username);
	}

	public function usernameAndPassword(){


		////// display array of Names
		echo "<h1>Usernames of some workers at DEV_TECH</h1>";
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {
		    echo "<ul><li>".$this->getUsernames()[$x] ." </li></ul>";
		}
	
		// ////// Checking if any of the name is less than is 6 letters or Greater than 8 letters

		echo "<h1>List of usernames that are less than 6 letters or Greater than 8 letters</h1>";
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {

			//////// get only name that is less than 6 is letters or Greater than 8
			if (strlen($this->getUsernames()[$x]) < 6 || strlen($this->getUsernames()[$x]) > 8 ) {
				echo "<b>".$this->getUsernames()[$x]. "</b> is Less Than 6 letters or Greater than 8 letters [".strlen($this->getUsernames()[$x])." Letters]<br>";
			}
		}

		// ////////////// Changing username of names less than 6 letters or Greater than 8 letters

		echo "<h1>Assigning a default username to usernames less than 6 letters or Greater than 8 letters</h1>";

		for($x = 0; $x < $this->getUsernamesLength(); $x++) {

			//////// Assigning a default username to usernames less than 6 letters
			if (strlen($this->getUsernames()[$x]) < 6 || strlen($this->getUsernames()[$x]) > 8) {
				echo "<b>".$this->getUsernames()[$x]. "</b> has been changed";
				echo "<br>";
			}
		}

		// ///////////// Listing new usernames
		echo "<h1>List of usernames of the workers now with Generated Pasword</h1>";
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {
		    if (strlen($this->getUsernames()[$x]) < 6 || strlen($this->getUsernames()[$x]) > 8) {
				echo "<ul><li>".$this->getUsernames()[$x] = "user".rand(1000, 9999);
				echo " => ". $this->password[$x].rand(100,999). $this->password[$x]."</li></ul>";
			}else{
				echo "<ul><li>".$this->getUsernames()[$x] ." => " . $this->password[$x].rand(100,999). $this->password[$x] ."</li></ul>";
			}
		}
	}

}

$user = new User();