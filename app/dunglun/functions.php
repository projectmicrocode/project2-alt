<?php 
	function listDeTai($data){
		foreach ($data as  $value) {
			# code...
			echo '<li><a href="#">'.$value['tendetai'].'</a></li>';
		}
	}
?>