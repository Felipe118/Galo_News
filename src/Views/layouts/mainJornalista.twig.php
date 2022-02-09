<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/jornalista.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/modal.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/box.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "/img/logo_galo.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <title>{% block title %}{%endblock%}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    {% block header %}{%endblock%}
</head>
<body>
    <header>
        <nav class="navbar-jor">
            <img class="logo_img-jor" src="./assets/img/logo_galo.svg" alt="Logo Galo">
            <ul class="list">
                <li class="list__item"><a href="/News_Galo/homeLogado" class="list__link">Home</a></li>
                <li class="list__item"><a href="#" class="list__link">Titúlos</a></li>
                <li class="list__item"><a href="#" class="list__link">Notícias</a></li>
                <li class="list__item"><a href="/News_Galo/jornalista" class="list__link">Jornalistas</a></li>
            </ul>
            <a href=" /News_Galo/logout" class="btn-login ">Sair</a>
           
        </nav>
    </header>
    {% if sessao %}
        <h2>Certo</h2>
    {% endif %}

    {% block body %}{% endblock %}
    <footer>
        <span class="txt-footer"> Todos os direitos reservados &copy; </span>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
