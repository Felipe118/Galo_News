{% extends('/layouts/main.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}

<section class="modal">
     <div class="modal__home">
         <a class="modal__link-principal" href="/News_Galo/renderNew?new={{capaOne.id}}"> 
             <div class="modal__princial">
                 <img class="img__principal" src="./assets/img/finans.jpg" alt="Estadio">
                 <div class="modal__texts">
                     <h1 class="modal__principal-title">{{capaOne.titulo}}</h1>
                     <span class="modal__principal-text">{{capaOne.resumo}} </span>
                 </div>

             </div>

         </a>
         <div class="modal__two">
             <a class="modal__link-secundario" href="/News_Galo/renderNew?new={{capaTwo.id}}">
                 <div class="modal__secundario">
                     <img class="img-sencundario" src="./assets/img/escudo.png" alt="Estadio">
                     <div class="modal__texts-secundario">
                         <h1 class="modal__principal-title">{{capaTwo.titulo}}</h1>
                         <span class="modal__principal-text">{{capaTwo.resumo}} </span>
                     </div>
                 </div>
             </a>

             <a class="modal__link-terceiro" href="/News_Galo/renderNew?new={{capaTree.id}}">
                 <div class="modal__terceiro">
                     <img class="img-terciario" src="./assets/img/estadio.png" alt="Estadio">
                     <div class="modal__texts-secundario">
                         <h1 class="modal__terciario-title">{{capaTree.titulo}}</h1>
                         <span class="modal__principal-text">{{capaTree.resumo}}</span>
                     </div>
                 </div>
             </a>
         </div>

     </div>
 </section>

 <section class="box">
     <!-- <div class="box__news">
         <a href="" class=box__link><img class="box__img" src="./assets/img/estadio.png" alt=""> </a>
         <div class="bom__text-img">
             <a href="" class="box__link">
                 <h1 class="box__title"> TITLE ESTADIO </h1>
                 <p class="box__resume"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. In nobis ipsum unde adipisci, temporibus quisquam omnis quaerat harum minima? Et, aut! Ipsum inventore, id harum sint nesciunt tempora corrupti officiis.</p>
             </a>
         </div>

     </div>

     <div class="box__news">
         <a href="" class=box__link><img class="box__img" src="./assets/img/finans.jpg" alt=""> </a>
         <div class="bom__text-img">
             <a href="" class="box__link">
                 <h1 class="box__title"> TITLE ESTADIO </h1>
                 <p class="box__resume"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. In nobis ipsum unde adipisci, temporibus quisquam omnis quaerat harum minima? Et, aut! Ipsum inventore, id harum sint nesciunt tempora corrupti officiis.</p>
             </a>
         </div>

     </div> -->

     {% for new in news %}

        <div class="box__news">
            <a href="/News_Galo/renderNew?new={{new.id}}" class=box__link><img class="box__img" src="{{new.imagem}}" alt=""> 
            <div class="bom__text-img">
                <a href="/News_Galo/renderNew?new={{new.id}}" class="box__link">
                    <h1 class="box__title"> {{new.titulo}} </h1>
                <p class="box__resume"> {{new.resumo}}</p>
                </a>
            </div>

        </div>
     {% endfor %}
 </section>

{% endblock %}