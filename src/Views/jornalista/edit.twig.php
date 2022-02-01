{% extends('/layouts/mainJornalista.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<section class="container">
    <h1 class="title__create">Editar Matérias</h1>
    <div class="form__jornalista">
        <form action="/News_Galo/EditJornalistaPost" method="post" enctype="multipart/form-data">
            <div class="form__control-jor col-8 ">
                <label for="nome" class="label-form">Nome:</label>
                <input type="text" name="nome" id="" value="{{jornalistas.nome}}" class="form-control" required>
            </div>
            <div class="form__control-jor  col-8">
                <label for="nome" class="label-form">Email:</label>
                <input type="text" name="email" id="" value="{{jornalistas.email}}" class="form-control" required>
            </div>
            <div class="form__control-jor">
                <label for="" class="label-form">Permisão:</label>
                <select name="permissao" id="">
                    {% if jornalistas.permissao == 'admin' %}
                        <option value="admin" selected>Administrador</option>
                        <option value="jornalista">Jornalista</option>
                    {% elseif jornalistas.permissao == 'jornalista' %}
                        <option value="admin">Administrador</option>
                        <option value="jornalista" selected>Jornalista</option>
                    {% else %}
                    {% endif %}

                </select>

            </div>
            <div class="form__control-jor">
                <label for="" class="label-form">Primeiro Acesso:</label>
                <select name="primeiro_acesso" id="primeiro_acesso">
                    {% if jornalistas.primeiro_acesso == 'nao' %}
                        <option value="sim">Sim</option>
                        <option value="nao" selected>Não</option>
                    {% elseif jornalistas.primeiro_acesso == 'sim' %}
                         <option value="sim" selected>Sim</option>
                         <option value="nao" >Não</option>
                    {% else %}
                    {% endif %}

                </select>

            </div>

            <div class="form__control-jor col-6">
                <label for="" class="label-form">Foto:</label>
                <input type="file" name="foto" value="{{ jornalistas.foto ? jornalistas.foto : '' }}"  class="form-control" alt="fotos" accept=".jpg, .png, .jpeg">
            </div>

            <input type="hidden" name="id" value="{{jornalistas.id}}">
            <button class="btn btn-warning btn-edit mt-5"> Editar </button>
        </form>
    </div>
</section>

{% endblock %}

