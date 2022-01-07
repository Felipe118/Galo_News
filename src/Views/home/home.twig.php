{% extends('/layouts/main.twig.php') %}

{% block title %}News Galo{%endblock%}

{% block body %}

<section class="modal">
     <div class="modal__home">
         <a class="modal__link-principal" href="#">
             <div class="modal__princial">
                 <img class="img__principal" src="./assets/img/finans.jpg" alt="Estadio">
                 <div class="modal__texts">
                     <h1 class="modal__principal-title">TITLE ESTADIO</h1>
                     <span class="modal__principal-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                 </div>

             </div>

         </a>
         <div class="modal__two">
             <a class="modal__link-secundario" href="444">
                 <div class="modal__secundario">
                     <img class="img-sencundario" src="./assets/img/escudo.png" alt="Estadio">
                     <div class="modal__texts-secundario">
                         <h1 class="modal__principal-title">Title Estadio</h1>
                         <span class="modal__principal-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                     </div>
                 </div>
             </a>

             <a class="modal__link-terceiro" href="#">
                 <div class="modal__terceiro">
                     <img class="img-terciario" src="./assets/img/estadio.png" alt="Estadio">
                     <div class="modal__texts-secundario">
                         <h1 class="modal__terciario-title">Title Estadio</h1>
                         <span class="modal__principal-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                     </div>
                 </div>
             </a>
         </div>

     </div>
 </section>

 <section class="box">
     <div class="box__news">
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

     </div>
 </section>

{% endblock %}