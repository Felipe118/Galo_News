<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "./assets/img/logo_galo.svg"/>
    <title>Login</title>
</head>
<body>
   
 <form action="/auth-first-save" method="POST">
     <div class="form">

        <div class="form-control">
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <div class="form-control">
            <label for="confirmsenha">Confirme a senha:</label>
            <input type="password" placeholder="Confirme a Senha" name="confirmsenha" id="">
        </div>

        <button class="btn-login">Confirmar</button>
     </div>

       
 </form>
 
</body>
</html>