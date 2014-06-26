<?php
	class connectionsql {
		public $connectionsql;
		function __construct() {
			$this->connectionsql = new PDO('mysql:host=10.33.126.15:3306;dbname=projet web 1', 'exiastore', 'exiastore');
		}
	}

	?>