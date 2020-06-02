
@extends('template')

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Impulsate</title>
</head>
<body>
   <!--Header-->
   <!--https://styde.net/urls-en-laravel/-->
   <header class="bg-blanco-humo animated fadeInDown position-relative">
      <div class="container-fluid">
         <div class="row py-2">
            <div class="col-12 col-md-6">
            <small class="px-2"><a href="{{route('inicio')}}" class="link-primary">Inicio</a></small>
            <small class="px-2"><a href="{{route('nosotro')}}" class="link-primary">Acerca de</a></small>
            <small class="px-2"><a href="{{route('servicios')}}"" class="link-primary">Servicios</a></small>
            </div>
            <div class="d-none d-md-inline-block col-md-6 text-right">
               <small>
                  <a href="" class="link-primary"><i class="fab fa-facebook-f mr-3"></i></a>
                  <a href="" class="link-primary"><i class="fab fa-instagram mr-3"></i></a>
                  <a href="" class="link-primary"><i class="fab fa-whatsapp mr-2"></i> +53 973 643 140</a>
               </small>
            </div>
         </div>
         <section class="row position-relative py-3 align-items-center border-top borde-gris">
               <!--Logotipo-->
               <div class="col-3 col-lg-3 d-flex justify-content-between align-items-center">
                  <a href="" class="w-100 h-100 d-block" style="max-width: 200px;">
                     <img src="img/coete.png" style="height: 55px;" class="d-sm-none ">
                     <img src="img/logor.png" style="height: 55px;" class="d-none d-sm-inline-block ">
                  </a>
                  <button class="d-none d-lg-inline-block boton-circular" data-button = "boton-abrir-web">
                     <i class="fa fa-bars fa-size-2x texto-plomo"></i>
                  </button>

               </div>
               <div class="col-lg-6 bg-blanco-humo" id="contenedor-frm-buqueda">
                  <!--Buscador Principal-->
                  <form class="frm-buqueda">
                     <select>
                           <option>Todas</option>
                           <option>Calzado</option>
                           <option>Medicina</option>
                           <option>Restaurantes</option>
                     </select>
                     <input type="text" placeholder="Nombre del producto">
                     <button type="submit">Buscar</button>
                  </form>
               </div>
               <div class="col-9 col-lg-3 d-flex align-items-center justify-content-end">
                  <!--Favoritos-->
                  <a href="" class="mr-3 boton-circular">
                     <i class="far fa-heart fa-size-2x"></i>
                     <span>1</span>
                  </a>
                  <!--Usuarios-->                  
                  <a href="{{route('loginn')}}" class="d-block link-primary mr-3 text-right">
                     <small class="d-block">Invitado!</small>
                     <small>iniciar sesión</small>
                  </a>
                  <a href="" class=" boton-user">
                     <i class="far fa-user fa-size-2x"></i>
                  </a>
                  <!--Boton MenúMovil-->
                  <button class="d-lg-none boton-circular" data-button = "boton-abrir">
                     <i class="fa fa-bars fa-size-2x"></i>
                  </button>
               </div>
         </section>
      </div>

   </header>
   <!--Menu de Categorías-->
   <div class="fondo-modal" data-button="boton-cerrar"></div>
   <nav class="contenedor-categorias shadow animated">
      <h2 class="text-primary">Categorías <span class="boton-cerrar" data-button="boton-cerrar"></span></h2>
         <ul>
            <li>
               Calzado
               <a href="">Damas</a>
               <a href="">Caballeros</a>
               <a href="">Niños</a>
            </li>
            <li>
               Alimentos
               <a href="">Carnes</a>
               <a href="">Pastas</a>
               <a href="">Pescados</a>
               <a href="">Postres</a>
            </li>
            <li>
               Electrodomésticos
               <a href="">Linea Blanca</a>
               <a href="">Televisores y Celulares</a>
            </li>
            <li>
               Belleza
               <a href="">Maquillaje</a>
               <a href="">Cremas</a>
            </li>
            <li>
               Libros y Revistas
               <a href="">Cuentos Para niños</a>
               <a href="">Novelas</a>
            </li>
         </ul>
   </nav>
   <!--Fin Header-->

   <!-- Main -->
   <main class="main-top">
      <!--Banner Publicitario-->
      <section class="container-fluid">
         <div class="row">
               <div class="col-12 col-lg-7 col-xl-8 mb-3 mb-lg-0 animated fadeInLeft">
                  <div class="swiper-container w-100 h-100 shadow" id="banner1">
                     <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="item-banner" style="background-color: #003ECA;">
                                 <img src="img/banner1.png" alt="">
                                 <div class="description text-white">
                                    <h2>Productos Destacados</h2>
                                    <h1>Gran Oferta Cuarentena</h1>
                                    <h3>Hasta 40% de descuento</h3>
                                    <a href="">Consíguelo ahora</a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item-banner" style="background-color: #D22326;">
                                 <img src="img/banner4.png" alt="">
                                 <div class="description text-white">
                                    <h2>Delivery Hot</h2>
                                    <h1>Llevamos tu pedido en donde estés</h1>
                                    <h3>Todas las entregas son gratuitas</h3>
                                    <a href="">Consultar ahora</a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="item-banner" style="background-color: #FFD800;" >
                                 <img src="img/banner2.png" alt="">
                                 <div class="description">
                                    <h2>Productos de gran venta</h2>
                                    <h1>Bebidas Mixtas de Salud Nutritiva</h1>
                                    <h3>A Sólo S/. 3.99</h3>
                                    <a href="">Consíguelo ahora</a>
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
               <div class="col-12 col-lg-5 col-xl-4 animated fadeInRight">
                  <div class="row">
                     <div class="col-12 col-md-6 col-lg-12 pl-lg-0">
                           <div class="tarjeta shadow rounded mb-3" style="width: 100%;height: 200px;background-color: #8910CE;">
                              <a href="">
                                 <h2 class="text-light">Ropa para niños y Niñas</h2>
                                 <h6 class="text-light">Vestido DOKY</h6>
                              </a>
                              <img src="img/anuncio1.png" alt="">
                           </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-12 pl-lg-0">
                           <div class="tarjeta shadow rounded" style="width: 100%;height: 200px; background-color: #002C51;">
                              <a href="">
                                 <h2 class="text-light">Entregas Delivery o Presencial</h2>
                                 <h6 class="text-light">Consultas cuarentena</h6>
                              </a>
                              <img src="img/delivery.png" alt="">
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </section>
      <!--Fin Banner Publicitario-->

      <!--Detalles de Servicios-->
      <section class="container-fluid">
         <div class="swiper-container shadow-sm bg-white rounded" id="servicio1">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="item-servicio border-right borde-azulado">
                        <span>
                           <i class="fas fa-shipping-fast"></i>
                        </span>
                        <div>
                           <h2>Envío Gratis</h2>
                           <h3>Envío Gratis en Todos los pedidos</h3>
                        </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item-servicio border-right borde-azulado">
                        <span>
                           <i class="fas fa-retweet"></i>
                        </span>
                        <div>
                           <h2>Garantía de Dinero</h2>
                           <h3>Te devolvemos tu dinero en 30 días</h3>
                        </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item-servicio border-right borde-azulado">
                        <span>
                           <i class="fas fa-headset"></i>
                        </span>
                        <div>
                           <h2>Soporte en Línea</h2>
                           <h3>Soporte Técnico 24/7</h3>
                        </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="item-servicio">
                        <span>
                           <i class="far fa-user"></i>
                        </span>
                        <div>
                           <h2>Descuento a Miembros</h2>
                           <h3>Hasta 30% de descuento</h3>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Fin Detalles de Servicios-->

      <!--Tienda Productos-->
      <section class="container-fluid">
         <div class="row">
            <aside class="col-12 col-lg-4 col-xl-3 mb-3">
               <div class="row py-2">
                  <img src="img/anuncion.jpg" alt="" class="col-12 col-md-4 col-lg-12 mb-4 mb-md-0 mb-lg-4">
                  <!--Top más Vendidos-->
                  <div class="col-12 col-md-8 col-lg-12 d-none d-md-inline-flex">
                     <div class="container">
                        <div class="row pt-3">
                           <div class="d-none d-md-inline-block col-12 ">
                              <h2 class="mb-0 h4 poppins">
                                 <b>Top</b><span class="f-300"> más vendido</span>
                              </h2>
                           </div>
                           <div class="d-none d-md-inline-block col-md-6 col-lg-12">
                              <a href="#" class="tarjeta-top">
                                 <img src="img/zapatillasReebok.png" alt="">
                                 <div class="detalle">
                                    <h2>Zapatillas Reebok Rojas</h2>
                                    <small>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                    </small>
                                    <ins>S/. 294.00</ins>
                                 </div>
                              </a>
                           </div>
                           <div class="d-none d-md-inline-block col-md-6 col-lg-12">
                              <a href="#" class="tarjeta-top">
                                 <img src="img/adidas-polo-club.png" alt="">
                                 <div class="detalle">
                                    <h2>Zapatillas Reebok Rojas</h2>
                                    <small>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                    </small>
                                    <ins>S/. 294.00</ins>
                                 </div>
                              </a>
                           </div>
                           <div class="d-none d-lg-inline-block col-12 ">
                              <a href="#" class="tarjeta-top">
                                 <img src="img/adidas-mochila-morada.png" alt="">
                                 <div class="detalle">
                                    <h2>Zapatillas Reebok Rojas</h2>
                                    <small>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                    </small>
                                    <ins>S/. 294.00</ins>
                                 </div>
                              </a>
                           </div>
                           <div class="d-none d-lg-inline-block col-12 ">
                              <a href="#" class="tarjeta-top">
                                 <img src="img/bolso3.png" alt="">
                                 <div class="detalle">
                                    <h2>Zapatillas Reebok Rojas</h2>
                                    <small>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                    </small>
                                    <ins>S/. 294.00</ins>
                                 </div>
                              </a>
                           </div>
                           <div class="d-none d-lg-inline-block col-12 ">
                              <a href="#" class="tarjeta-top">
                                 <img src="img/meadias-adidas.png" alt="">
                                 <div class="detalle">
                                    <h2>Zapatillas Reebok Rojas</h2>
                                    <small>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                    </small>
                                    <ins>S/. 294.00</ins>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--Fin Top más Vendidos-->

               </div>
            </aside>
            <div class="col-12 col-lg-8 col-xl-9 container-fluid">
               <div class="p-3 mb-3">
                  <!--Nuevos Productos-->
                  <div class="row py-2 justify-content-between">
                     <div class="col-9">
                        <h2 class="mb-0 h4 poppins">
                           <b>Lo más</b><span class="f-300"> nuevo</span>
                        </h2>
                     </div>
                     <div class="col-3">
                        <ol class="botones-flechas">
                           <li id="prev-nuevos"><i class="fas fa-chevron-left"></i></li>
                           <li id="next-nuevos"><i class="fas fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
                  <div class="swiper-container" id="bestproducts">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="row">
                              <div class="col-12 col-md-4 mb-4 mb-md-0">
                                 <div class="img-producto">
                                    <img src="img/adidas-mochila-morada.png" class="img-contain">
                                 </div>
                              </div>
                              <div class="col-12 col-md-8">
                                 <div class="tarjeta-detalle">
                                    <article>
                                       <h5 class="noto-sans">Adidas Mochila Morada</h5>
                                       <h4>S/. 209.00</h4>
                                       <h6>Disponibilidad: <var>En Stock</var></h6>
                                       <p>
                                          ®️🥇ADIDAS, Polo-Club-Wine, con la garantía PANDORA🥇®️
                                          ✈️🚌 Envíos a nivel nacional 🚌✈️
                                       </p>
                                    </article>
                                       <button type="button" class="boton-carrito btn-block">COMPRAR</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="row">
                              <div class="col-12 col-md-4 mb-4">
                                 <div class="img-producto">
                                    <img src="img/mochila-cat.png" class="img-contain">
                                 </div>
                              </div>
                              <div class="col-12 col-md-8">
                                 <div class="tarjeta-detalle ">
                                    <article>
                                       <h5 class="noto-sans">Cat Mochila Amarilla</h5>
                                       <h4>S/. 169.00</h4>
                                       <h6>Disponibilidad: <var>En Stock</var></h6>
                                       <p>
                                          ®️🥇ADIDAS, Polo-Club-Wine, con la garantía PANDORA🥇®️
                                          ✈️🚌 Envíos a nivel nacional 🚌✈️
                                       </p>
                                    </article>
                                       <button type="button" class="boton-carrito btn-block">COMPRAR</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="row">
                              <div class="col-12 col-md-4 mb-4">
                                 <div class="img-producto">
                                    <img src="img/fox-mochila-celeste.png" class="img-contain">
                                 </div>
                              </div>
                              <div class="col-12 col-md-8">
                                 <div class="tarjeta-detalle ">
                                    <article>
                                       <h3>Fox Mochila Celeste</h3>
                                       <h4>S/. 240.00</h4>
                                       <h6>Disponibilidad: <var>En Stock</var></h6>
                                       <p>
                                          ®️🥇ADIDAS, Polo-Club-Wine, con la garantía PANDORA🥇®️
                                          ✈️🚌 Envíos a nivel nacional 🚌✈️
                                       </p>
                                    </article>
                                       <button type="button" class="boton-carrito btn-block">COMPRAR</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="row">
                              <div class="col-12 col-md-4 mb-4">
                                 <div class="img-producto">
                                    <img src="img/mochila-negra.png" class="img-contain">
                                 </div>
                              </div>
                              <div class="col-12 col-md-8">
                                 <div class="tarjeta-detalle ">
                                    <article>
                                       <h3>DC Mochila Negra</h3>
                                       <h4>S/. 240.00</h4>
                                       <h6>Disponibilidad: <var>En Stock</var></h6>
                                       <p>
                                          ®️🥇ADIDAS, Polo-Club-Wine, con la garantía PANDORA🥇®️
                                          ✈️🚌 Envíos a nivel nacional 🚌✈️
                                       </p>
                                    </article>
                                       <button type="button" class="boton-carrito btn-block">COMPRAR</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--Fin Nuevos Productos-->
               </div>
               <div class="p-3 mb-3">
                  <!--Lo más pedido-->
                  <div class="row py-2 justify-content-between">
                     <div class="col-9">
                        <h2 class="mb-0 h4 poppins">
                           <b>Lo más</b><span class="f-300"> pedidos</span>
                        </h2>
                     </div>
                     <div class="col-3">
                        <ol class="botones-flechas">
                           <li id="prev-oferta"><i class="fas fa-chevron-left"></i></li>
                           <li id="next-oferta"><i class="fas fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
                  <div class="swiper-container" id="ofertas1">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/adidas-polo-club.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas Polo-Club-Wine</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/WhatsApp Image 2020-05-14 at 11.58.20 AM.jpeg" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas-Medias Urbana</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/adidas-polo-marron.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas Polo-Graphic</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/zapatillasReebok.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href=""> Zapatillas Reebook Royal Complete</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/zapatos-negros.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso1.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso2.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso3.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">AGREGAR CARRITO</button>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
                  <!--Fin Lo más pedido-->
               </div>
               <!--Publicidad-->
               <div class="row">
                  <div class="col-12 col-md-6 mb-3">
                     <div class="tarjeta2 rounded shadow" style="background-color: #5E5196;">
                        <img src="img/colgador.png" alt="">
                        <div class="caption">
                           <h1>Love Outfit</h1>
                           <h2>Gran oferta con descuentazos</h2>
                           <a href="">Descrubre Ahora</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div class="tarjeta2 rounded shadow" style="background-color: #2E4BDB;">
                        <img src="img/cartera-guess.png" alt="">
                        <div class="caption">
                           <h1>Cartera Guess</h1>
                           <h2>Recién llegados en carteras a los mejores precios</h2>
                        <a href="">Descubre Ahora</a>
                        </div>

                     </div>
                  </div>
               </div>
               <!--Fin Publicidad-->
            </div>
         </div>
      </section>
      <!--Fin Tienda Productos-->

      <section class="container-fluid">
         <div class="row align-items-center">
            <aside class="col-12 col-md-6 col-lg-4 col-xl-3">
               <!--Mensaje -->
               <div class="tarjeta-persona shadow">
                  <p class="cuerpo">
                     <i class="fas fa-quote-left"></i>
                     Una regla simple y potente: Siempre hay que oferecer más delo que el cliente espera.
                  </p>
                  <img src="img/joselo.jpg" alt="" class="foto">
                  <h4 class="text-primary">José Luis Morillo</h4>
                  <span class="text-secundary">Empresario Profesional</span>
               </div>
               <!--Fin Mensaje -->
            </aside>
            <div class="col-12 col-md-6 col-lg-8 col-xl-9 container-fluid">
               <div class="p-3 mb-3">
                  <!--Lo más pedido-->
                  <div class="row py-2 justify-content-between">
                     <div class="col-9">
                        <h2 class="mb-0 h4 poppins">
                           <b>Especiales</b><span class="f-300"> recomendados</span>
                        </h2>
                     </div>
                     <div class="col-3">
                        <ol class="botones-flechas">
                           <li id="prev-recomendado"><i class="fas fa-chevron-left"></i></li>
                           <li id="next-recomendado"><i class="fas fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
                  <div class="swiper-container" id="recomendados1">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/adidas-polo-club.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas Polo-Club-Wine</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/WhatsApp Image 2020-05-14 at 11.58.20 AM.jpeg" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas-Medias Urbana</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/adidas-polo-marron.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Adidas Polo-Graphic</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/zapatillasReebok.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href=""> Zapatillas Reebook Royal Complete</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/zapatos-negros.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso1.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso2.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">COMPRAR</button>
                              </figcaption>
                           </figure>
                        </div>
                        <div class="swiper-slide">
                           <figure class="tarjeta-producto">
                              <div class="tarjeta-insignia">-8%</div>
                              <img src="img/bolso3.png" class="tarjeta-img">
                              <div class="tarjeta-acciones">
                                 <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                    <i class="far fa-eye"></i>
                                 </a>
                                 <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                    <i class="far fa-heart"></i>
                                 </a>
                              </div>
                              <figcaption class="tarjeta-caption">
                                 <h3>
                                    <a href="">Polera Gzuck azul</a>
                                 </h3>
                                 <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                 <button type="button" class="boton-carrito">AGREGAR CARRITO</button>
                              </figcaption>
                           </figure>
                        </div>
                     </div>
                  </div>
                  <!--Fin Lo más pedido-->
               </div>
            </div>
         </div>
      </section>
      <!--Brands-->
      <section class="container-fluid">
         <div class="brand-logo"><i></i></div>
      </section>
      <!--Fin Brands-->
   </main>
   <!-- Fin Main-->

   <!--Footer-->
   <footer class="footer bg-blanco-humo">
      <div class="container">
         <div class="row">
            <div class="col-12 mb-4 col-md-6 col-lg-3">
               <img src="img/logor.png" style="height: 55px; margin-top: -1rem;">
               <div class="d-flex mt-3">
                  <i class="fas fa-globe-americas"></i>
                  <ul>
                     <li><a href="">Trujillo-Perú</a></li>
                  </ul>
               </div>
               <a href="">
                  <i class="fab fa-facebook-f"></i>
               </a>
               <a href="">
                  <i class="fab fa-instagram"></i>
               </a>
               <a href="">
                  <i class="fab fa-whatsapp"></i>
               </a>
            </div>
            <div class="col-12 mb-4 col-md-6 col-lg-3">
               <h1>Conéctate</h1>
               <div class="d-flex">
                  <i class="fas fa-mail-bulk"></i>
                  <ul>
                     <li><a href="">Soporte al cliente</a></li>
                     <li><a href=""> Términos y condiciones</a> </li>
                     <li><a href="">Servicios para proveedores </a> </li>
                  </ul>
               </div>
            </div>
            <div class="col-12 mb-4 col-md-6 col-lg-3">
               <h1>Acerca de la empresa</h1>
               <div class="d-flex">
                  <i class="fas fa-store-alt"></i>
                  <ul>
                     <li><a href="">¿Quíenes somos?</a></li>
                     <li><a href="">El equipo</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
               <h1>Mi cuenta</h1>
               <div class="d-flex">
                  <i class="fas fa-user"></i>
                  <ul>
                     <li><a href="{{route('loginn')}}">Iniciar sesión</a></li>
                     <li><a href="{{route('registro')}}">Registrarse</a></li>
                     <li><a href="">Mi lista de deseos</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12 text-center small pt-3">
               © 2020, Todos los derechos reservados - PandoraStore
            </div>
         </div>
      </div>
   </footer>
   <!--Fin Footer-->  
   <script>
      $(function () {
         $('[data-toggle="tooltip"]').tooltip()
      })
   </script>
</body>
</html>
