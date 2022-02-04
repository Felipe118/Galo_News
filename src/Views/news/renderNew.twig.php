{% extends('/layouts/mainNews.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
    <div class="conntainer-fluid">
        <h1>{{news.titulo}}</h1>
        
        <div>
            <img src="{{news.imagem}}">
        </div>

        <div>

                {{news.noticia}}

        </div>
    </div>

{% endblock %}