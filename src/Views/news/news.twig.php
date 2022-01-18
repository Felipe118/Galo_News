{% extends('/layouts/mainNews.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}
<section class="col-12">


<!--        <div id="error" class="col-12  ">-->
<!--            <div class="alert alert-danger d-flex justify-content-center" role="alert">-->
<!--                Não é Possível acessar esse ID-->
<!--            </div>-->
<!--        </div>-->



<!--
        <div id="error" class="col-12  ">-->
<!--            <div class="alert alert-success d-flex justify-content-center" role="alert">-->
<!--                <h3>Matéria Deletada com sucesso!</h3>-->
<!--            </div>-->
<!--        </div>-->
<!--    -->


    {% if message %}
    <div class="alert alert-primary col-6 d-flex justify-content-center m-auto mt-5 ">
        {{message}}
    </div>
    {% endif %}
    <div class="container-fluid col-12 margin mt-5 pt-4">

        <div class="card-body p-0 col-md-8" style="margin:0 auto">
            <div style="float:right">
                <a href="/News_Galo/create-materias"><button class="btn btn-success">Adicionar</button></a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th style="width:80%"><strong>Titulo</strong></th>
                    <th style="width:20%"><strong>Ação</strong></th>
                </tr>
                </thead>
                <tbody>
                {% for new in news %}
                <tr>
                    <td>{{new.titulo}}</td>

                    <td style="display:flex;">
                        <a href="/News_Galo/news-edit?registro={{new.id}}" ><button class="btn btn-primary ">Editar</button></a>
                        <form action="/News_Galo/news-delete" method="POST" style="margin-left:15px" id="form-btn">
                            <input type="hidden" name="id" value="{{new.id}}">
                            <button type="submit" class="btn btn-danger " style="float:right">Deletar</button>
                        </form>
                    </td>

                <tr>
                    {% endfor %}
                </tbody>

            </table>
        </div>

    </div>
</section>


{% endblock %}