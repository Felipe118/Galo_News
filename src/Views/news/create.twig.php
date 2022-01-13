{% extends('/layouts/mainNews.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<section class="container">
    <h1 class="title-news">Cadastrar Matérias</h1>
<div class="form__news">
    <form action="/News_Galo/new-materias" method="post" >
        <div class="form__control-jor col-8 ">
            <label for="nome" class="label-form">Titulo:</label>
            <input type="text" name="titulo" id="" class="form-control" required>
        </div>
        <div class="form__control-jor  col-8">
            <label for="nome" class="label-form">Resumo:</label>
            <input type="text" name="resumo" id="" class="form-control" required>
        </div>
        <div class="form__control-jor col-8">
            <h3>Matéria</h3><br><br>
            <textarea class="form-control" name="noticia" id="noticia" rows="20"></textarea>
        </div>
        <div class="form__control-jor  col-8">
            <label for="nome" class="label-form">Tag:</label>
            <input type="text" name="tag" id="" class="form-control" required>
        </div>


        <button class="btn btn-warning btn-news"> Cadastrar </button>
    </form>
</div>
</section>
{% endblock %}
