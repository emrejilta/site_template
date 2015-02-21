<?
	class Script{
		public $content;
		public $path;
		
		function js($content){
			echo '<script src="'.$content.'"></script>';
		}
		
		function css($path){
			echo '<link rel="stylesheet" type="text/css" href="'.$path.'" />';
		}

	}
?>