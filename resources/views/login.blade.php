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
   <header class="bg-blanco-humo animated fadeInDown position-relative">
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
         <section class="row position-relative py-3 align-items-center border-top border-bottom" style="border-color: 1.5px solid rgba(0,0,0,.7);">
               <!--Logotipo-->
               <div class="col-5 col-lg-3 d-flex justify-content-between align-items-center">
                  <a href="" class="w-100 h-100 d-block" style="max-width: 200px;">
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
               <div class="col-7 col-lg-3 d-flex align-items-center justify-content-end">
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
   <main class="main-top">
      <section class="container-fluid" style="padding: 5rem 0;">
         <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
            <h2 class="mb-0">
               INICIAR SESIÓN
            </h2>
            <div class="borde-tema"></div>
            <div class="border-bottom borde-azulado mb-4"></div>
            <h5 class="h6 noto-sans text">Por favor ingresa tus credenciales para iniciar sesión</h5>
            <form class="form">
               <label for="">Email</label>
               <input type="email" placeholder="email@dominio.com">
               <label for="">Contraseña</label>
               <input type="password" placeholder="********">
               <button type="button">iniciar sesión</button>
            </form>
            <p class="text-center">¿No tienes una cuenta? <a href="{{route('registro')}}">registrarse</a></p>
         </div>
      </section>
   </main>
   <!-- Fin Main-->

   <!--Footer-->
   <footer class="footer bg-blanco-humo">
      <div class="container">
         <div class="row">
            <div class="col-12 mb-4 col-md-6 col-lg-3">
               <h1>Impulsat</h1>
               <div class="d-flex"> 
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
               <h1>Conéctate con Impulsat</h1>
               <div class="d-flex">
                  <i class="fas fa-mail-bulk"></i>
                  <ul>
                     <li><a href="">Soporte al cliente</a></li>
                     <li><a href=""> Términos y condiciones</a> </li>
                     <li><a href="">Servicios para proveedores </a> </li>
                     <li><a href="">+53 976 643 140</a></li>
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
                     <li><a href="">Iniciar sesión</a></li>
                     <li><a href="">Registrarse</a></li>
                     <li><a href="">Mi lista de deseos</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12 text-center small pt-3">
               © 2020, Todos los derechos reservados - ImpulsaT
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