<?php
class Artist
{

	private $con;
	private $id;

	public function __construct($con, $id)
	{
		$this->con = $con;
		$this->id = $id;
	}

	public function getName()
	{
		$artistQuery = mysqli_query($this->con, "SELECT name FROM artists WHERE id='$this->id'");
		$artist = mysqli_fetch_array($artistQuery);
		return $artist['name'];
	}

	public function getId()
	{
		return $this->id;
	}

	public function getSongIds()
	{
		$ids_array = array();
		$result = mysqli_query($this->con, "SELECT id FROM artists");

		while ($row = mysqli_fetch_array($result)) {
			$ids_array[] = $row['id'];
		}
		return $ids_array;
	}
}
