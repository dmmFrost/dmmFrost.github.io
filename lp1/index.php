<?php
if (isset($_GET['fbpixel'])) {
    $value = $_GET['fbpixel'];
    setcookie("fbpixel", $value, time()+600);
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1" id="viewport">
  <title>Revitaprost</title>
  <meta name="format-detection" content="telephone=no">
</head>

<body class="lang_it page_home page_cod">
  <div class="page_wrapper">
    <section class="greeting">
      <div class="wrapper">
        <div class="top_line"><img class="top_line__logo" src="img/logo.png" alt>
          <div class="top_line__description"> Solución natural a los problemas de la próstata</div>
        </div>
        <div class="title"><span> ¡Deshazte de la prostatitis rápidamente</span> y restaura la función sexual sin <span>
            dolorosos y humillantes</span><br> procedimientos médicos!<div class="price">
            <span class="old-price">S./ 320</span><span class="new-price">S./ 160</span>
          </div>
        </div>
        <ul class="list">
          <li><strong> Elimina la inflamación</strong> de la próstata</li>
          <li><strong> Alivia el dolor y</strong> el ardor de la uretra</li>
          <li><strong> Previene el desarrollo del</strong> cáncer próstata</li>
          <li><strong> Restaura una erección saludable</strong></li>
        </ul>
        <div class="product"><img src="img/offer2.png" alt style="max-width:80%">
          <ul class="icons">
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
          </ul>
          <div class="labels">
            <div class="europe"> Hecho en Europa</div>
            <div class="vegan"> Desarrollado en Israel</div>
          </div>
        </div>
        <a class="scroll_to_button button hide_on_mobile" href="#scroll_to_form">
          <button class="button_submit" type="submit"><span> Pedir Revitaprost</span></button>
        </a>
        <div class="show_on_mobile">
          <div class="form_top final__form">
            <div class="form_top__discount wv_discount"> -50%</div>
            <div class="form_top__price_container">
              <div class="form_top__price_old">
                <div class="form_top__price_old_label"> Precio al por menor:</div>
                <div class="form_top__price_old_value"><span class="wv_old-price">S./ 320</span><span
                    class="wv_currency"></span></div>
              </div>
              <div class="form_top__price_new">
                <div class="form_top__price_val"><span class="wv_new-price">S./ 160</span><span class="wv_currency"></span>
                  <div class="form_top__icon_new">¡Novedad!</div>
                </div>
                <div class="form_top__price_label"> + <span> ENVÍO</span> RÁPIDO</div>
              </div>
            </div>

            <div class="form_top__title"> ¡Pide con<span><span class="wv_discount"> 50%</span> de descuento!</span>
            </div>
            <form action="order.php"  class="orderForm form wv_order-form" method="post" action>
              <label for> Ejemplo: Juan Quispe</label>
              <div class="form_top__field form_top__field-name">
                <input class="form_top__input wv_name" type="text" name="name" placeholder="Nombre" required>
              </div>
              <label for> Ejemplo: +51 13635327</label>
              <div class="form_top__field form_top__field-phone">
                <input class="form_top__input wv_phone" type="tel" name="phone" placeholder="Teléfono" required
                  maxlength="20">
              </div>
              <button class="submit_form button_submit" type="submit"><span class="big"> Pedir
                  Revitaprost</span></button>
              <div class="shields__block">
                <div class="free-delivery">
                  <div class="free-delivery-title"> Atención: Debido a la gran atención por parte de los medios de
                    comunicación, nuestra oferta de productos está limitada. Hoy, <span class="date"> 43788</span> solo
                    hay disponibles 28 piezas.</div>
                </div>
              </div>
            <input type="hidden" name="sub1" value="{subid}">
            <input type="hidden" name="sub2" value="{sub2}">
            <input type="hidden" name="fbpx" value="{fbpx}">
</form>
          </div>
        </div>
      </div>
    </section>
    <section class="symptoms">
      <div class="wrapper">
        <div class="title"> ¿Tienes algún síntoma de prostatitis?</div>
        <div class="subtitle"> Si tienes alguno de los siguientes síntomas, ¡puedes tener prostatitis! </div>
        <div class="slider_container">
          <div class="slider_symptoms">
            <div class="item">
              <div class="image"><img src="img/item_symptoms-1.png" alt></div>
              <div class="text"> Dolor en el área entre el recto y el escroto</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-2.png" alt></div>
              <div class="text"> Ganas para orinar con frecuencia</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-3.png" alt></div>
              <div class="text"> Diarrea o estreñimiento</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-4.png" alt></div>
              <div class="text"> Indiferencia al sexo</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-5.png" alt></div>
              <div class="text"> Dificultades y dolores al orinar o al eyacular</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-6.png" alt></div>
              <div class="text"> Erección débil</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-7.png" alt></div>
              <div class="text"> Sangre en la orina y el semen</div>
            </div>
            <div class="item">
              <div class="image"><img src="img/item_symptoms-8.png" alt></div>
              <div class="text"> Dolor y molestias en el pene o los testículos</div>
            </div>
          </div>
        </div>
        <div class="attention"> ¡No seas indiferente a tu salud! La prostatitis puede provocar infertilidad e incluso
          cáncer</div>
      </div>
    </section>
    <section class="why">
      <div class="wrapper">
        <div class="left_part">
          <div class="title"> ¿Qué es la prostatitis y por qué debes de combatirla?</div>
          <div class="text"> Se trata de una patología en forma de inflamación o infección de la próstata. De acuerdo
            con el Foro Europeo de Asociaciones Médicas, entre el 35% y el 50% de los hombres en Europa sufren de esta
            enfermedad. </div>
          <div class="icons">
            <div class="man"></div>
            <div class="diagramme first"> 35%</div> - <div class="diagramme second"> 50%</div>
          </div>
        </div>
        <div class="right_part">
          <div class="title"> PROSTATITIS</div>
          <div class="icons">
            <div class="normal"> Normal<img src="img/image_normal.png" alt></div>
            <div class="inflamed"> Inflamada<img src="img/image_inflamed.png" alt></div>
          </div>
        </div>
      </div>
    </section>
    <section class="formula">
      <div class="wrapper">
        <div class="top_part">
          <div class="title"> Presentación de Revitaprost y su maravillosa fórmula</div>
          <div class="image"><img class="hide_on_mobile" src="img/image_formula_top.png" alt><img class="show_on_mobile"
              src="img/image_formula_top_mobile.png" alt></div>
          <div class="text"> Revitaprost es un aditivo que tiene un efecto curativo natural al tener prostatitis.
            <strong> ¡Es un resultado de 10 años de investigación! </strong> El principal objetivo de la investigación
            fue crear <strong> una fórmula de curación </strong> de la prostatitis en tres etapas:</div>
        </div>
        <div class="bottom_part">
          <div class="slider_container">
            <div class="slider_formula">
              <div class="item">
                <div class="image"> <img src="img/image_formula-1.png" alt></div>
                <div class="text_part">
                  <div class="title"><span> Etapa 1</span> Eliminación del dolor <br> en la zona abdominal, inguinal y
                    lumbar. </div>
                  <div class="text"> Durante los primeros 7 días, los ingredientes activos de Revitaprost entran en la
                    glándula de la próstata y comienzan <strong> los procesos de regeneración. </strong> La capacidad de
                    purificación de las glándulas se activa y se eliminan las bacterias. Así, la inflamación se reduce.
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="image"> <img src="img/image_formula-2.png" alt></div>
                <div class="text_part">
                  <div class="title"><span> Etapa 2</span> La micción se estabiliza<br> y la inflamación desaparece.
                  </div>
                  <div class="text"> En la segunda semana se vuelve visible que la uretra <strong> está completamente
                      libre y el paciente no siente ningún dolor al orinar. </strong> El estado de la próstata es mucho
                    mejor. El cuerpo reanuda los procesos de limpieza, y la mayoría de las bacterias son expulsadas del
                    organismo.</div>
                </div>
              </div>
              <div class="item">
                <div class="image"> <img src="img/image_formula-3.png" alt></div>
                <div class="text_part">
                  <div class="title"><span> Etapa 3</span> Normalización de la erección, <br> la rehabilitación del
                    cuerpo y la recuperación completa de la próstata.</div>
                  <div class="text"> Las sustancias activas de Revitaprost <strong> reducen completamente el tamaño del
                      área inflamada y eliminan todas las bacterias. </strong> También restauran la capacidad natural
                    del cuerpo para equilibrar la glándula prostática. Además, ayudan a normalizar las erecciones, ya
                    que el líquido puede producirse con seguridad en la glándula y participar en la función
                    reproductiva.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="eliminate">
      <div class="wrapper">
        <div class="title"> ¡Deshazte de la prostatitis y recupera tu fuerza masculina en tan solo 3 etapas!</div>
        <div class="product"><img src="img/offer2.png" alt style="max-width:50%"></div>
        <div class="text"> La acción del producto tiene como objetivo eliminar el proceso inflamatorio en la próstata y
          los trastornos urológicos del hombre que causan la prostatitis.</div><a class="scroll_to_button button"
          href="#scroll_to_form">
          <button class="button_submit" type="submit"><span> Pedir Revitaprost</span></button></a>
      </div>
    </section>
    <section class="experts">
      <div class="wrapper">
        <div class="title"> ¿Por qué los urólogos recetan Revitaprost a sus pacientes</div>
        <div class="subtitle"> y 4 de cada 5 expertos europeos avalan su eficiencia?</div>
        <div class="image_block">
          <div class="image"><img src="img/image_illustration-1.png" alt></div>
          <div class="image"><img src="img/image_illustration-2.png" alt></div>
          <div class="image"><img src="img/image_illustration-3.png" alt></div>
        </div>
        <div class="expert_block">
          <div class="expert">
            <div class="top_part">
              <div class="image"><img src="img/image_expert-1.png" alt></div>
              <div class="exeprt_name"><span> Daniel García,</span> Iniciativa Europea de Investigación, 15 años de
                experiencia en el sector médico.</div>
            </div>
            <div class="text"><span>
                El Revitaprost puede ser llamado una innovación en la urología. </span> Una simple fórmula de 3 etapas
              puede ayudar a reducir la inflamación de la próstata. Los ingredientes activos del Revitaprost penetran en
              la próstata inflamada, facilitando y reduciendo las zonas inflamadas. De esta manera, la glándula
              prostática regresa a su tamaño normal. <strong> Por eso recomiendo este producto a todos mis pacientes que
                no experimentan dolor abdominal.</strong></div>
          </div>
          <div class="expert">
            <div class="top_part">
              <div class="image"><img src="img/image_expert-2.png" alt></div>
              <div class="exeprt_name"><span> Lorenzo Torres</span> Asociación Europea de Urología, 14 años de
                experiencia en el sector médico.</div>
            </div>
            <div class="text"><span> Los ingredientes de Revitaprost aumentan la capacidad natural del cuerpo para
                tratar los procesos inflamatorios. </span> De esta manera, reduce las posibilidades de cáncer e
              infertilidad en los hombres. También liberan la uretra y facilitan el flujo natural de orina y esperma.
              <strong> Les recomiendo este producto a todos los hombres que quieran ir al baño sin sentir
                dolor.</strong></div>
          </div>
          <div class="expert">
            <div class="top_part">
              <div class="image"><img src="img/image_expert-3.png" alt></div>
              <div class="exeprt_name"><span> Martino Bass, </span> Universidad de Gotemburgo, Suecia. Departamento de
                Urología, 13 años de experiencia en el sector médico.</div>
            </div>
            <div class="text"><span> Les recomiendo Revitaprost a todos los hombres que quieran volver a sentirse
                fuertes. </span> Es una solución rápida y eficaz para los hombres que están cansados de ver sangre en su
              orina y esperma. Gracias al complejo de ingredientes naturales, también se restaura la función
              sexual.<strong></strong></div>
          </div>
        </div>
      </div>
    </section>
    <section class="ingredients">
      <div class="wrapper">
        <div class="title"> La eficacia de Revitaprost, </div>
        <div class="subtitle"> se debe a los ingredientes que facilitan la micción.</div>
        <div class="slider_container">
          <div class="slider_ingred">
            <div class="item item_first">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-1.png" alt></div>
                <div class="name"> Extracto de calabaza</div>
              </div>
              <div class="text"> Trata la irritación de la vejiga, las infecciones de riñón y los problemas de
                hiperplasia benigna en la próstata.</div>
            </div>
            <div class="item item_second">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-2.png" alt></div>
                <div class="name"> Extracto de raíces de Pyramum Africanum</div>
              </div>
              <div class="text"> Este ingrediente se utiliza para tratar el dolor causado por enfermedades renales,
                problemas urinarios, inflamación e incluso cáncer de próstata.</div>
            </div>
            <div class="item item_third">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-3.png" alt></div>
                <div class="name"> Extracto del fruto de la palma</div>
              </div>
              <div class="text"> Este ingrediente es más conocido por su capacidad para tratar algunas infecciones de la
                próstata, así como para prevenir su propagación. </div>
            </div>
            <div class="item item_fourth">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-4.png" alt></div>
                <div class="name"> Zinc</div>
              </div>
              <div class="text"> Este importante micro elemento trata la infertilidad masculina, normaliza la producción
                de testosterona y promueve la espermatogénesis. </div>
            </div>
            <div class="item item_fifth">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-5.png" alt></div>
                <div class="name"> Miel</div>
              </div>
              <div class="text"> Otro mineral que apoya la salud de los hombres al aumentar la libido.</div>
            </div>
            <div class="item item_sixth">
              <div class="top_part">
                <div class="image"><img src="img/image_ingred-6.png" alt></div>
                <div class="name"> Vitamina E</div>
              </div>
              <div class="text"> Esta vitamina se disuelve en la grasa. El principal curso de acción de la vitamina
                tiene por objeto mejorar las tasas de fertilidad en los hombres.</div>
            </div>
          </div>
        </div>
        <div class="labels">
          <div class="europe">
            <p> Hecho en Europa</p><span> Se ajusta por completo</span><span> a todos los estándares de calidad de la
              UE.</span>
          </div>
          <div class="vegan"> Desarrollado en Israel</div>
        </div>
        <div style="font-size: 12px; text-align: center"> No se recomienda su uso con anticoagulantes </div>
      </div>
    </section>
    <section class="results">
      <div class="wrapper">
        <div class="title_part">
          <div class="title"> <span> Revitaprost ha ayudado a 4512 hombres </span> restaurando por completo el tamaño
            normal de la próstata en la última etapa del ensayo clínico</div>
          <div class="subtitle"> La seguridad de los ingredientes es cuidadosamente comprobada y garantizada</div>
        </div>
        <div class="right_part"> Los resultados de pruebas recientes han confirmado que<span> Revitaprost es el mejor
            producto </span> en el mercado. En diciembre de 2018, la Asociación Europea de Urólogos llevó a cabo ensayos
          con 4 512 pacientes de entre 36 a 60 años de edad.</div>
        <div class="result_title"> Los resultados fueron los siguientes:</div>
        <div class="result_table">
          <div class="item">
            <div class="item_title"> Otros métodos</div>
            <div class="item_items">
              <div class="item_item">
                <div class="item_diagramme"> <span> 50%</span></div>
                <div class="item_subtitle"> Reducción del dolor y ardor</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"> <span> 57%</span></div>
                <div class="item_subtitle"> Normalización de la micción</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"> <span> 73%</span></div>
                <div class="item_subtitle"> Utilidad a largo plazo</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"> <span> 62%</span></div>
                <div class="item_subtitle"> Número de efectos secundarios</div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item_title"> <img src="img/logo.png" alt></div>
            <div class="item_items">
              <div class="item_item">
                <div class="item_diagramme"><span> 100%</span></div>
                <div class="item_subtitle"> Reducción del dolor y ardor</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"><span> 98%</span></div>
                <div class="item_subtitle"> Normalización de la micción</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"><span> 97%</span></div>
                <div class="item_subtitle"> Utilidad a largo plazo</div>
              </div>
              <div class="item_item">
                <div class="item_diagramme"><span> 99%</span></div>
                <div class="item_subtitle"> Número de efectos secundarios</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bottom_section">
      <div class="wrapper">
        <div class="product hide_on_mobile"><img src="img/offer2.png" alt style="max-width:50%"></div>
        <div class="text_part">
          <div class="text"> ¡Revitaprost es un producto clínicamente comprobado<span> que eliminará la prostatitis para
              siempre!</span></div>
          <div class="product show_on_mobile"><img src="img/offer2.png" alt style="max-width:50%"></div><a
            class="scroll_to_button button" href="#scroll_to_form">
            <button class="button_submit" type="submit"><span> Pedir Revitaprost</span></button></a>
        </div>
      </div>
    </section>
    <section class="reviews">
      <div class="wrapper">
        <div class="title"> ¡Historias de éxito de hombres que ganaron la batalla con la prostatitis!</div>
        <div class="subtitle"> Ejemplos de los comentarios que recibimos cada mes</div>
        <div class="slider_container">
          <div class="slider_review">
            <div class="review">
              <div class="top_part">
                <div class="image"><img src="img/image_review-1.png" alt></div>
                <div class="review_name">
                  <div class="name"><span> Luis</span> Lima</div>
                  <div class="email"> ***zzar*@libero.com</div>
                </div>
              </div>
              <div class="text"> No podía imaginar como sería ir al baño sin sentir dolor. Orinar era una verdadera
                tortura para mí porque cada vez que iba al baño, sentía como si navajas afiladas salieran de mi pena.
                Sólo Revitaprost me ayudó a resolver este problema. Fue un verdadero milagro. Sólo me tomó 4 semanas,
                así que ahora puedo orinar sin dolor.</div>
            </div>
            <div class="review">
              <div class="top_part">
                <div class="image"><img src="img/image_review-2.png" alt></div>
                <div class="review_name">
                  <div class="name"><span> Alberto,</span> Arequipa</div>
                  <div class="email"> ***bert***@yahoo.com</div>
                </div>
              </div>
              <div class="text"> Le tengo miedo a las cirugías. Tuve un problema de urología y conozco esta experiencia.
                No se puede oír nada, pero se puede ver todo. Ves en el reflejo cómo el doctor trata tu cuerpo con un
                bisturí. Estuve en el ejército, así que no soy un débil de corazón, pero fue una pesadilla. No quería
                repetir esa experiencia, por eso elegí Revitaprost. Tres semanas después, vi los resultados. Dejé de
                sentir dolor en la ingle y de sacar orina con sangre. </div>
            </div>
            <div class="review">
              <div class="top_part">
                <div class="image"><img src="img/image_review-3.png" alt></div>
                <div class="review_name">
                  <div class="name"><span> Antonio,</span> Callao</div>
                  <div class="email"> *gel****@gmx.com</div>
                </div>
              </div>
              <div class="text"> Mi médico me recetó Revitaprost porque pensó que era la única posibilidad de que me
                deshiciera del dolor en el estómago. Era tan antinatural ver sangre en mi ropa interior por la mañana en
                lugar de una erección. Orinar se convirtió en un infierno. Incluso intenté beber menos agua para no ir
                al baño tan frecuente. En un mes, fui capaz de recuperarme por completo. No más dolor y no más sangre.
              </div>
            </div>
            <div class="review">
              <div class="top_part">
                <div class="image"><img src="img/image_review-4.png" alt></div>
                <div class="review_name">
                  <div class="name"><span> Nicolas,</span> Trujillo</div>
                  <div class="email"> Nico****@libero.com</div>
                </div>
              </div>
              <div class="text"> Cáncer. Eso es lo que realmente me asustó cuando el doctor me diagnosticó prostatitis
                avanzada. Y muchas veces tenía problemas al ir al baño por la noche. Durante un tiempo, incluso pensé en
                usar pañales. Mi médico me ayudó mucho al hablarme de Revitaprost. El tratamiento duró unas pocas
                semanas, y la próstata volvió a la normalidad. Ahora no tengo más preocupaciones sobre el cáncer, y no
                hay más pensamientos sobre pañales para adultos. </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faq">
      <div class="wrapper">
        <div class="image"><img src="img/image_faq.png" alt></div>
        <div class="title">FAQ</div>
        <div class="accordion_container">
          <div class="accordion">
            <div class="accordion_title"> ¿Qué es Revitaprost?</div>
            <div class="accordion_body"><span> Revitaprost </span> es un producto único que ayuda a tratar la
              prostatitis en tres etapas. Las sustancias activas penetran profundamente en las células de la próstata
              inflamada y normalizan sus funciones. De tal forma pueden regresar la próstata a su tamaño normal.</div>
          </div>
          <div class="accordion">
            <div class="accordion_title"> ¿Cómo es mejor tomar Revitaprost?</div>
            <div class="accordion_body">
              <div class="minimum">
                <div class="left_part"> El tratamiento mínimo<span> 21 días</span></div>
                <div class="right_part">
                  <ul class="list">
                    <li> Tomar una cápsula 3 veces al día antes de comer</li>
                    <li> Restaura la glándula prostática, normaliza la micción y elimina el dolor abdominal.</li>
                  </ul>
                </div>
              </div>
              <div class="optimal">
                <div class="left_part"> Tratamiento óptimo<span> 2 meses</span></div>
                <div class="right_part">
                  <ul class="list">
                    <li> Tomar una cápsula 3 veces al día antes de comer</li>
                    <li> Restaura la glándula prostática, normaliza la micción, elimina el dolor abdominal, aumenta la
                      libido, elimina la disfunción eréctil, mejora la espermatogénesis y la fertilidad.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion_title"> ¿Hay efectos secundarios?</div>
            <div class="accordion_body"> Si no eres alérgico a los componentes del producto, entonces es completamente
              seguro. ¡Los ensayos clínicos han demostrado que<span> el producto no tiene efectos secundarios!</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="delivery">
      <div class="back_left"></div>
      <div class="wrapper">
        <div class="left_part">
          <div class="content_part">
            <div class="title"> ¿Cómo pedir?</div>
            <div class="order_items">
              <div class="order_item">
                <div class="image"><img src="img/image_order_1.png" alt></div>
                <div class="text">
                  <p class="subtitle"> Rellena el formulario en nuestro sitio web</p><span> (Nombre y teléfono)</span>
                </div>
              </div>
              <div class="order_item">
                <div class="image"><img src="img/image_order_2.png" alt></div>
                <div class="text">
                  <p class="subtitle"> Confirma tu dirección y fecha de entrega</p><span> (Un ejecutivo te llamará
                    después de realizar el pedido)</span>
                </div>
              </div>
              <div class="order_item">
                <div class="image"><img src="img/image_order_3.png" alt></div>
                <div class="text">
                  <p class="subtitle"> Recibe el producto y paga</p><span> (Pago contra entrega al mensajero)</span>
                </div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="right_part">
          <div class="subtitle"> <span> ¡Envío</span> rápido!</div>
          <ul class="list">
            <li> Obtendrás Revitaprost de 1 a 3 días después de realizar el pedido.</li>
            <li> ¡Pagarás solo después de recibir el producto!</li>
            <li> Embalaje 100% seguro, anonimato para la entrega y la facturación.</li>
          </ul>
          <!-- <div class="items">
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
          </div> -->
          <div class="country_part">
            <div class="discreet_part"> Tu pedido se colocará en una caja segura sin especificar el tipo y origen del
              contenido.<div class="discreet"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="final">
      <div class="wrapper">
        <div class="final__image"></div>
        <div class="final__colums">
          <div class="final__left">
            <div class="final__site_title"> ¡Revitaprost es tu poderosa arma contra la prostatitis!</div>
            <ul class="final__list">
              <li class="final__list__item"> <strong> ¡Deshazte de la prostatitis</strong></li>
              <li class="final__list__item"> <strong> No más sangre en la orina y esperma</strong></li>
              <li class="final__list__item"> <strong> Aumenta la libido</strong></li>
              <li class="final__list__item"> <strong> Sin efectos secundarios</strong></li>
            </ul>
            <div class="final__product"><img src="img/offer2.png" alt style="max-width:80%">
              <ul class="final__ser_list">
                <li class="final__ser_item"></li>
                <li class="final__ser_item"></li>
                <li class="final__ser_item"></li>
                <li class="final__ser_item"></li>
              </ul>
            </div>
          </div>
          <div class="final__right">
            <div class="form_top final__form">
              <div id="scroll_to_form"></div>
              <div class="form_top__discount wv_discount"> -50%</div>
              <div class="form_top__price_container">
                <div class="form_top__price_old">
                  <div class="form_top__price_old_label"> Precio al por menor:</div>
                  <div class="form_top__price_old_value"><span class="wv_old-price">S./ 320</span><span
                      class="wv_currency"></span></div>
                </div>
                <div class="form_top__price_new">
                  <div class="form_top__price_val"><span class="wv_new-price">S./ 160</span><span
                      class="wv_currency"></span>
                    <div class="form_top__icon_new">¡Novedad!</div>
                  </div>
                  <div class="form_top__price_label"> +<span> ENVÍO</span> RÁPIDO</div>
                </div>
              </div>

              <div class="form_top__title"> ¡Pedir Revitaprost con<span><span class="wv_discount"> 50%</span> de
                  descuento!</span></div>
              <form action="order.php"  class="orderForm form wv_order-fotm" method="post" action>

                <label for> Ejemplo: Juan Quispe</label>
                <div class="form_top__field form_top__field-name">
                  <input class="form_top__input wv_name" type="text" name="name" placeholder="Nombre" required>
                </div>
                <label for> Ejemplo: +51 13635327</label>
                <div class="form_top__field form_top__field-phone">
                  <input class="form_top__input wv_phone" type="tel" name="phone" placeholder="Teléfono" required
                    maxlength="20">
                </div>
                <button class="submit_form button_submit" type="submit"><span class="big"> Pedir
                    Revitaprost</span></button>
                <div class="shields__block">
                  <div class="free-delivery">
                    <div class="free-delivery-title"> Atención: Debido a la gran atención por parte de los medios de
                      comunicación, nuestra oferta de productos está limitada. Hoy, <span class="date"> 43788</span>
                      solo hay disponibles 28 piezas.</div>
                  </div>
                </div>
            <input type="hidden" name="sub1" value="{subid}">
            <input type="hidden" name="sub2" value="{sub2}">
            <input type="hidden" name="fbpx" value="{fbpx}">
</form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="top_part">
        <div class="wrapper">
          <div class="footer_left">
            <div class="footer_warnings"><strong> Advertencia:</strong> Manténgase fuera del alcance de los niños. Deja
              de tomarlo y consulta a tu médico si desarrollas irritación. Todas las imágenes se muestran sólo a modo de
              ilustración. La composición y las técnicas de fabricación de este producto pueden variar debido a posibles
              mejoras.</div>
          </div>
          <div class="footer_right">
            <div class="logo_list"><span class="item_1"></span><span class="item_2"></span><span
                class="item_3"></span><span class="item_4"></span></div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <p style="text-align: center; display: block; margin-top: 10px; padding: 15px; box-sizing: border-box;">
    Ramsgatte LLP, 63 Thornwall Rd, CB6 5QE Wilburton, United Kingdom<br><a href="policy_es.html" target="_blank">
      Política de confidencialidad</a></p>




  <div class="feedback">
    <img src="img/i-phone.png" alt>
  </div>
  <div class="popup-window hidden">
    <div class="close-popup"></div>
    <form action="order.php"  method="POST" action>
      <label for="name2"> Ejemplo: Juan Quispe</label>
      <input id="name2" type="text" name="name" placeholder="Nombre" required>
      <label for="phone2"> Ejemplo: +51 13635327</label>
      <input id="phone2" type="tel" name="phone" placeholder="Teléfono" required>
      <button type="submit"> Pedir</button>
            <input type="hidden" name="sub1" value="{subid}">
            <input type="hidden" name="sub2" value="{sub2}">
            <input type="hidden" name="fbpx" value="{fbpx}">
</form>
  </div>

  <link rel="stylesheet" href="css/app.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/date.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.ldrock.com/additionals.js?geo=ES"></script>

  <style>
    .feedback {
      width: 75px;
      height: 70px;
      position: fixed;
      right: -15px;
      top: 15%;
      display: flex;
      align-items: center;
      background-color: #af2c4b;
      padding-left: 10px;
      border-top-left-radius: 35px;
      border-bottom-left-radius: 35px;
      cursor: pointer;
      z-index: 1000;
      box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.3);
      transition: all .5s;
    }

    .feedback:hover {
      right: 0;
    }

    .popup-window {
      font-family: inherit;
      width: 300px;
      position: fixed;
      right: 0%;
      top: 12%;
      padding: 35px 10px;
      background: #fff;
      border-radius: 5px;
      z-index: 2000;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
    }

    .hidden {
      right: -100%;
    }

    .popup-window form {
      width: 100%;
      min-height: auto;
      padding: 0;
      background: inherit;
      box-shadow: none;
    }

    .popup-window label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #333;
      text-transform: uppercase;
    }

    .popup-window input {
      box-sizing: border-box;
      width: 100%;
      height: auto;
      margin-bottom: 10px;
      padding: 10px;
      border: none;
      font-family: inherit;
      font-size: 16px;
      margin-bottom: 15px;
      border: 1px solid #333;
    }

    .popup-window button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #af2c4b;
      color: #fff;
      cursor: pointer;
      font-family: inherit;
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      margin-top: 15px;
      border-radius: 20px;
    }

    .close-popup {
      position: absolute;
      right: 10px;
      top: 5px;
      width: 27px;
      height: 27px;
      background-color: #fff;
      cursor: pointer;
    }

    .close-popup:before {
      content: "";
      background: #333;
      width: 20px;
      height: 1px;
      position: absolute;
      top: 13px;
      left: 4px;
      transform: rotate(-45deg);
    }

    .close-popup:after {
      content: "";
      background: #333;
      width: 20px;
      height: 1px;
      position: absolute;
      top: 13px;
      left: 4px;
      transform: rotate(45deg);
    }

    @media (max-width: 480px) {
      .feedback {
        width: 60px;
        height: 40px;
        padding-left: 7px;
      }

      .feedback img {
        max-width: 30px;
      }
    }
  </style>
    <!-- Facebook Pixel Code -->
  <script>
      !function (f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function () {
              n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
      }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?=$_GET["fbpixel"]?>');
      fbq('track', 'PageView');
  </script>
  <noscript>
      <img height="1" src="https://www.facebook.com/tr?id=<?=$_GET["fbpixel"]?>&amp;ev=PageView&amp;noscript=1"
           style="display:none" width="1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

<script type="text/javascript" src="https://cdn.ldrock.com/validator.js"></script>
<script type="text/javascript">
    LeadrockValidator.init({
        geo: {
            iso_code: 'PE'
        }
    });
</script>
</body><!--    Feedback-->

</html>