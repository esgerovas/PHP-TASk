<?php 
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.

	class Database
		{
			public $host;
			public $db_username;
			public $db_password;
			public 	$db_name;
			public $db_con;
			public function __construct($host, $user, $pass, $name){
				$this->host = $host;
				$this->db_username = $user;
				$this->db_password = $pass;
				$this->db_name = $name;
				$this->db_con = mysqli_connect($this->host, $this->db_username, $this->db_password, $this->db_name);
				if(!$this->db_con){
					echo "you can not access your database";
				}
			}
			public function select($tname, $col='*', $id=NULL, $like=NULL,$order=NULL, $limit=NULL, $offset=NULL){
				$sql = "SELECT $col from $tname";
				$query = mysqli_query($this->db_con, $sql);
				return $query;
			}
		}
	$newConnect = new Database('localhost', 'root', '', 'students');
		

class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	public function addWorker(){

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<div style="margin-top:30px;" class="container">
	<table class="table table-striped table-bordered">
		<tr>
			<th>Ad</th>
			<th>Soyad</th>
			<th>Status</th>
			<th>Dogum tarixi</th>
		</tr>
		<?php 
			$query = $newConnect->select('workers');
			while($row = mysqli_fetch_assoc($query)){
				$date_day= date_format(new DateTime($row['birthday']), 'd');
				$date_month= date_format(new DateTime($row['birthday']), 'm');
				$now_day = date("Y-m-d H:i:s");
				$cur_day= date_format(new DateTime($now_day), 'd');
				$cur_month= date_format(new DateTime($now_day), 'm');

				$color="";

				 if($date_month==$cur_month && $date_day==$cur_day){
				 	$color = "color:red;";
				 }
				switch ($date_month) {
					case '1':
						$date_month="Yanvar";
						break;
					case '2':
						$date_month="Fevral";
						break;
					case '3':
						$date_month="Mart";
						break;
					case '4':
						$date_month="Aprel";
						break;					
					case '5':
						$date_month="May";
						break;
					case '6':
						$date_month="Iyun";
						break;
					case '7':
						$date_month="Iyul";
						break;
					case '8':
						$date_month="Avqust";
						break;	
					case '9':
						$date_month="Sentyabr";
						break;	
					case '10':
						$date_month="Oktyabr";
						break;	
					case '11':
						$date_month="Noyabr";
						break;	
					case '12':
						$date_month="Dekabr";
						break;						
					default:
						# code...
						break;
				}

				
				?>
				
				<tr style=<?php echo $color;?>>
					<td><?= $row['name']; ?></td>
					<td><?= $row['surname']; ?></td>
					<td><?= $row['position']; ?></td>
					<td><?= $date_day." ".$date_month; ?></td>
				</tr>
			<?php } ?>
	</table>
</div>
</body>
</html>