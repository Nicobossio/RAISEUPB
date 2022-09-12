<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d1bbf4c8fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="../js/home.js"></script>
    <title>RASESUPB</title>
</head>
<body>
    <!--Pestana emergente la cual abre al querer publicar iniciativa como lider de grupo-->
    <div class="modal-container" id ="modal-container">
        
        <div class="modal">
            <h1>Tienes que ser lider de un grupo<i class="fa-sharp fa-solid fa-circle-exclamation"></i></h1>
            <p>Para publicar las iniciativas tecnologicas de un grupo al cual pertenezcas tienes que ser el lider de este, <br>
            si eres lider de mas de un grupo seleccionalo </p>
            <div>
                <select id="grupo" name="grupo" required onchange="getSelectValue()">
                    <option value="no">selecciona</option>
                    <option value="Ingenieria de Software">Ingenieria de software</option>
                    <option value="Base de datos">Bases de datos</option>
                    <option value="Sistemas Operativos">sistemas operativos</option>
                </select>
            </div>
            
            <button id="entendido" class="button entendido" onclick="cerrar()">Entendido</button>    
            <button id="cancelar" class="button cancelar" onclick="checkPersonal()" >Cancelar</button>
        
    </div>
    </div>
    <!--Barra navegacion-->
    <nav>
        <div class="nav-left">
            <p class="logo">RASESUPB</p>
            <ul>
                <li><a href="#"><i  class="fa-sharp fa-solid fa-bell"></i></a></li>
                <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
            </ul>

        </div>
        <div class="nav-right">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="buscar">

            </div>
            <div class="nav-user-icon online">
                <img src="../media/235698444_2007948449356488_497714013479432294_n.jpg" alt="">
            </div>
            <div>
            <!--cambia depende del rol-->
                <p>Empresario</p>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <!-- LEFT SIDEBAR-->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="#"><i class="fa-solid fa-newspaper"></i>ultimas noticias</a>
                <a href="#"><i class="fa-solid fa-user-group"></i>Grupos</a>
            </div>
            <div class="shortcut-links">
                <p></p>

            </div>
        </div>
        <!-- main content-->
  
        <div class="main-content">
        
        
            <!--PONER UN POST-->
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="../media/235698444_2007948449356488_497714013479432294_n.jpg" alt="">
                    <!--EL NOMBRE TAMBIEN TIENE QUE CAMBIAR DEPENDIENDO DE LA PERSONA-->
                    <p>Nicolas Bossio </p> <input type="text" value="" id ="input-lider" class="input-grupo"><input type="text" value="" id="input-grupo"class="input-grupo">
                </div>
                <div class="radio">
                    <h5>Publicacion:</h5>
                        
                    <input type="radio" name="tipo-publicacion" id="grupal" onclick="abrir()">
                    <label for="grupal">Grupal <i class="fa-solid fa-user-group"></i></label>
                    <input type="radio" name="tipo-publicacion" id="personal" onclick="personal()" >
                    <label for="personal">Personal <i class="fa-solid fa-user"></i></i></label>

                
                </div>
                <div class="post-input-container">
                    
                    <textarea id="textarea" rows="3" placeholder=""></textarea>
                <div class="add-post-links">
                    <a href="">Diapositivas<i class="fa-brands fa-slideshare"></i></a>
                    <a href="">Video<i class="fa-brands fa-youtube"></i></a>
                    <a href="">Imagen<i class="fa-solid fa-image"></i></a>
                </div>
                
                
                
                
                </div>
                
            </div>
            <!--AQUi ESTARAN LOS POST-->
            
            
            <?php   
                for($i=0; $i<10; $i++){


                
            ?>
            <div class="post-container">
                <div class="user-profile">
                    <img src="../media/235698444_2007948449356488_497714013479432294_n.jpg" alt="">
                    <div>
                    <!--EL NOMBRE TAMBIEN TIENE QUE CAMBIAR DEPENDIENDO DE LA PERSONA-->
                    <p>Nicolas Bossio </p>
                    <!--CAMBIAR Esto tiene que ser funcional-->
                    <span>Agosto 12 2022, 13:40</span>
                    </div>
              </div>
              <!--Descripcion POST-->
              <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae harum voluptates, aut id recusandae 
                dicta iste fuga, nesciunt omnis veritatis quam aperiam dolores inventore quas, quo explicabo consequuntur con  sequatur sapiente!</p>
                <img src="../media/Cabezote Logo UPB.png" alt="" class="post-img">
                <div class="add-post-links">
                    <a href="">Calificar<i class="fa-solid fa-star"></i></i></a>
                    <a href="">Diapositivas<i class="fa-brands fa-slideshare"></i></a>
                    <a href="">Video<i class="fa-brands fa-youtube"></i></a>
                    <a href="">Contactar<i class="fa-solid fa-address-book"></i></a>
                </div>
            </div>
            <?php
                }
            ?>
            
        </div>


       <!-- right SIDEBAR-->

        <div class="right-sidebar">
            <div class="sidebar-tittle">

                <h4>Eventos</h4>
                <a href="#">Ver todo</a>
    
            </div>

            <div class="event">
                <div class="left-event">

                </div>
                <div class="right-event">
                    
                </div>

            </div>
    </div>   

</body>
</html>