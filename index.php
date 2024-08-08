<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir IP do Usuário</title>
</head>
<body>
    <h1>Bem-vindo ao site!</h1>
    <p>Seu endereço IP é:
        <?php
        // Função para obter o IP do usuário
        function getUserIP() {
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        // Obtém o IP do usuário
        $user_ip = getUserIP();

        // Exibe o IP na página
        echo $user_ip;
        ?>
    </p>
</body>
</html>
