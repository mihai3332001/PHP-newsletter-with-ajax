<?php
include('load.php');
	class validation {

	public function valid($variables) {
		$message = '';
		foreach($variables as $key => $value) {
			switch ($key) {
				case 'nume':
					$name = $this->emptyText($value);
					$validationText = $this->validationText($value);
					if($name == true) {
						$message .= '<div id="error' .$key .'" class="alert-danger " ><i class="fa fa-info-circle"></i> Campul ' . $key . ' nu poate fi gol.</div>';
					} else if ($validationText == true) {
						$message .= '<div id="error' .$key .'" class="alert-danger " ><i class="fa fa-info-circle"></i> Campul ' . $key . ' nu poate avea cifre.</div>';
					}
					break;
				case 'prenume':
					$name = $this->emptyText($value);
					$validationText = $this->validationText($value);
					if($name == true) {
						$message .= '<div id="error' .$key .'" class="alert-danger " ><i class="fa fa-info-circle"></i> Campul ' . $key . ' nu poate fi gol.</div>';
					} else if ($validationText == true) {
						$message .= '<div id="error' .$key .'" class="alert-danger " ><i class="fa fa-info-circle"></i> Campul ' . $key . ' nu poate avea cifre.</div>';
					}
					break;
				case 'email':
					$email = $this->emptyText($value);
					if($email == true) {
						$message .= '<div id="error' .$key .'" class="alert-danger " ><i class="fa fa-info-circle"></i> Campul ' . $key . ' nu poate fi gol.</div>';
					}
					break;
				default:
					$message;
					break;
			}
		}
		return $message;

	}
	private static function emptyText( $input ) {
				 if(trim($input) == ''){
				 		return true;
				 }
				 return false;
	}

	private static function validationText( $input ) {
				 if(!empty(preg_match('/(\d)/', $input))){
				 		return true;
				 }
				 return false;
	}


	}
?>