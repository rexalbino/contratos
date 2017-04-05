 <!DOCTYPE html>
<?php
require("connection.php");

session_start();
$user=$_SESSION['user'];
$sql="SELECT * FROM usuarios WHERE nombre_usuario='$user'";
$resultado = mysqli_query($link,$sql) ;
$row = mysqli_fetch_array($resultado);
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif($row['admin']==0){
    echo "<script language=javaScript>alert('Usted no puede entar aqui');</script>";
    header("Location:index.php");
}
?>
  <html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="utf-8 "/>
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
      $sql="SELECT * FROM `contratos` ";
			  
        $resultado1 = mysqli_query($link,$sql) or die(mysql_error());
      ?>
    <body>
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.js"></script>
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
        <nav class="#263238 blue-grey darken-4">
              
    <div class="nav-wrapper">
      <a href="admin.php" class="brand-logo">Contratos</a>
        
      
    </div>
              
  </nav>
        <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="img/realback.jpg">
      </div>
      <a href="#!user"><img class="circle" src="img/user.png"></a>
      <a href="#!name"><span class="white-text name"><?php echo $row['nombre_usuario'].' '.$row['apellido_p'].' '.$row['apellido_m']  ?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $row['correo'] ?></span></a>
    </div></li>
    <li><a href="insertacontrato.php"><i class="material-icons left">open_in_browser</i>insertar contrato</a></li>
    <li><a href="check.php"><i class="material-icons left">email</i>Checar contratos</a></li>
    <li><div class="divider"></div></li>
    <li><a href="close.php"><i class="material-icons left">recent_actors</i>mostrar ususarios</a></li>
    <li><a href="newuser.php"><i class="material-icons left">assignment_ind</i>Crear nuevo usuario</a></li>
    <li><div class="divider"></div></li>
    <li><a href="close.php"><i class="material-icons left">person_pin</i>Cerrar sesion</a></li>
  </ul>
          <div class="#263238 blue-grey darken-4">
   <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons left">menu</i>menu</a>
    </div>
  
    
    
        <br>
        <br>
        <div class="container"> 
            <h3>Bienvenido Administrador</h3>
            
             <table class="black-text responsive-table">
        <thead>
          <tr>
              <th data-field="id">Numero de contrato</th>
              <th data-field="name">Fecha de inicio</th>
              <th data-field="price">Fecha de fin</th>
              <th data-field="price">Area</th>
              <th data-field="price">Tipo de contrato</th>
              <th data-field="price">Tercero</th>
              <th data-field="price">Contrato</th>
              <th data-field="price">Editar</th>
              <th data-field="price">Eliminar</th>
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
            <td><?php  echo "<a href=actualizar.php?id={$row['id_contrato']}><i class='material-icons'>mode_edit</i></a>";?></td>
            <td><?php  echo "<a href=beforeerrase.php?id={$row['id_contrato']}><i class='material-icons'>delete</i></a>";?></td>
            
            
          </tr>
                <?php
				endwhile;
            ?>
             </tbody>
      </table>
            
        </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      </body>
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
    $(".button-collapse").sideNav();
  });
            </script>

  </body>
</html>
        