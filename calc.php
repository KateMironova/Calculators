<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
	$aNum = $_GET['num1'];
	$bNum = $_GET['num2'];
	$oP = $_GET['opr'];
}
else
{
	$aNum = $_POST['num1'];
	$bNum = $_POST['num2'];
	$oP = $_POST['opr'];
}

echo calc($aNum, $bNum, $oP);

function calc($aNum, $bNum, $oP)
{
	$result = 0;
	switch($oP)
	{
		case 'plus': 
			$result = $aNum+$bNum; 
			break;
		case '-': 
			$result = $aNum-$bNum; 
			break;
		case '*': 
			$result = $aNum*$bNum; 
			break;
		case '/': 
			$result = $aNum/$bNum; 
			break;
		default: 
			$result = "Error";
	}
	return $result;
}
?>