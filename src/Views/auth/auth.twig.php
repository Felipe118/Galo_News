
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
    {% if error == 'login' %}
        <div class="box-error">
            <p class="text-danger">Login ou senha incorretos</p>
        </div>
    {% endif %}
 <form action="/News_Galo/authPost" method="POST">
     <div class="form">
        <div class="form-control">
            <label for="e-mail">E-mail</label>
            <input type="text" name="email" placeholder="E-mail" required>
        </div>

        <div class="form-control">
            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button class="btn-login">Entrar</button>
     </div>

       
 </form>
 
</body>
</html>