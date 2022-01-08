<?php
class User
{

	private $con;
	private $username;

	public function __construct($con, $username)
	{
		$this->con = $con;
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getEmail()
	{
		$newUsername = trim(strtolower($this->username));

		$query = mysqli_query($this->con, "SELECT email FROM users WHERE username='$newUsername'");
		$row = mysqli_fetch_array($query);
		if (isset($row['email']))
			return $row['email'];
		return 'Email not found!';
	}

	public function getFirstAndLastName()
	{
		$newUsername = trim(strtolower($this->username));

		$query = mysqli_query($this->con, "SELECT concat(firstName, ' ', lastName) as 'name'  FROM users WHERE username='$newUsername'");
		$row = mysqli_fetch_array($query);
		if (isset($row['name']))
			return $row['name'];
		return 'First - Last name not found!';
	}
}
