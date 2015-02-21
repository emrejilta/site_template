<?
	include "interface.class.php";
	
	class Input extends Events{
		/*
		//input tag with all attributes
		public function input($type,$name,$placeholder,$size,$value,$maxlength){
			$this->type = $type;
			$this->name = $name;
			$this->placeholder = $placeholder;
			$this->size = $size;
			$this->value = $value;
			$this->maxlength = $maxlength;
			echo '<input type="'.$type.'" name="'.$nameB.'" placeholder="'.$placeholder.'" size="'.$size.'" value="'.$value.'" maxlength="'.$maxlength.'"/>';
		}*/
		
		//text function can be changed any case of use with parameters that inherited by interface.class
		public function text($name,$placeholder,$maxlength){
			$this->name = $name;
			$this->placeholder = $placeholder;
			$this->maxlength = $maxlength;
			echo '<input type="text" name="'.$name.'" placeholder="'.$placeholder.'" maxlength="'.$maxlength.'"/>';
		}
		
		//submit function can be changed any case of use with parameters that inherited by interface.class
		public function submit($name,$value){
			$this->name = $name;
			$this->value = $value;
			echo '<input type="submit" name="'.$name.'" class="special" value="'.$value.'" onkeypress="Enter"/>';
		}
	}
?>