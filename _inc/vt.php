<?
    class vt
    {
        private $host;
		private $user;
		private $pass;
		private $db;
		private $baglanti;
		private $result;
		private $sonuc;
		
		public function __construct($host,$user,$pass,$db){
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->db = $db;
		}                                          
		
		public function connect(){
			try{
				$this->baglanti = @mysql_connect($this->host,$this->user,$this->pass);
				if(!$this->baglanti)
					throw new Exception("Veritabanına bağlanamadım.");
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
		
		public function select(){
			try{
				if(!@mysql_select_db($this->db,$this->baglanti))
					throw new Exception("Veritabanını seçemedim.");
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
		
		public function query($sql){
			try{
				$this->result = @mysql_query($sql,$this->baglanti);
				if(!$this->result)
					throw new Exception("Sorgu çalışmadı.");
			}
			catch(Exception $e){
				die($e->getMessage());
			}
			//$this->sonuc++;
			return $this->result;
		}
		
		public function fetchArray(){
			return mysql_fetch_array($this->result);
		}
		
		public function fetchAssoc(){
			return (@mysql_fetch_assoc($this->result));
		}
		
		public function fetchObject(){
			return (@mysql_fetch_object($this->result));
		}
		
		public function numRows(){
			return (@mysql_num_rows($this->result));
		}
		
		public function freeResult(){
			return (@mysql_free_result($this->result));
		}
		
		public function close(){
			return (@mysql_close());
		}
    }
?>