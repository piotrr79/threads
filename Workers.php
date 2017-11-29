<?php

class Workers {
	
	public function __construct($records) {
        $this->records = $records;
    }
    
    
	public function worker($records) {
		$data = [];
		foreach ($records as $record) {
			$recordArray =	explode(',', $record);
			$x1 = $recordArray[0];
			$y1 = $recordArray[1];
			$x2 = $recordArray[2];
			$y2 = $recordArray[3];
					
			$theta = $y1 - $y2;
			$dist = sin(deg2rad($x1)) * sin(deg2rad($x2)) +  cos(deg2rad($x1)) * cos(deg2rad($x2)) * cos(deg2rad($theta));
			$dist = acos($dist);
			$data[] = $dist;
		}
		return $data;
	}
}

