<?php

require('Workers.php');

class Calculate {

	public function claclulate() {	
		
			$input = file_get_contents('in.txt');
			$output = 'out.txt';
			
			$records = preg_split("/$\R?^/m", $input);
			$workers = new Workers($records);
			
			$worker1 = $workers->worker($records);
			$worker2 = $workers->worker($records);
			$worker3 = $workers->worker($records);
			
			$combined = array_merge($worker1, $worker2, $worker3);
			$uniqueue = array_unique($combined);
			$results = implode(PHP_EOL,$uniqueue);

			file_put_contents($output, $results, FILE_APPEND);
			
			return true;
	}
}	


$obj = new Calculate();
echo $obj->claclulate();
