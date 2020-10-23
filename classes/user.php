<?php

/**
 * 
 Declaring the User class
 */
class User
{
	public $username = ['sonawap', 'lanresam', 'kayye', 'aybliss', 'toppy'];

	public $password = ['son', 'lan', 'kay', 'ayb', 'top'];

	public function getUsernames(){
		return $this->username;
	}

	public function getUsernamesLength(){
		return count($this->username);
	}

	public function showUsernames(){
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {
		    echo "<ul><li>".$this->getUsernames()[$x] ." </li></ul>";
		}
	}

	public function wrongUsernames(){
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {

			//////// get only name that is less than is letters
			if (strlen($this->getUsernames()[$x]) < 6 || strlen($this->getUsernames()[$x]) > 8 ) {
				echo "<b>".$this->getUsernames()[$x]. "</b> is Less Than 6 letters or Greater than 8 letters [".strlen($this->getUsernames()[$x])." Letters]<br>";
			}
		}
	}

	public function changeUsernames(){
		for($x = 0; $x < $this->getUsernamesLength(); $x++) {

			//////// Assigning a default username to usernames less than 6 letters
			if (strlen($this->getUsernames()[$x]) < 6 || strlen($this->getUsernames()[$x]) > 8) {
				echo "<b>".$this->getUsernames()[$x]. "</b> has been changed";
				echo "<br>";
			}
		}

	}

	public function newList(){
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