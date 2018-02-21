<?php
class User {
	protected $username;
	protected $password;

	public function __construct($username = "default", $password = "default"){
		$this->username = $username;
		$this->password = $password;
	}

	public function __toString() {
		echo "Username: " . $username . " password: " . $password;
	}

	public function getUser ($username) {
		*/ stuff to get a user
	}
}
$user = new User("ccook", "hello");
print $user;