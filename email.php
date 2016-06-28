<?php

require_once('phpmailer/class.phpmailer.php');

$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;

//Indica a porta de conexão para a saída de e-mails
$mailer->Port = 25;

$mailer->CharSet = 'UTF-8';

//Endereço do Host do SMTP Locaweb
$mailer->Host = '192.168.1.5';

//define se haverá ou não autenticação no SMTP
$mailer->SMTPAuth = true;

//Login de autenticação do SMTP
$mailer->Username = 'supervolta@unimed-erechim.com.br';

//Senha de autenticação do SMTP
$mailer->Password = '@unimed28';

//Nome que será exibido para o destinatário
$mailer->FromName = 'Super Volta Unimed MTB';

//Obrigatório ser a mesma caixa postal configurada no remetente do SMTP
$mailer->From = 'supervolta@unimed-erechim.com.br';

//Destinatário
$mailer->AddAddress($email, 'Cadastro Super Volta Unimed');

$mailer->Subject = 'Inscrição na Super Volta Unimed MTB realizado com sucesso!';
$mailer->Body = $_POST['nome'] . ', sua inscrição foi realizado com sucesso! Para confirmar sua inscrição efetue o pagamento em uma das contas abaixo. Em seguida envie o comprovante para o e-mail supervolta@unimed-erechim.com.br - Tempo médio de apuração das inscrições é de dois (2) dias úteis.' . chr(13).chr(13).
        'Caixa Unimed, na Av. Sete de Setembro, 2001' . chr(13).
        'Banco do Brasil - Agência 0132-5 - Nº Conta 5.086-5' .chr(13).
        'Caixa Econômica Federal - Agência 0470 - Nº Conta 800-2, Operação 003' .chr(13).
        'CNPJ Unimed: 87.638.334.0001-73' .chr(13). chr(13).
        'Para maiores informações, acesse os menus Programação e Regulamento do site www.unimed-erechim.com.br/supervoltaunimedmtb.';

if (!$mailer->Send()) {
    echo "E-mail não enviado";
    echo "Erro: " . $mailer->ErrorInfo;
    exit;
}
?>