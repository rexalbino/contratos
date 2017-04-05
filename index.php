<!DOCTYPE html>
<html>
    <head>
        <title>Contratos</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="img/man.ico" type="image/x-icon" > 
    </head>
<?php
    require("connection.php");
      $sql="SELECT * FROM `contratos` ";
			  
        $resultado1 = mysqli_query($link,$sql) or die(mysql_error());
      ?>
    <body>
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.js"></script>
        <script src="js/jquery.js"></script>
        <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
          <form action="analysis.php" method="POST" id="formId"><!--aqui se redigira a un php para validar  la secion de ususario o de administrador -->
      
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass" name="pass" type="password" required>
          <label for="password">Contraseña</label>
        </div>
      </div>
        </form>
    </div>
    <div class="modal-footer">
      <button type="submit" form="formId" class="modal-action modal-close waves-effect waves-green btn-flat">Ingresar</button>
        
    </div>
  </div>
          
        <nav class="#263238 blue-grey darken-4">
              
    <div class="nav-wrapper">
      <a href="admin.php" class="brand-logo">Contratos digitales</a>
        
      
    </div>
              
  </nav>
          <nav class="#263238 blue-grey darken-4">
              
    <div class="nav-wrapper">
      
        
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="check.php"><i class="material-icons left">email</i>Vigencia cerca</a></li>
        <li><a href="#modal1"><i class="material-icons left">person_pin</i>Iniciar secion</a></li>
      </ul>
    </div>
              
  </nav>
        <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
          <h3 class="black-text , center-align">Bienvenido a contratos digitales</h3>
        <div class="#ffffff white">
            
          
           <table class="black-text responsive-table">
        <thead>
          <tr>
              <th data-field="id">Numero de contrato</th>
              <th data-field="name">Fecha de inicio</th>
              <th data-field="price">Fecha de fin</th>
              <th data-field="price">Area</th>
              <th data-field="price">Tipo de contrato</th>
              <th data-field="price">Parte</th>
              <th data-field="price">Contrato</th>

          </tr>
            
        </thead>

        
            <tbody class="black-text">
            <?php
			while($row = mysqli_fetch_array($resultado1)):
			
		?>
            <tr >
            <td><?php  echo $row['num_contrato'];?></td>
            <td><?php  echo $row['date_start']; ?></td>
            <td><?php  echo $row['date_end']; ?></td>
            <td><?php  echo $row['area']; ?></td>
            <td><?php  echo $row['tipo_contrato']; ?></td>
            <td><?php  echo $row['third_party']; ?></td>
            <td><a target="_blank" href = "<?php echo $row['contrato'];?>"><i class='material-icons center-align'>description</i></a></td>

            
            
          </tr>
                <?php
				endwhile;
            ?>
             </tbody>
      </table>
          </div>
        </div>
          

   <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  


  
    

      

   <footer class="page-footer teal">
    <div >
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Ver 0.0.1 Beta  <i class="material-icons">stars</i> Designed by Abraham Duarte
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
       <script id="source" language="javascript" type="text/javascript">
    $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
            </script>

  </body>
</html>