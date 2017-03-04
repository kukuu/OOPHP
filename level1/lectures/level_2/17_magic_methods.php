<?php

class Person15 {
	private $fields = array( a=>'50 Szchezny',
				 'b'=>'3 Sagna',
				 'c'=>'15 Gibbs',
				 'd'=>'5 Djourou',
				 'e'=>'4 Vehmalen');
					
	public function __get($k) {
		if(isset($this->fields[$k])) {

			//factorise to use for each
			return $this->fields[$k];
		}
		return null;	
	}

}

$p = new Person15();
echo $p->a ."<br />".$p->b ."<br />".$p->c."<br />".$p->d."<br />".$p->e;

?>