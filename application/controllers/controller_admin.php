<?php
class Controller_Admin extends Controller
{
	
	function action_index()
	{
		include_once("bdconnect.php");
		$this->view->generate('admin_view.php', 'template_view.php');
		if(isset($_POST['submit']))
		{
			var_dump($ReportDate);
			$reportdate = "INSERT INTO
			ReportDate (ReportDate)
			VALUES
			('$ReportDate')";

			if($connect->query($reportdate)===FALSE)
			{
				echo("Error:".$reportdate.$connect->error);
			}

			$city = "INSERT INTO 
			CITY (CityName)
			VALUES
			('$CityName')";

			if($connect->query($reportdate)===FALSE)
			{
				echo("Error:".$city.$connect->error);
			}
			var_dump($ReportDate);
			var_dump($CityName);
			var_dump($city);
			var_dump($reportdate);


			$CityID = "SELECT CityID
			FROM CITY
			WHERE CityName='$CityName'";

			$ReportID ="SELECT ReportID
			FROM ReportDate
			WHERE ReportDate='$ReportDate'";			

			$PRSVoiceQuality = "INSERT INTO 
			PRSVoiceQuality (OperatorName,VSNonAcessibility,VSCutoffRatio,SpeechQuality,NegativeMOSSampleRatio, CityID, ReportDateID, UserAdminID)
			VALUES
			('$OperatorName','$VSNonAcessibility','$VSCutoffRatio','$SpeechQuality','$SpeechQuality','$CityID','$ReportDateID','".$data['UserAdminID']."')";

			if($connect->query($PRSVoiceQuality) === FALSE)
			{
				echo("Error:".$PRSVoiceQuality.$connect->error);
			}

			$ShowMessagesQuality = "INSERT INTO
			ShowMessagesQuality (OperatorName,NonDeliviredSMSPercentage,AverageSMSTime,CityID,ReportDateID,UserAdminID)
			VALUES
			('$OperatorName','$NonDeliviredSMSPercentage','$AverageSMSTime','$CityID','$ReportDateID','".$data['UserAdminID']."')";

			if($connect->query($ShowMessagesQuality) === FALSE)
			{
				echo "Error:".$ShowMessagesQuality."<br>".$connect->error;
			}

			$TransferQuality = "INSERT INTO
			TransferQuality (OperatorName,HTTPSessionFailureRatioPerc,HTTPULMeanUserDataRate,HTTPDLMeanUserDataRate,HTTPSessionTime,CityID,ReportDateID,UserAdminID)
			VALUES
			('$OperatorName','$HTTPSessionFailureRatioPerc','$HTTPULMeanUserDataRate','$HTTPSessionTime','$CityID','$ReportDateID','".$data['UserAdminID']."')";

			if($connect->query($TransferQuality) === FALSE)
			{
				echo "Error:".$TransferQuality."<br>".$connect->error;
			}

			$FAQ = "INSERT INTO
			FAQ(OperatorName,CountTextMessages,POLQA,NegativeMOSSample,SendedSMSCount,CityID,ReportDateID,UserAdminID)
			VALUES
			('$OperatorName','$CountTextMessages','$POLQA','$NegativeMOSSample,'$SendedSMSCount','$CityID','$ReportDateID','".$data['UserAdminID']."')";

			if($connect->query($FAQ) === FALSE)
			{
				echo "Error:".$FAQ."<br>".$connect->error;
			}
			
				$uploaddir = '/var/www/uploads/';
				$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

				echo '<pre>';
				if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
					echo "Файл корректен и был успешно загружен.\n";
				} else {
					echo "Возможная атака с помощью файловой загрузки!\n";
				}

				echo 'Некоторая отладочная информация:';
				print_r($_FILES);

				print "</pre>";
		}
	}
}