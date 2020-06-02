@extends('template')
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acerca de</title>
</head>
<body>
   <!--Header-->
   <header class="bg-secundario animated fadeInDown position-relative">
      <div class="container-fluid">
         <div class="row py-2">
            <div class="col-12 col-md-6">
               <small class="px-2"><a href="{{route('inicio')}}" class="link-primary">Inicio</a></small>
               <small class="px-2"><a href="{{route('nosotro')}}" class="link-primary">Acerca de</a></small>
               <small class="px-2"><a href="{{route('servicios')}}" class="link-primary">Servicios</a></small>
            </div>
            <div class="d-none d-md-inline-block col-md-6 text-right">
               <small>
                  <a href="" class="link-primary"><i class="fab fa-facebook-f mr-3"></i></a>
                  <a href="" class="link-primary"><i class="fab fa-instagram mr-3"></i></a>
                  <a href="" class="link-primary"><i class="fab fa-whatsapp mr-2"></i> +53 973 643 140</a>
               </small>
            </div>                
         </div>
         <section class="row position-relative py-3 align-items-center border-top border-secondary">
               <!--Logotipo-->
               <div class="col-3 col-lg-3 d-flex justify-content-between align-items-center">
                  <a href="" class="w-100 h-100 d-block" style="max-width: 200px;">
                     <img src="../img/logo300x320.png" style="height: 55px;" class="d-md-none ">
                     <img src="../img/logo-web.png" style="height: 55px;" class="d-none d-md-inline-block ">
                  </a>
                  <button class="d-none d-lg-inline-block boton-circular" data-button = "boton-abrir-web">
                     <i class="fa fa-bars fa-size-2x texto-plomo"></i>
                  </button>
                  
               </div>                
               <div class="col-lg-6 bg-secundario" id="contenedor-frm-buqueda">
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
                  <button class="mr-3 boton-circular">
                     <i class="far fa-heart fa-size-2x"></i>
                     <span>1</span>
                  </button>
                  <!--Usuarios-->
                  <button class="mr-3 boton-circular">
                     <i class="far fa-user fa-size-2x"></i>
                  </button>
                  <div class="d-none d-lg-inline-block">
                  <a href="{{route('loginn')}}" class="d-block link-primary"><small>iniciar sesión</small></a>
                     <a href="{{route('registro')}}" class="d-block link-primary"><small>registrarse</small></a>
                  </div>
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
   <main class="main-top animated fadeInUp">
      <section class="swiper-container" id="servicios2">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="banner">
                  <img src="../img/vendeconnosotrs.png" alt="" class="img-cover">
                  <div class="banner-caption">
                     <h2>Digitaliza tu negocio y se parte de este movimiento</h2>
                  </div>
                  
               </div>
            </div>
            <div class="swiper-slide">
               <div class="banner">
                  <img src="../img/repartidor.png" alt="" class="img-cover">
                  <div class="banner-caption">
                     <h2>Llega a más clientes y aumenta tus ventas</h2>
                  </div>
                  
               </div>
            </div>
            <div class="swiper-slide">
               <div class="banner">
                  <img src="../img/vendedor.png" alt="" class="img-cover">
                  <div class="banner-caption">
                     <h2>Presenta a miles de personas tu producto</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-button-next text-white"></div>
         <div class="swiper-button-prev text-white"></div>
      </section>
      <section class="container text-center mt-5">
         <div class="col-10 col-md-8 mx-auto">
            <h3 class="text-primary mb-3">Impulsa Tu Negocio</h3>
            <p class="text">
               Impulsa-T consigue que tu negocio sea conocido por cientos de miles de usuarios.<br>
               Impulsa-T trae a tu negocio en un tiempo record un número impensable de nuevos clientes. Impulsa-T lanza de forma gratuita la campaña publicitaria de tu oferta a través de la web, mails y redes sociales como Facebook y Instagram.
            </p>
         </div>         
      </section>
      <section class="container text-center mb-5">
         <div class="col-10 col-md-8 mx-auto">
            <h3 class="text-primary mb-3">¿Cómo trabajar con Impulsa-T?</h3>
            <p class="text">
               Contáctanos enviandonos un correo a soporte@impulsat.com o via whatsapp a +51 973 643 140<br>
               Nuestro equipo analizará, diseñará y programará la mejor campaña para darte a conocer y para que tengas cientos de clientes con una sola acción.
            </p>
         </div>         
      </section>
   </main>
   <!-- Fin Main-->

   <!--Footer-->
   <footer class="footer bg-secundario">
      <div class="container">
         <div class="row">
            <div class="col-12 mb-4 col-md-6 col-lg-3">
               <img src="../img/logo-web.png" style="height: 55px; margin-top: -1rem;">
               <div class="d-flex"> 
                  <i class="fas fa-globe-americas"></i>
                  <ul>
                     <li><a href="">Quillabamba-Perú</a></li>
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