{% extends('/layouts/mainLogado.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<header>
        <nav class="navbar">
            <img class="logo_img" src="./assets/img/logo_galo.svg" alt="Logo Galo">
            <ul class="list">
                {% if sessao %}
                    <li class="list__item"><a href="/News_Galo/jornalista" class="list__link">Controle de Jornalista</a></li>
                {% endif %}
                <li class="list__item"><a href="/News_Galo/materias" class="list__link">Matérias</a></li>
                <li class="list__item"><a href="#" class="list__link">Jogadores</a></li>
                <li class="list__item"><a href="#" class="list__link">História</a></li>
            </ul>
            <a href="/News_Galo/logout" class="btn-login ">Sair</a>
           
        </nav>
       
    </header>
    {% if message %}
        <div class="alert-main-logado">
            {{message}}
        </div>
    {% endif %}

<h1>Bem vindos</h1>

{% if sessao %}
    <h1>Jornalista</h1>
{% endif %}

{% endblock %}