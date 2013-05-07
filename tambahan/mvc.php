<?php
class model_name extends CI_Model {
	function get_databases() {
		$data = $query->result_array();
		return $data;
	}

	function get_tables($database) {
		$data = $query->result_array();
		return $data;
	}

	function get_fields($table) {
	
		$data = $query->result_array();
		return $data;
	}
}

#------------------------------------ controller

$databases = $this->model_name->get_databases();
#print_r($databases);
#array([0] => 'master', [1] => 'test')

#$metadata = array();

foreach($databases as $database) {	
	#$metadata[$database] = array();
	$tables = $this->model_name->get_tables($database);	
	foreach($tables as $table) {
		#$metadata[$database][$table] = array();		
		$fields = $this->model_name->get_fields($table);
		foreach($fields as $field) {
			$listz[$database][$table][] = $field;
		}		
	}
}




$dataz['listz'] = $listz;
$this->load->view('nama_view', $dataz);


#------------------------------------ view

foreach($listz as $databasexx => $tablesxx) {
	echo 'Database : ' . $databasexx . '</br>';	
	foreach($tablesxx as $tablexx => $fieldsxx) {
		echo 'Table : ' . $tablexx . '</br>';
		foreach($fieldsxx as $fieldxx) {
			echo 'Field Name : ' . $fieldxx. '</br>';
		}
	}
	echo '<hr>';
}

$listz['master']['table1'][0] = 'time';
$listz['master']['table1'][1] = 'date_id';
$listz['master']['table2']
$listz['master']['table3']
$listz['test']['table4']
$listz['test']['table5']

?>


$listz['master']['table1'][0][a][i] = 'time';