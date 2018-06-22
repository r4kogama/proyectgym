<?php
// Start the session
    session_start();
    require "../Negocio/paises.php";

    if(isset($_SESSION["select"])){
        //recupera la variable  guardada
        $sel = $_SESSION["select"];
    }else{
        $sel = "";
    }

    //crear objetos y llamar a las funciones  de apartado "negocio"
    $objpais = new paises();
    $tituloColum = $objpais->titulo();

    $objlistacontinente = new paises();
    $selectcontinente = $objlistacontinente->listarContinente();
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
                padding: 5px 0px 5px 0px;
                width: 19.8%;
                background: #e0d689;
                color: white;
                font-weight: 800;
                text-transform: uppercase;
                font-size: .6em;
                height: 10px;
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
          
		   h1{
			   margin: 10px 0px;
			   font-size: 2em;
			   text-align: center;
		   }
		   
		   form{
			   text-align: center;
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
    
             $objlistatotal = new paises();
             $listatabla = $objlistatotal->listar($sel);
       
        ?>
    <h1>PAISES</h1>
    <form action="MYSQLDESDEPHP.php" id="formulario" method="post">
       <select name="select" id="select">
          <option value="">----Elige el continente----</option>
         <?php
                foreach($selectcontinente as $registro){
                    
                    if($registro['continente'] == $sel){
                         echo "<option selected value=".$registro['continente'].">".$registro['continente']."</option>"; 
                    }else{
                         echo "<option value=".$registro['continente'].">".$registro['continente']."</option>"; 
                    }
                    //value solo acepta una palabra asi que "north america" solo recibira "north"
                                       
                }
             
         ?>
        </select> 
        <h2><?php echo $sel; ?></h2>
    </form>
        <?php
        //SQL
                echo "<div class='caja'>";
                    echo "<ul class='titulo'>";
                    foreach($tituloColum as $valor){
                         echo "<li>".$valor."</li>";   
                    }
                    echo "</ul>";


                    foreach($listatabla as $regis){
                         echo "<ul>";
                         echo "<li>".$regis->getIDpais()."</li><li>".$regis->getNom()."</li><li>".$regis->getCont()."</li><li>".$regis->getReg()."</li><li class='ultimo''>".$regis->getIndep()."</li>";
                         echo "</ul>";
                    }
                echo "</div>";      
        ?>
 
    <script>
		//añade el evento "change" al objeto select
		document.getElementById('select').addEventListener('change', function() {
			//ejecuta el submit
    	document.getElementById('formulario').submit();
		});
       
    
	</script>
</body>
</html>