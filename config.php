<?php
// DB.class.php

class Database {
	
	public $db_name = 'cedhosting';
	public $db_user = 'root';
	public $db_pass = '';
	public $db_host = 'localhost';
	
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	
		$db = new mysqli( $this->db_host, $this->db_user, $this->db_pass, $this->db_name );
		
		if ( mysqli_connect_errno() ) {
			printf("Connection failed: %s\
", mysqli_connect_error());
			exit();
        }
    
		return $db;
		
	}

}

