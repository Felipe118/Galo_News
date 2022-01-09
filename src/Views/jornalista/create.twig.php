{% extends('/layouts/mainJornalista.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
    <section class="container">
        <h2 class="title__create">Cadastrando Jornalistas</h2>

        <div class="form__jornalista">
            <form action="/News_Galo/new-jornalista" method="post" enctype="multipart/form-data">
                <div class="form__control-jor col-8 ">
                    <label for="nome" class="label-form">Nome:</label>
                    <input type="text" name="nome" id="" class="form-control">
                </div>
                <div class="form__control-jor  col-8">
                    <label for="nome" class="label-form">E-mail:</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="form__control-jor col-8">
                    <label for="nome" class="label-form">Senha:</label>
                    <input type="password" class="form-control" name="senha" id="">
                </div>
                <div class="form__control-jor col-8">
                    <label for="" class="label-form">Foto:</label>
                    <input type="file" src=""  name="foto" class="form-control" alt="fotos" accept=".jpg, .png, .jpeg">
                </div>
                <div class="form__control-jor">
                    <label for="" class="label-form">Permisão:</label>
                    <select name="permissao" id="">
                        <option value="admin">Administrador</option>
                        <option value="jornalista">Jornalista</option>
                    </select>
                    
                </div>

                <button class="btn btn-warning"> Cadastrar </button>
            </form>
        </div>
    </section>
{% endblock %}