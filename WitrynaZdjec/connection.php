<?php

$con = oci_connect('przykladowy','przykladowy','localhost/XEPDB1')
				or die (oci_error());
	if(!$con){
		echo  "Sorry, there is some issue";
	}
	/* else {
		echo "There is a connection ";
	} */
	


?>