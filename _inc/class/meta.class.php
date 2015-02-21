<?
	class Meta{
		public $content1;
		public $content2;
		public $name;
		public $content;
		
		function __construct(){
			echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
		}
		function Description($content1){
			echo '<meta name="description" content="'.$content1.'" />';
		}
		function Keywords($content2){
			echo '<meta name="keywords" content="'.$content2.'" />';
		}
		function Basic($name,$content){
			echo '<meta name="'.$name.'" content="'.$content.'" />';
		}
	}
?>