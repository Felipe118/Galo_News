
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
    <link rel="stylesheet" href="./assets/css/box.css">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "./assets/img/logo_galo.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <title>{% block title %}{%endblock%}</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      {% block header %}{%endblock%}
    </head>
<body>
    <header>
        <nav class="navbar">
            <img class="logo_img" src="./assets/img/logo_galo.svg" alt="Logo Galo">
            <ul class="list">
                <li class="list__item"><a href="#" class="list__link">História</a></li>
                <li class="list__item"><a href="#" class="list__link">Titúlos</a></li>
                <li class="list__item"><a href="#" class="list__link">Notícias</a></li>
                <li class="list__item"><a href="#" class="list__link">Jornalistas</a></li>

                
            </ul>
            <a href="/News_Galo/auth" class="btn-login ">ENTRAR</a>
           
        </nav>
       
    </header>
    {% block body %}{% endblock %}
   <!--<footer>&copy; Rodape</footer>-->
</body>
</html>
