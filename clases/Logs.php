<?php
	Class Logs{
		private $text, $nombre, $archivo;
		private static $ubicacion = './Logs';
		
		public function __construct($text){
			$this->text = $text;
		}
		
		public function guardarLog(){
			$this->creaArch();
			$this->escribeArch();
			$this->cierraArch();
		}
		
		private function creaArch(){
			if (!file_exists(self::$ubicacion))
				mkdir(self::$ubicacion, 0700);
			
			$this->nombre = uniqid().'.txt';
			$this->archivo = fopen(self::$ubicacion.'/'.$this->nombre, "a");
		}
		
		private function cierraArch(){
			fclose($this->archivo);
		}
		
		private function escribeArch(){
			fwrite($this->archivo, $this->text);
		}
	}