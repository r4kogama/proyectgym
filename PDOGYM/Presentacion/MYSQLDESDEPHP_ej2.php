<?php
    require "../Negocio/paises.php";
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
            }
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
                width: 19.061%;
                height: 30px;
                font-size: .9em;
           }
           
           ul{ 
               overflow:  auto;
           }
           
           .titulo{
               width: 100%;
           }
           .titulo li{
                padding: 5px 0px 5px 0px;
                width: 19%;
                background: #e0d689;
                color: white;
                font-weight: 800;
                text-transform: uppercase;
                font-size: .6em;
                height: 10px;
           }
		   
		   .vacio{
   				height: 30px;
				width: 14%;
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
				max-width: 1004px;
				margin: 20px auto;
				text-align: center;
           }
          
		   h1{
			   margin: 10px 0px;
			   font-size: 2em;
			   text-align: center;
		   }
		   
           form{
               width: 100%;
               max-width: 300px;
               margin: 0 auto;
               overflow: auto;
           }
           input{
                float: right;
           }
           label{
               float: left;
                width: 99px;
                height: 22px;
               ;
           }
           button{
               float: left;
			   margin-top: 10px;
           }
		   
		   .introducir{
			   color: #34b234;
				font-size: 1.2em;
				text-align: center;
				margin: 20px 0px;
		   }
		   .introducirError{
			    color: tomato;
				font-size: 1.2em;
				text-align: center;
				margin: 20px 0px;
		   }
		   
		   .spanReg{
			    display: block;
			    color: tomato;
				font-size: 1.2em;
				text-align: center;
				margin: 20px 0px;   
		   }
		   
		   .link{
			   	display: block;
			   text-decoration: none;
			   color: #5471d3;
			   font-size: .8em;
			   text-align: center;
		   }
		   
		   .insertado{
			   background: rgba(255, 99, 71, 0.64);
		   }
           
       </style>
</head>
<body>
    <h1>PAISES</h1>
    <form action="MYSQLDESDEPHP_ej2.php" id="formulario" method="post">
        <label for="idp">Idpais</label>
        <input type="text" id="idpais" name="idpais">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre">
         <label for="continente">continente</label>
        <input type="text" name="continente">
         <label for="region">region</label>
        <input type="text" name="region">
         <label for="superficie">superficie</label>
        <input type="text" name="superficie">
         <label for="independencia">independencia</label>
        <input type="text" name="independencia">
         <label for="poblacion">poblacion</label>
        <input type="text" name="poblacion">
         <label for="esperanzaVida">esperanzaVida</label>
        <input type="text" name="esperanzaVida"> 
        <label for="pbn">pnb</label>
        <input type="text" name="pbn">
        <label for="codigo">codigo</label>
        <input type="text" name="codigo">
        <button type="submit" name="registrar">Registrar</button>
    </form>
        <?php
   
         if(isset($_POST["registrar"])){
            $id = $_POST['idpais'];
            $nombre = $_POST['nombre'];
            $continente = $_POST['continente'];
            $region = $_POST['region'];
            $sup = $_POST['superficie'];
            $indep = $_POST['independencia'];
            $pobl = $_POST['poblacion'];
            $vida = $_POST['esperanzaVida'];
            $pnb = $_POST['pbn'];
            $cod = $_POST['codigo'];
            			 
              //crear objetos y llamar a las funciones  de apartado "negocio
             
                $objpaisrep = new paises();
                $repetido = $objpaisrep->listapais($id);
                 
                // si hay algun pais alguno igual...
				if($repetido){
					echo "<span class='spanReg'>". "Este pais ya ha sido registrado" . "</span>";
                    echo "<a class='link 'href='MYSQLDESDEPHP_ej2.php'>Pinche aqui para escoger otro pais</a>";  
				}else{		
                    
                    $paisNuevo = new paises( $id, $nombre ,$continente ,$region ,$sup ,$indep ,$pobl, $vida, $pnb, $cod );
                    $confirmado = $paisNuevo->insertar();
                    
                    if($confirmado){
                        echo "<h3 class='introducir'>" . "El pais se ha introducido correctamente!" . "</h2>";
                    }else {
                        echo "<h3 class='introducirError'>" . "Error al insertar registro!" ."</h3>";
                    }
                    
                    $objpais = new paises();
                    $tituloColum = $objpais->titulo();
                    
                    $objlistatotal = new paises();
                    $listatabla = $objlistatotal->listar("");//envia cadena vacia

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
                }
            }
       
        ?>
        <script>
            var elemento =  document.getElementById("idpais").value;
				elemento.classList.add("insertado");
        </script>
</body>
</html>