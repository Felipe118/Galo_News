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

    {% for new in news %}

    <div class="box__news">
        <a href="/News_Galo/renderNew?new={{new.id}}" class=box__link><img class="box__img" src="./assets/img/finans.jpg" alt=""> </a>
        <div class="bom__text-img">
            <a href="" class="box__link">
                <h1 class="box__title"> {{new.titulo}} </h1>
            <p class="box__resume"> {{new.resumo}}</p>
            </a>
        </div>

    </div>
    {% endfor %}
{% endblock %}