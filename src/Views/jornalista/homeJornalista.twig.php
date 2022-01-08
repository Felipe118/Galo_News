{% extends('/layouts/mainJornalista.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}

<section class="col-12 marcador ">


<div class="container-fluid col-12 margin mt-5">
<div class="card-body p-0 col-md-8" style="margin:0 auto">
    <div style="float:right">
        <a href="/News_Galo/create-jornalista"><button class="btn btn-success">Adicionar</button></a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th style="width:80%"><strong>Titulo</strong></th>
            <th style="width:20%"><strong>Ação</strong></th>
        </tr>
        </thead>
            <tbody>
            {% for jorn in jornalista %}    
                <tr>
                    <td>{{jorn.nome}}</td>
                    <td style="display:flex;">
                        <a href="/"><button class="btn btn-primary">Editar</button></a>
                        <form action="#" method="POST" style="margin-left:15px">
                        <button type="submit" class="btn btn-danger" style="float:right">Deletar</button>
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