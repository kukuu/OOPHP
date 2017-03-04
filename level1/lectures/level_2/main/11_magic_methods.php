<?php
//Quicker technique for ccessing individual array elements
class Person11 {
	private $fields = array( 'a'=>'50 Paul',
				 'b'=>'3 James',
				 'c'=>'15 Gibbs',
				 'd'=>'5 Arthur',
				 'e'=>'4 Steve');
					
	public function __get($k) {
		if(isset($this->fields[$k])) {

			//factorise to use for each. Use argument as an array reference
			return $this->fields[$k];
		}
		return null;	
	}

}

$p = new Person11();
echo $p->a ."<br />".$p->b ."<br />".$p->c."<br />".$p->d."<br />".$p->e;


?>