<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor conferencia de disño web en español</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo praesentium sapiente perspiciatis, nostrum totam ab id ex temporibus distinctio deleniti culpa ipsum autem reiciendis. Numquam mollitia optio ipsa odio nobis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet sequi, error adipisci porro corporis nam provident officia, natus asperiores nisi id? Alias dignissimos cumque nemo magni minima nesciunt modi!</p>
    </section><!--seccion-->
    <section class="programa">
      <div class="contenedor_video">
        <video autoplay loop    poster="img/img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
        </video>
      </div><!--contenedor_video-->
      <div class="contenido_programa">
        <div class="contenedor">
          <div class="programa_evento">
            <h2>Programa del evento</h2>
            <nav class="menu_programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle_evento">
                <h3>HTML5, CSS3 y JavaScript</h3>
                <p><i class="far fa-clock"></i> 16:00</p>
                <p><i class="far fa-calendar-alt"></i>  10 DIC</p>
                <p><i class="fas fa-user"></i> Juan Pablo De La Torre </p>
              </div><!--detalle_evento-->
              <div class="detalle_evento">
                <h3>Responsive Web Desing</h3>
                <p><i class="far fa-clock"></i> 20:00</p>
                <p><i class="far fa-calendar-alt"></i>  10 DIC</p>
                <p><i class="fas fa-user"></i> Juan Pablo De La Torre </p>
              </div><!--detalle_evento-->
              <a href="#" class="boton float-rigth">Ver Todos</a>
            </div><!--#talleres-->
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle_evento">
                <h3>Como ser Freelancer</h3>
                <p><i class="far fa-clock"></i> 10:00</p>
                <p><i class="far fa-calendar-alt"></i>  10 DIC</p>
                <p><i class="fas fa-user"></i> Gregorio Sanchez </p>
              </div><!--detalle_evento-->
              <div class="detalle_evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="far fa-clock"></i> 20:00</p>
                <p><i class="far fa-calendar-alt"></i>  10 DIC</p>
                <p><i class="fas fa-user"></i> Susan Sanchez  </p>
              </div><!--detalle_evento-->
              <a href="#" class="boton float-rigth">Ver Todos</a>
            </div><!--#conferencias-->
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle_evento">
                <h3>Diseño UI/UX para moviles</h3>
                <p><i class="far fa-clock"></i> 17:00</p>
                <p><i class="far fa-calendar-alt"></i>  11 DIC</p>
                <p><i class="fas fa-user"></i> Harold Garcia </p>
              </div><!--detalle_evento-->
              <div class="detalle_evento">
                <h3>Aprende a programar en una mañana</h3>
                <p><i class="far fa-clock"></i> 10:00</p>
                <p><i class="far fa-calendar-alt"></i>  11 DIC</p>
                <p><i class="fas fa-user"></i> Susana Rivera </p>
              </div><!--detalle_evento-->
              <a href="#" class="boton float-rigth">Ver Todos</a>
            </div><!--#seminarios-->
          </div><!--programa_evento-->
        </div><!--contenedor---->
      </div><!--contenido_programa-->
    </section><!--programa-->
    <section class="invitados contenedor seccion">
      <h2>Invitados</h2>
      <ul class="lista_invitados clearfix">
        <li>
          <div class="invitado"><img src="img/img/invitado1.jpg" alt="invitado1">
          <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
            <div class="invitado"><img src="img/img/invitado2.jpg" alt="invitado2">
            <p>Shrie Herrera</p>
            </div>
        </li>
        <li>
            <div class="invitado"><img src="img/img/invitado3.jpg" alt="invitado3">
            <p>Gregorio Sanchez</p>
            </div>
        </li>
        <li>
           <div class="invitado"><img src="img/img/invitado4.jpg" alt="invitado4">
          <p>Susano Rievera</p>
          </div>
        </li>
        <li>
          <div class="invitado"><img src="img/img/invitado5.jpg" alt="invitado5">
           <p>Jarol Garcia</p>
           </div>
        </li>
        <li>
           <div class="invitado"><img src="img/img/invitado6.jpg" alt="invitado1">
          <p>Susan Zanchez</p>
          </div>
        </li>
      </ul>

    </section>
    <div class="contador parallax">
      <div class="contador">
        <ul class="resumen_evento clearfix">
          <li><p class="numero">0</p>Invitados</li>
          <li><p class="numero">0</p>Talleres</li>
          <li><p class="numero">0</p>Dias</li>
          <li><p class="numero">0</p>Conferencias</li>
        </ul>
      </div> <!--contador-->
    </div>
    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista_precios clearfix">
          <li>
            <div class="tabla_precio">
              <h3>Pase por un dia</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="boton hollow">Comprar</a>
            </div>
          </li>
          <li>
              <div class="tabla_precio">
                <h3>Todos los dias</h3>
                <p class="numero">$50</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <a href="#" class="boton">Comprar</a>
              </div>
            </li>
            <li>
            <div class="tabla_precio">
              <h3>Pase por dos dias</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="boton hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div><!--contenedor seccion precios-->
    </section>
    <div id="mapa" class="mapa"></div>
    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veritatis accusamus incidunt! Sed nam, assumenda sunt saepe tenetur odit fuga ipsam doloremque, doloribus unde aut accusantium atque sint itaque perferendis?</p>
          <footer class="info_testimonial clearfix">
            <img src="img/img/testimonial.jpg" alt="imagen_testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--fin_testimonial-->
      <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veritatis accusamus incidunt! Sed nam, assumenda sunt saepe tenetur odit fuga ipsam doloremque, doloribus unde aut accusantium atque sint itaque perferendis?</p>
            <footer class="info_testimonial clearfix">
              <img src="img/img/testimonial.jpg" alt="imagen_testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--fin_testimonial-->
        <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veritatis accusamus incidunt! Sed nam, assumenda sunt saepe tenetur odit fuga ipsam doloremque, doloribus unde aut accusantium atque sint itaque perferendis?</p>
              <footer class="info_testimonial clearfix">
                <img src="img/img/testimonial.jpg" alt="imagen_testimonial">
                <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!--fin_testimonial-->
          </div><!--testimonial_contenedor-->
    </section>
    <div class="parallax newslatter contenido">
      <div class="contenedor contenido">
        <p>Regitrate al Newslatter</p>
        <h3>GdlWebCam</h3>
        <a href="#" class="boton transparente">Regitrate</a>

      </div><!--contenedor-->
    </div><!--Newslatter Contenido-->
    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta_regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p>dias</li> 
          <li><p id="horas" class="numero"></p>horas</li> 
          <li><p id="minutos" class="numero"></p>minutos</li> 
          <li><p id="segundos" class="numero"></p>segundos</li> 
        </ul>
      </div>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>
