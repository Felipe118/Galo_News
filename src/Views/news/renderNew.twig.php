{% extends('/layouts/mainNews.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
    <div class="container col col-8 render">
        <h1 class="render__title" >{{news.titulo}}</h1>
        <p class="render__resumo">{{news.resumo}}</p>
        <span class="render__span">Por {{jornalista.nome}} </span><br>
        <span class="render__span">Postada em {{news.data}} </span>
        
        <div class="render__img ">
            <img class="img-fluid" src="{{news.imagem}}">
        </div>



        </article>
        <div class="render__text">
            {% autoescape 'html' %}
                {{ news.noticia|raw }}
            {% endautoescape %}
        </div>
        <div class="render__tags">
            <h3 class="render__tag">Tags</h3>
            <span class="tag">{{ news.tag }}</span>
        </div>
    </div>
<!--    <div class="publicidadde_1   ">-->
<!---->
<!--    </div>-->
{% endblock %}