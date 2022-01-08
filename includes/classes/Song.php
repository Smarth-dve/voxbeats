<?php
	class Song {

		private $con;
		private $id;
		private $mysqliData;
		private $title;
		private $artistId;
		private $albumId;
		private $genre;
		private $duration;
		private $path;

		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

			$query = mysqli_query($this->con, "SELECT * FROM songs WHERE id='$this->id'");
			$this->mysqliData = mysqli_fetch_array($query);
			
			if(isset($this->mysqliData['title']))
				$this->title = $this->mysqliData['title'];

			if(isset($this->mysqliData['artist']))
				$this->artistId = $this->mysqliData['artist'];

			if(isset($this->mysqliData['album']))
				$this->albumId = $this->mysqliData['album'];

			if(isset($this->mysqliData['genre']))
				$this->genre = $this->mysqliData['genre'];

			if(isset($this->mysqliData['duration']))
				$this->duration = $this->mysqliData['duration'];

			if(isset($this->mysqliData['path']))
				$this->path = $this->mysqliData['path'];
		}

		public function getTitle() {
			return $this->title;
		}

		public function getId() {
			return $this->id;
		}

		public function getArtist() {
			return new Artist($this->con, $this->artistId);
		}

		public function getAlbum() {
			return new Album($this->con, $this->albumId);
		}

		public function getPath() {
			return $this->path;
		}

		public function getDuration() {
			return $this->duration;
		}

		public function getMysqliData() {
			return $this->mysqliData;
		}

		public function getGenre() {
			return $this->genre;
		}

	}
