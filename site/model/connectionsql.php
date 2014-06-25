<?php
	class connectionsql {
		public $bdd;
		function __construct() {
			$this->bdd = new PDO('mysql:host=10.33.126.15:3306;dbname=projet web 1', 'exiastore', 'exiastore');
		}

	}

	?>