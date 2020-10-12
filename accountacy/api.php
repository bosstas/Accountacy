<?php include("db.php");
if(isset($_POST['action'])){
	if($_POST['action'] === 'update-status') {
		$id = $_POST['id'];
		$rowQuery = "SELECT name FROM status WHERE id = '%s'";
		$query = sprintf($rowQuery, mysqli_real_escape_string($db, $id));
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['name'];
		}
	} 
	if($_POST['action'] === 'select-bic') {
		$bic = $_POST['bic'];
		echo "<p>Список получатеей:</p>";
		echo "<select id = \"person\"><option>Выберите получатея</option>";
		$rowQuery = "SELECT id, surname, name FROM data_pers WHERE bic = '%s'";
		$query = sprintf($rowQuery, mysqli_real_escape_string($db, $bic));
		$result1 = mysqli_query($db, $query);
		while ($row1 = mysqli_fetch_assoc($result1)) {
			$surname = $row1['surname'];
			$name = $row1['name'];
			$s = htmlspecialchars($surname, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
			$n = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
				echo "<option value = '{$row1['id']}'>{$s} {$n}</option>";
		}
		echo '</select>';
	}
	if($_POST['action'] === 'get-user-info') {
		if (isset($_POST['id']) && !empty($_POST['id'])) {
			$id = $_POST['id'];
			$rowQuery = "SELECT surname, name, fisc, fiscsub, test, account FROM data_pers WHERE id = '%s'";
			$query = sprintf($rowQuery, mysqli_real_escape_string($db, $id));
			$result = mysqli_query($db, $query);
				$final = new \StdClass;
			while ($row = mysqli_fetch_assoc($result)) {
				$surname = $row['surname'];
			$name = $row['name'];
			$s = htmlspecialchars($surname, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
			$n = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
				$final->name = $s . " " . $n;
				$final->code = $row['fisc'];
				$final->subcode = $row['fiscsub'];
				if($row['test'] == 1){
					$p = 'R';
					$final->type = $p;
				}
				if($row['test'] == 0){
					$p = 'N';
					$final->type = $p;
				}
				$final->account_number = $row['account'];
			}
			echo json_encode($final);
		}
	}
	if($_POST['action'] === 'update-credit') {
		$id = $_POST['id'];
		$rowQuery =  "SELECT transfer_type FROM credit WHERE id = '%s'";
			$query = sprintf($rowQuery, mysqli_real_escape_string($db, $id));
			$result1 = mysqli_query($db, $query);
		while ($row1 = mysqli_fetch_assoc($result1)) {
			echo $row1['transfer_type'];
		}
	}
	if($_POST['action'] === 'get-account') {
		$id = $_POST['id'];
		$rowQuery = "SELECT num FROM num_cont WHERE id = '%s'";
			$query = sprintf($rowQuery, mysqli_real_escape_string($db, $id));
			$result2 = mysqli_query($db, $query);
		while ($row2 = mysqli_fetch_assoc($result2)) {
			echo $row2['num'];
		}
	} 
	if($_POST['action'] === 'update-text') {
		$name = $_POST['name'];		
		$rowQuery = "SELECT * FROM test WHERE name = '%s'";
		$query = sprintf($rowQuery, mysqli_real_escape_string($db, $name));
		$result3 = mysqli_query($db,  $query);
		while ($row3 = mysqli_fetch_assoc($result3)) {
			echo $row3['text'];
		}
	}
	if($_POST['action'] === 'update-tva') {
		$id = $_POST['id'];
		$rowQuery = "SELECT name FROM factor_tva WHERE id = '%s'";
		$query = sprintf($rowQuery, mysqli_real_escape_string($db, $id));
		$result4 = mysqli_query($db,  $query);
		while ($row4 = mysqli_fetch_assoc($result4)) {
			echo $row4['name'];
		}
	}
}
?>