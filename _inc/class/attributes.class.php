<?
	interface Attributes{
		#Core Attributes
		//Valid in all elements, except: <base>, <head>, <html>, <meta>, <param>, <script>, <style>, and <title>.
		public $class;  //Specifies one or more classnames for an element (refers to a class in a style sheet)
		public $id;     //Specifies a unique id for an element
		public $title;  //Specifies extra information about an element
		public $style;  //Specifies an inline CSS style for an element
		
		#Language Attributes
		//Valid in all elements, except: <base>, <br>, <frame>, <frameset>, <hr>, <iframe>, <param>, and <script>.
		public $dir;
		public $lang;
		public $xmllang;
		
		#Keyboard Attributes
		public $accesskey;  //Specifies a shortcut key to activate/focus an element
		public $tabindex;   //Specifies the tabbing order of an element
		
		#Optional Attributes
		public $type;
		public $name;
		public $placeholder;
		public $size;
		public $value;
		public $maxlength;
		public $checked;
		public $src;
		public $align;
		public $accept;
		public $alt;
		public $disabled;
		public $readonly;
		
	} 
?>