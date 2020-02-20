<?php
include "connection.php";
$image="";
$resume="";
if (!empty($_FILES)) {
    if (is_uploaded_file($_FILES['imageup']['tmp_name'])) {
        sleep(1);
        $source_path = $_FILES['imageup']['tmp_name'];
        $target_path = 'profile/' . $_FILES['imageup']['name'];
        if (move_uploaded_file($source_path, $target_path)) {
            $image=$_FILES['imageup']['name'];
        }
    }
	if (is_uploaded_file($_FILES['resumeup']['tmp_name'])) {
        sleep(1);
        $source_path = $_FILES['resumeup']['tmp_name'];
        $target_path = 'resume/' . $_FILES['resumeup']['name'];
        if (move_uploaded_file($source_path, $target_path)) {
            $resume=$_FILES['resumeup']['name'];
        }
    }
}
if(isset($_POST['type']))
{
	$query="UPDATE `personal_info` SET `degree`='".$_POST['degree']."',`dept`='".$_POST['dept']."',`passed_out`='".$_POST['passed_out']."',`reg_no`='".$_POST['reg']."',`college`='".$_POST['college']."',`cgba`='".$_POST['cgba']."',`resume`='".$resume."',`self_intro`='".$_POST['intro']."',`sslc_percentage`='".$_POST['sslc_percentage']."',`sslc_year`='".$_POST['sslc_year']."',`hsc_percentage`='".$_POST['hsc_percentage']."',`hsc_year`='".$_POST['hsc_year']."' WHERE `id`='".$_POST['id']."';";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo $query;
	}
}
?>