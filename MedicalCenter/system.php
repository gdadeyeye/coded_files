<?php 
$conn = mysqli_connect('localhost','root','','hospital_management');
 
if(!$conn)
{
	die(mysqli_error());
}
 
if(isset($_POST['Presciption']))
{
	$textareaValue = trim($_POST['msg']);
	$postRef 	= $_POST['text'];
	$postTab	= $_POST['text1'];
	$postDose	= $_POST['text2'];
	$postNoTab	= $_POST['text3'];
	$LOT      = $_POST['text4'];
	$IssueDate      = $_POST['text5'];
	$ExpireDate      = $_POST['text6'];
	$DailyDose      = $_POST['text7'];
	$PossibleEffect      = $_POST['text8'];
	$FurtherInfo      = $_POST['text9'];
	$StorageAdvice      = $_POST['text10'];
	$Driving     = $_POST['text11'];
	$Medication      = $_POST['text12'];
	
	$sql = "insert into prescription (Reference,Tablets,Dose,NumberOfTablet,LOT,IssueDate,ExpirationDate,DailyDose,PossibleSideEffect,FurtherInformation,StorageAdvice,DrivingUsingMachine,HoeToUSeMedication) values ('".$postRef."','".$postTab."','".$postDose."','".$postNoTab."','".$LOT."','".$IssueDate."','".$ExpireDate."','".$DailyDose."','".$PossibleEffect."','".$FurtherInfo."','".$StorageAdvice."','".$Driving."','".$Medication."')";
	$rs = mysqli_query($conn, $sql);
	$affectedRows = mysqli_affected_rows($conn);
	
	if($affectedRows == 1)
	{
		$successMsg = "Record has been saved successfully";
	}
	
}