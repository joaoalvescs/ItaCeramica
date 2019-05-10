<?
    $destinatario = "joaoalves.cs@gmail.com";

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $comentario = $_REQUEST['comentario'];

    // monta o e-mail na variável $body

    $body = " ======= Olá, recebemos um comentário! =======\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "E-mail" . $email . "\n";
    $body = $body . "Comentário" . $comentario . "\n";
    $body = " ============================================= \n ";

    // envia o email
    mail($destinatario, $comentario , $body, "From: $email\r\n");
	
	// redireciona para a página de obrigado
	header("location:obrigado.html");
?>