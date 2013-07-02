<? require_once('class.phpmailer.php');
   require_once('commoninclude.php');
 session_start();
 if(!(isset($_SESSION["admin"]) && $_SESSION["admin"] != ""))
    {
	 header("Location:index.php");
	}
	$mail = new PHPMailer();
   //$mail->IsSMTP();  
   $smarty = new Smarty();
   
  
	 
	 if( (isset($_SESSION['campid']) )&& ($_SESSION['campid']!="")){
	     $rowcamp= Show_Campaign($_SESSION['campid']);
	   }
	 if((isset($_REQUEST['view']))&&  ($_REQUEST['view']!=""))
	{   
		$excampid=$rowcamp[0];
		$mesid=Update_Campaign_Messages($excampid);
		$setingid=Update_Campaign_Settings($excampid);
		$subscriberid=Update_Campaign_Subscribers($excampid);
		$_SESSION['showcampid']="";
		unset($_SESSION['showcampid']);
		$_SESSION['editcamp']="no";
	}
	else if( (isset($_SESSION['edit']))&&  ($_SESSION['edit']!=""))
	{   
	    $_SESSION['showcampid']="";
		unset($_SESSION['showcampid']);
		$_SESSION['editcampaignid']=$rowcamp[0];
		$_SESSION['editcampaignname']=$rowcamp[1];
		$_SESSION['editcamp']="yes";
	}	
     	
		if( (isset($_SESSION['editcampaignid']))  && ($_SESSION['editcampaignid']!=""))
	{
		$newcampid=$_SESSION['editcampaignid'];
		$_SESSION['campaignid']=$newcampid;
		
	}	
	else if( (isset($_SESSION['campaignid'])) && ($_SESSION['campaignid']!=""))
	{
		$newcampid=$_SESSION['campaignid'];
	}

	   
	   require_once('show.all.php');
	   if((isset($_REQUEST['sendmsg'])) && ($_REQUEST['sendmsg']!=""))
	    {  
	 	 $smarty->assign("send", $_REQUEST['sendmsg']);
	     $uploaddir = $_SERVER['DOCUMENT_ROOT'].'autoresponder/uploadedimages/';
         $uploadfile = $uploaddir . $_FILES['msgfile']['name'];
       
        $reciepent=$_POST['reciepentsname'];
		$subject = $_POST['txtsubject'];
        $content = $_POST['textbody'];
        $filename=$_FILES['msgfile']['name'];
		$date=date('Y-m-d');
		//echo "<li>FROM".$row_setting[3]; 
		//echo "<li>TO:" .$reciepent;
		//echo "<li>SUB:".$subject;
		//echo "<li>BODY:".$content;
		echo "<li>ATTACH:".$uploadfile;
		
		if (move_uploaded_file($_FILES['msgfile']['tmp_name'],$uploadfile))  
			{ 
			    
			echo "file is uploaded succefully on the server";
		   }
		
		///////////////////////////////////////////////////////////////////////
		//Code  for email delievery
		if(isset($setMailSendType) && ($setMailSendType=="smtp"))
		{
			$mail->Mailer   	= "smtp";
			//$mail->Host			= $setSMTPServer;
			//$mail->Port			= $setSMTPPort;
			//$mail->SMTPAuth	=  $setSMTPAuth;
			//$mail->Username	= $setSMTPUserId;
			//$mail->Password 	= $setSMTPPassword;
	    }	
		$row_setting=View_Setting($_SESSION['campid']);
		
		$contenttype = "text/plain";
		$mail->FromName = $row_setting[3];          //from
		$mail->ContentType = $contenttype;
		$mail->AddAddress($reciepent);        //to
		$mail->Subject= $subject;
        $mail->Body = $content;
		$mail->AddAttachment($uploadfile);
       
		//$mail->IsHTML(true);  
		
		if(!$mail->Send())
         {
         echo "Message could not be sent. <p>";
         echo "Mailer Error: " . $mail->ErrorInfo;
        // exit;
         }
	  else
	   {
	   $mail->ClearAddresses();
	   echo "Message has been sent";
	   }
//mail section ends here
		
	    $single_id = split(",",$reciepent);
		$id="";
		for($i=0;$i<strlen($single_id);$i++)
		 {  
			 $single_id[$i];
			 if($id=="")
			     {
				 $id=View_Subscribers_Id($single_id[$i]); 
	             }
			 else
				 {
				 if( $single_id[$i]=="")
				  {break;}
				  $id=$id.",".View_Subscribers_Id($single_id[$i]);
				  }
			 
	       }
	    
	  Add_Broadcast_Message($newcampid,$id,$subject,$content,$filename,$date);
  }	
    $camp_name=getNameByCamnpId($_SESSION['campid']);   
    require_once('include/menu.php');
	$smarty->assign("camp_name",$camp_name);
	$smarty->assign("url","campaign.php");
	$smarty->assign("name",$id);
	$smarty->assign("newcampid",$newcampid);
	$smarty->assign("setting","settings.php");
	//$smarty->assign("message","message.php");
	$smarty->assign("date","message.php");
	$smarty->assign("subscriber","subscribers.php");
    $smarty->display("broadcast.message.tpl.html");
	 
?>	
<?
/*
function View_Subscribers($viewcampid)
 {
		 	$query="select * from ".SUBSCRIBERS_TABLE." where campid = ".$viewcampid ; 
			$q =db_query($query)or die (db_error());
				
			$row_subscriber=array();
			$cnt=0;
			while ($row = db_fetch_row($q))
			{
				$row_subscriber[$cnt] = $row;
				$cnt++;
			}			
			return $row_subscriber;
 }
 function View_Setting($viewcampid)
 {
		 	$query="select * from ".SETTINGS_TABLE." where campid= ".$viewcampid ; 
			$q =db_query($query)or die (db_error());
			$rowdb = db_fetch_row($q);
			if($rowdb!="")
			{
				return $rowdb;
			}	
			else
				return 0;	
			
 }

*/
?>
