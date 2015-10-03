<?php
function parseString($str_parse,$data=''){
	$res=$str_parse;
	if(is_array($data)&& !empty($str_parse)){
		foreach($data as $index => $content){
			
			$aux_text="%".$index."%";
			
			$res=str_replace($aux_text,$content,$res);
		}
	}
	return $res;
}
function sendEmail($email_object, $to_data, $subject, $message, $parse_data=''){
	$config['protocol'] = 'mail';
	$config['mailpath'] = '/usr/sbin/sendmail';
	$config['charset'] = 'UTF-8';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';	
	$email_object->initialize($config);
	$res="";
	$email_object->from('info@endoscopia.com', 'Endoscopia');
	//$list = array('eliana.merino@endoscopiabolivia.com', 'ventas@endoscopiabolivia.com', 'soporte@endoscopiabolivia.com','vsalaues@endoscopiabolivia.com',$to_data);
	//$email_object->to($list);

	$email_object->subject($subject);
	//place holders email configuration
	
	$message=parseString($message,$parse_data);
	//echo $message;
	//end
	$email_object->message($message);
	$email_object->send();
	$res=$email_object->print_debugger();
	return $res;
}
?>