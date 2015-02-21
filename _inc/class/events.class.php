<?
	interface Events{
		#body and frameset events
		public $onload;    //Script to be run when a document load
		public $onunload;  //Script to be run when a document unload
		
		#Form Events
		public $onblur;	    //Script to be run when an element loses focus
		public $onchange;	//Script to be run when an element changes
		public $onfocus;	//Script to be run when an element gets focus
		public $onreset;	//Script to be run when a form is reset
		public $onselect;	//Script to be run when an element is selected
		public $onsubmit;	//Script to be run when a form is submitted
		
		#Image Events
		public $onabort;	//Script to be run when loading of an image is interrupted

		#Keyboard Events
		//Valid in all elements except base, bdo, br, frame, frameset, head, html, iframe, meta, param, script, style, and title.
		public $onkeydown;	//Script to be run when a key is pressed
		public $onkeypress;	//Script to be run when a key is pressed and released
		public $onkeyup;	//Script to be run when a key is released
		
		#Mouse Events
		//Valid in all elements except base, bdo, br, frame, frameset, head, html, iframe, meta, param, script, style, and title.
		public $onclick;	    //Script to be run on a mouse click
		public $ondblclick;	    //Script to be run on a mouse double-click
		public $onmousedown;	//Script to be run when mouse button is pressed
		public $onmousemove;	//Script to be run when mouse pointer moves
		public $onmouseout;	    //Script to be run when mouse pointer moves out of an element
		public $onmouseover;	//Script to be run when mouse pointer moves over an element
		public $onmouseup;	    //Script to be run when mouse button is released
	} 
?>