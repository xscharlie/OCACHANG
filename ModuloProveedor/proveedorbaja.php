<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Baja de Proveedores</title>
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../js/jquery-ui-1.10.3.custom.css" rel="stylesheet"/>
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.js"></script>


<script>
  $(function() {
    $( "input[type=submit], input[type=button] " )
      .button()
      .click(function( event ) {
      });
  });
</script>


<script>
	function cambiarEstado(){
		var val = document.getElementById('idproveedor').value;
		var url="cambiaestado.php?idproveedor="+val;
				
		location.href=url;
	}
</script>


</head>

<body>

<div id="user_activo" >
  <?php 
    date_default_timezone_set('America/El_Salvador');
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//    $tipo=0;
    session_start();
    //Inicializamos los datos traidos de la sesión
    if(isset($_SESSION['tipo'])){
      //Si hay valor
      $tipo = $_SESSION['tipo'];
      echo '<div class="ui-widget" >
              <div class="ui-state-highlight ui-corner-all" style="height:20px; padding: 0.2em;">'.
              '<span style="float: left; font-weight:bold;">'.$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y').'</span>'.

              '<p style="margin-right:20px; display:inline;">Bienvenido al sistema :  '.'<strong>'.$_SESSION['nombre'].'</strong>'.'</p>
              </div>
          </div>';
    }
  ?>  
</div>
<form name="form1" method="post" action="">
  <DIV ALIGN=center>  
    <h1 id="reg_user">Dar de Baja Proveedores</h1>
  </DIV>
  <table width="661" border="0" align="center">
    <tr>
      <td width="474" align="center">

        <?php
        //Include
		include ('funciones.php');
		iniciarconexion();
		muestraestado();

		?>

      </div>
      <p>&nbsp;        </p>
      <p>
        <input type="button" value="Regresar al menú" onClick="MM_goToURL('parent','../menu.php');return document.MM_returnValue">
      </p>      <p>&nbsp;</p>
      
      </td>
    </tr>
  </table>
  <p>
    <input name="idproveedor" type="hidden" id="idproveedor" value="0">
  </p>
</form>
</body>
</html>