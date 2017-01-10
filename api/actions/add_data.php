<?php
	error_reporting(E_ERROR );
	require_once '../config.php';

	if (isset($_POST)) {
		$params = array();
		$_JSON = json_decode(file_get_contents("php://input"), true);
		
		$variable = $_JSON['variable'];
		if ($variable) {
			$params['variable'] = $variable;
		}

		$value = $_JSON['value'];
		if ($value) {
			$params['value'] = $value;
		}

		if(!empty($params)){
			$is_updatable = false;
			$all_array = DB::query("SELECT * from data");
			foreach ($all_array as $row){
				if($row['variable'] == $variable){
					$is_updatable = true;
					break;
				}
			}
			if($is_updatable == false) {
				$result = DB::insert('data', $params);
				echo "Successfully Saved";
			} else {
				DB::update('data', array(
					  'value' => $value
					  ), "variable=%s", $variable);
				echo "Successfully Updated";
			}
			
		} else {
			echo "Error in Saving";
		}
	} else {
		echo "Permision denied.";
	}
	
?>
