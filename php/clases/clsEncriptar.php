<?php
	/**********************************************************************************************
	* Said Alarc�n Sosa																			  *
	* saidconsa@gmail.com																		  *
	* T.S.U. en Tecnolog�as de la Informaci�n y la Comunicaci�n �rea Sistemas Informatic�s   	  *
	* 16/03/2016 17:43:25																		  *
	**********************************************************************************************/
	
	class Encrypter
	{
		private static $Key = "saidalarconsosakasjfvkdfldjfvnlsdfv";
	
		public static function encrypt ($cadena)
		{
			$output = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), $cadena, MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))));
			return $output;
		}
	
		public static function decrypt ($cadena)
		{
			$output = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encrypter::$Key), base64_decode($cadena), MCRYPT_MODE_CBC, md5(md5(Encrypter::$Key))), "\0");
			return $output;
		}
	}
	// 		public function encrypt($string)
	// 		{
	// 			$result = "";
	// 			for($i=0; $i<strlen($string); $i++)
		// 			{
		// 				$char = substr($string, $i, 1);
		// 				$keychar = substr($this->key, ($i % strlen($this->key))-1, 1);
		// 				$char = chr(ord($char)+ord($keychar));
		// 				$result.=$char;
		// 			}
		// 			$this->string = base64_encode($result);
		// 		}
	
		// 		function decrypt($string)
		// 		{
		// 			$result = "";
		// 			$string = base64_decode($string);
		// 			for($i=0; $i<strlen($string); $i++)
			// 			{
			// 				$char = substr($string, $i, 1);
			// 				$keychar = substr($this->key, ($i % strlen($this->key))-1, 1);
			// 				$char = chr(ord($char)-ord($keychar));
			// 				$result.=$char;
			// 			}
			// 			$this->string = $result;
			// 		}
	
			// 		public function getString()
			// 		{
			// 			return $this->string;
			// 		}
	
			// 		$texto = "Son unos corruptos";
	
			// 		// Encriptamos el texto
			// 		$texto_encriptado = Encrypter::encrypt($texto);
	
			// 		// Desencriptamos el texto
			// 		$texto_original = Encrypter::decrypt($texto_encriptado);
	
			// 		if ($texto == $texto_original) echo 'Encriptacion / Desencriptación realizada correctamente.';
?>