{% extends('/layouts/mainNews.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<section class="container">
    <h1 class="title-news">Editar Matérias</h1>
    <div class="form__news">
        <form action="/News_Galo/newseditPost" method="post" enctype="multipart/form-data" >
            <div class="form__control-jor col-8 ">
                <label for="nome" class="label-form">Titulo:</label>
                <input type="text" name="titulo" id="" value="{{news.titulo}}" class="form-control" required>
            </div>
            <div class="form__control-jor  col-8">
                <label for="nome" class="label-form">Resumo:</label>
                <input type="text" name="resumo" id="" value="{{news.resumo}}" class="form-control" required>
            </div>
            <div class="form__control-jor col-8">
                <label for="" class="label-form">Imagem:</label>
                <input type="file"   name="imagem" class="form-control" alt="imagens" accept=".jpg, .png, .jpeg">
            </div>
            <div class="form__control-jor col-8">
                <h3>Matéria</h3><br><br>
                <textarea class="form-control" name="noticia" id="noticia" rows="20">
                    {{news.noticia}}
                </textarea>
            </div>
            <div class="form__control-jor  col-8">
                <label for="nome" class="label-form">Tag:</label>
                <input type="text" name="tag" id="" value="{{news.tag}}" class="form-control" required>
            </div>

            <input type="hidden" name="id" value="{{news.id}}">
            <button class="btn btn-warning btn-news"> Editar </button>
        </form>
    </div>
</section>

{% endblock %}
