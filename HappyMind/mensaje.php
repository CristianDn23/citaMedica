<?php  

class ControladorMensaje{

static public function ctrEnvio(){
  

$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
//$headers = 'From: local@example.com' . "\r\n" .'Reply-To: local@example.com';
    if (isset($_POST["name"])) {
      

      $enviar = "HappyMindAsoc.gmail.com";
      $asunto = "correo enviado desde www.HappyMind.com";
      $mensaje_enviar = 'De:'.$_POST["name"].'<br>';
      $mensaje_enviar .= 'Correo:'.$_POST["email"].'<br>';
      $mensaje_enviar .= 'Asunto:'.$_POST["asunto"].'<br>';
      $mensaje_enviar .= 'Mensaje:'.$_POST["mensaje"].'<br>';

      mail($enviar, $asunto, $mensaje_enviar, $headers);


        echo '<script> 
                
                Swal.fire(
          "Excelente!",
          "Su mensaje ha sido enviado!",
          "success"
        )
          </script>';


          }
          

        }

        }