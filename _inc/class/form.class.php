<?
	include "input.class.php";
	
	class Form extends Input{
		//attributes
		public $action;
		public $method; //GET or POST
		public $nameA;
		public $text;
		//public $enctype;
		
		public function _form($action,$method,$nameA,$text){
			$this->action = $action;
			$this->method = $method;
			$this->nameA = $nameA;
			$this->text = $text;
			echo '<form action="'.$action.'" method="'.$method.'" name="'.$nameA.'">';
			echo $text;
			echo '</form>';
		}
		
		public function _textarea($name,$placeholder,$rows){
			$this->name = $name;
			$this->placeholder = $placeholder;
			$this->rows = $rows;
			echo '<textarea name="'.$name.'" placeholder="'.$placeholder.'" rows="'.$rows.'"></textarea>';
		}
		
		
	}
?>