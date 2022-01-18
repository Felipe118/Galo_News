{% extends('/layouts/mainJornalista.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<section class="container">
    <h1 class="title-news">Editar Matérias</h1>
    <div class="form__news">
        <form action="/News_Galo/newseditPost" method="post" >
            <div class="form__control-jor col-8 ">
                <label for="nome" class="label-form">Nome:</label>
                <input type="text" name="titulo" id="" value="{{news.titulo}}" class="form-control" required>
            </div>
            <div class="form__control-jor  col-8">
                <label for="nome" class="label-form">Email:</label>
                <input type="text" name="resumo" id="" value="{{news.resumo}}" class="form-control" required>
            </div>
            <div class="form__control-jor">
                <label for="" class="label-form">Permisão:</label>
                <select name="permissao" id="">
                    <option value="admin">Administrador</option>
                    <option value="jornalista">Jornalista</option>
                </select>

            </div>
            <div class="form__control-jor">
                <label for="" class="label-form">Primeiro Acesso:</label>
                <select name="primeiro_acesso" id="">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>

            </div>

            <div class="form__control-jor col-8">
                <label for="" class="label-form">Foto:</label>
                <input type="file"   name="foto" class="form-control" alt="fotos" accept=".jpg, .png, .jpeg">
            </div>

            <input type="hidden" name="id" value="{{news.id}}">
            <button class="btn btn-warning btn-news"> Editar </button>
        </form>
    </div>
</section>

{% endblock %}

