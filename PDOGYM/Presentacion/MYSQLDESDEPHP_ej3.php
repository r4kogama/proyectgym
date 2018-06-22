<?php
// Start the session
    require "../Negocio/paises.php";
    session_start();

    if(isset($_SESSION["select"])){
        //recupera la variable  guardada
        $seleccion = $_SESSION["select"];
    }else{
        $seleccion = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
       <style>
           html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed, 
            figure, figcaption, footer, header, hgroup, 
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure, 
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }*-
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }
            label,input{
                display: block;
                margin: 5px;    
            }
           
           li{
            padding: 20px 0px 5px 0px;			
            border: 1px solid black;
			float: left;
			width: 198px;
			height: 30px;
           }
           
           ul{ 
               overflow:  auto;
           }
           
           .titulo{
               width: 100%;
           }
           .titulo li{
                padding: 12px 0px 1px 0px;
    			width: 19.8%;
			   background: #e0d689;
			   color:white;
			   font-weight: 800;
			   text-transform: uppercase;
           }
		   
		   .ultimo{
   				 height: 30px;
			   width: 198px;
		   }
           
           body{
               overflow: auto;
           }
           h2{
               display: block;
               margin-top: 30px;
               font-size: 1.5em;
           }
           
           .caja{
			   
                width: 100%;
				max-width: 1000px;
				margin: 20px auto;
				text-align: center;
                border: 2px solid #8582d8;
           }
          
		   h1, h3{
			   margin: 10px 0px;
			   font-size: 2em;
			   text-align: center;
		   }
		   
		   form{
			   text-align: center;
		   }
           
           #formphp{
               text-align: center;

                width: 100%;

                margin: 0 auto;

                max-width: 803px;
           }
           
             #formphp  li {

            padding: 0px;
            border: 1px solid black;
            float: left;
            width: 158px;
            height: 56px;

            }
           
           label{
               background: rgba(219, 213, 71, 0.56);
           }
           formoculto{
               display: none;
           }
           .spanr{
               color: tomato;
           }
           
           .spanv{
               color: #3abf3a;
           }
       </style>
</head>
<body>
    
        <?php

           if(isset($_POST["select"])){
                //cuando hay algo seleccionado, ejecuta esta condicion
                 $sel = $_POST["select"];
                //guarda la variable en sesion
                $_SESSION["select"] = $sel;
            }else{
                //al recargar la pagina no recibe nada
                //el filtrado de sql recibira contenido vacio y no saltara un error 
                 $sel = ""; 
            }
    
        ?>
    <h1>PAISES</h1>
    <form action="MYSQLDESDEPHP_ej3.php" name="form" id="formulario" method="post">
          <select name="select" id="select">
          <option value="">-------------------Elige el pais------------------</option>
         <?php

                $pais = new paises();
                $listadopais = $pais->listar("");//
              
                   foreach($listadopais as $objPais){

                        if($objPais->getIDpais() == $sel){
                             echo "<option selected value=".$objPais->getIDpais().">".$objPais->getNom()."</option>"; 
                        }else{
                             echo "<option value=".$objPais->getIDpais().">".$objPais->getNom()."</option>"; 
                        }
                        //value solo acepta una palabra asi que "north america" solo recibira "north"
                                       
                    }
             
         ?>
        </select>
       <h2><?php echo $sel; ?></h2>
    </form>
        <?php
    
            if(isset($_POST["select"])){
                $seleccion =  $_POST["select"];
                
             $objlistatotal = new paises();
             $pais = $objlistatotal->listapais($seleccion);
                          
        ?>
					<form action='MYSQLDESDEPHP_ej3.php' name='form' class="formoculto" id='formphp' method='post'>
                        <ul>
                   		   <li>
							     <label for='id'>Id</label>
                                 <input type='text' name='id'  value="<?php echo $pais->getIDpais() ?>" >
						  </li>
						  <li>
							     <label for='nm'>nombre</label>
        					     <input  type='text'  name='nombre'  value="<?php echo $pais->getNom()?>" >
						  </li>
						  <li>
							     <label for='cn'>continente</label>
        					     <input  type='text'  name='continente' value="<?php echo $pais->getCont()?>">
						  </li>
						  <li>
							     <label for='re'>region</label>
        					     <input  type='text' name='region' value="<?php echo $pais->getReg()?>" >
						  </li>
						  <li>
							     <label for='su'>superficie</label>
        					     <input  type='text'  name='superficie' value="<?php echo $pais->getSup() ?>" >
						  </li>
						  <li>
							     <label for='in'>independencia</label>
        					     <input  type='text' name='independencia' value="<?php echo $pais->getIndep() ?>" >
						  </li>
						  <li>
							     <label for='po'>poblacion</label>
        					     <input  type='text'  name='poblacion' value="<?php echo $pais->getPoblacion() ?>">
						  </li>
						  <li>
							     <label for='ex'>exp. vida</label>
        					     <input   type='text' name='exp-vida' value="<?php echo $pais->getVida() ?>" >
						  </li>
						  <li>
							     <label for='pnb'>PNB</label>
        					     <input  type='text' name='PNB' value="<?php echo $pais->getPnb() ?>" >
						  </li>
						  <li>
							     <label for='cd'>codigo</label>
        					     <input  type='text' name='codigo' value="<?php echo $pais->getCodigo() ?>" >
						  </li>
                        </ul>
				        <button type='submit' name='btnborrar'>Borrar</button>
                        <button type='submit' name='btnmod'>Modificar</button>
					</form>
        <?php
               }  
            //aplicacion borrar y modificar
           if (isset($_POST['btnmod']) or isset($_POST['btnborrar'])) {
                $id = $_POST["id"];
                $nombre = $_POST["nombre"];
                $cont = $_POST["continente"];
                $reg = $_POST["region"];
                $sup = $_POST["superficie"];
                $indep = $_POST["independencia"];
                $pobl = $_POST["poblacion"];
                $exp = $_POST["exp-vida"];
                $pnb = $_POST["PNB"];
                $cd = $_POST["codigo"];
           
                $objborrarModpais = new paises($id, $nombre, $cont, $reg, $sup, $indep, $pobl, $exp, $pnb, $cd);
                
                if (isset($_POST['btnmod'])) {
                    $modificar = $objborrarModpais->modificar();

                    if ($modificar)
                        echo "<h3><span class='spanv'>Modificado</span> el pais $nombre </h3>";
                    else
                        echo "Error en la Modificación: ";

                }

                else {
                    $eliminar = $objborrarModpais->eliminar();
                        if ($eliminar){
                            echo "<h3>Pais ".$nombre."<span class='spanr'> borrado</span></h3>";
                        }else{
                            echo "Error en la Eliminacion: " .$nombre;
                        }
                }    
                  
            }
            
        ?>
        
        
        
            
    <script>
		//añade el evento "change" al objeto select
        
		document.getElementById('select').addEventListener('change', function() {
			//ejecuta el submit
            /*
            var sel = document.getElementById('select').children;
             if( sel.hasAttribute("selected") == true ){
                document.getElementsByClassName('formoculto')[0].style.display="block";
            }
            */
    	   document.getElementById('formulario').submit();
           
           
		});
        
	</script>
</body>
</html>