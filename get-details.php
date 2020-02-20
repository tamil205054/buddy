<?php
	include "connection.php";
	function get_data()
	{
		 global $con;
		session_start();
		$query="SELECT personal_info.*,register.* FROM personal_info INNER JOIN register  on personal_info.id=register.id  WHERE `mail`='".$_SESSION['buddy_mail']."' and `pass`='".$_SESSION['buddy_pass']."';";
		$result=mysqli_query($con,$query);
		return mysqli_fetch_array($result);
	}
	function get_buddy_data($id)
	{
		 global $con;
		//session_start();
		$query="SELECT personal_info.*,register.* FROM personal_info INNER JOIN register  on personal_info.id=register.id  WHERE `personal_info`.`id`='".$id."';";
		
		$result=mysqli_query($con,$query);
		return mysqli_fetch_array($result);
	}
?>