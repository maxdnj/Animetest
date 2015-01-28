<?php
	
    $db = new mysqli( 'localhost' , 'root', 'root' , 'abdelcrime' );
	if( $db->connect_errno ){
		die( $db->connect_error )
	}