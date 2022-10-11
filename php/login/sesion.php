
<?PHP
header('Content-type=application/json; charset=utf-8');
//echo 'mHeaders.put("Content-Type", "application/json")';
//echo 'mHeaders.get("Content-Type", "application/json")';


$hostname="https://ppruebaba123.000webhostapp.com/";
$database="id19686366_test";
$username="id19686366_nombre_android";
$password="5WniM[0pE^n^jvXu";

$json=array();
	if(isset($_GET["user"]) && isset($_GET["pwd"])){
		$user=$_GET['user'];
		$pwd=$_GET['pwd'];
		
		$conexion=mysqli_connect($hostname,$username,$password,$database);
		
		$consulta="SELECT user, pwd, names FROM users WHERE user= '$user' AND pwd = '$pwd'";
		$resultado=mysqli_query($conexion,$consulta);

		if($consulta){
		
			if($reg=mysqli_fetch_array($resultado)){
				$json['datos'][]=$reg;
			}
			mysqli_close($conexion);
			var_dump(json_encode($json));

		}



		else{
			$results["user"]='';
			$results["pwd"]='';
			$results["names"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
		
	}
	else{
		   	$results["user"]='';
			$results["pwd"]='';
			$results["names"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
?>
