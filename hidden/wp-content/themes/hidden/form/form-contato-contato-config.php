<?php 

/**
 * Template Name: Disparo Contato
 *
 *
 * @package WordPress
 * @subpackage AMULI
 * @since AMULI 1.0.50
 */

	ini_set('display_errors', 1);
	header('Access-Control-Allow-Origin: *');
	require_once('base-config.php');
	require_once('phpmailer/PHPMailerAutoload.php');

	if ($_POST) {

		parse_str($_POST['dados'], $dados);

		foreach($dados as $key => $value){
			$_POST[$key]=utf8_decode($value);
		}

		extract($_POST);

	    date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d H:i:s', time());

		$sql="INSERT INTO wp_v4601avb42_contato_contato VALUES
				(NULL,
				'".utf8_decode($nome)."',
				'".utf8_decode($email)."',
				'".utf8_decode($telefone)."',
				'".utf8_decode($mensagem)."',
				'".utf8_decode($termos)."',
				'".utf8_decode($data)."')";
		mysqli_query($conexao,$sql);

	    $html = '<b>Novo lead - Contato.</b> <br /><br />';
		$html .= '<b>Nome:</b> '.$nome.'<br />';
		$html .= '<b>Email:</b> '.$email.'<br />';
		$html .= '<b>Telefone:</b> '.$telefone.'<br />';
		$html .= '<b>Mensagem:</b> '.$mensagem.'<br />';
		$html .= '<b>Checkbox:</b> '.$termos.'<br />';

		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 1;
		$mailer->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);
		$mailer->Port = 587;
		$mailer->Host = 'email-ssl.com.br';
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = tls;
		$mailer->Username = 'leads@markaprime.com.br';
		$mailer->Password = 'Marka@prime2022';

		$mailer->setFrom('leads@markaprime.com.br', 'Leads Markaprime - Contato');

		$mailer->addAddress('leads@markaprime.com.br');

		$mailer->Subject = 'Novo Lead - Markaprime - Contato';
		$mailer->CharSet = 'UTF-8';
		$mailer->Body = $html;

		$mailer->IsHTML(true); 	
		$mailer->AddReplyTo($email);

		if(!$mailer->Send()){
			echo '0';
		}else{
			echo '1';
		}
	}
?>

<!-- NEWTON FORM -->

<?php 
	
	header('Access-Control-Allow-Origin: *');
	require_once('base-config.php');
	require_once('phpmailer/PHPMailerAutoload.php');

	if ($_POST) {

		parse_str($_POST['dados'], $dados);

		foreach($dados as $key => $value){
			$_POST[$key]=utf8_decode($value);
		}

		extract($_POST);

	    date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d H:i:s', time());

		$sql="INSERT INTO users_googlepartner VALUES
				(NULL,
				'$nome',
				'$email',				
				'$whats',
				'$empresa',
				'$mensagem',
				'$data')";	
		mysqli_query($conexao,$sql);

	    $html = '<b>Nova mensagem gerada do site da Newton!</b> <br /><br />';
		$html .= '<b>Nome:</b> '.$nome.'<br />';
		$html .= '<b>E-mail:</b> '.$email.'<br />'; 	
		$html .= '<b>Whatsapp:</b> '.$whats.'<br />'; 			
		$html .= '<b>Empresa:</b> '.$empresa.'<br />'; 			
		$html .= '<b>Mensagem:</b> '.$mensagem.'<br />';

		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 1;
		$mailer->Port = 587;
		$mailer->Host = 'smtp.office365.com';
		$mailer->SMTPAuth = true;
		$mailer->SMTPSecure = tls;
		$mailer->Username = 'leads@newton.ag';
		$mailer->Password = '#L_3!aD5!2o2o@';
		$mailer->setFrom('leads@newton.ag', 'Landing Page - Newton');
		$mailer->addAddress('victor@newton.ag');
		$mailer->addAddress('sarah.poleto@newton.ag');
		$mailer->addAddress('brunno@newton.ag');
		// $mailer->addAddress('viviana.delbianco@newton.ag');
		$mailer->addAddress('guilherme.henrique@newton.ag');
		$mailer->Subject = 'Novo Lead - Newton - Google Partner';
		$mailer->CharSet = 'UTF-8';
		$mailer->Body = $html;
		$mailer->IsHTML(true); 	
		$mailer->AddReplyTo($email);

		if(!$mailer->Send()){
			echo '0';
		}else{
			echo '1';
		}

	}
?>