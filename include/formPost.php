<?php
include('load.php');

class formPost extends connectNewsletter {
	private $postData = array();
	public function __construct($elements) {
		$this->postData = $elements;
	}
	public function saveDB() {

		$checkEmail = $this->checkEmail();
		$validate = $this->validFields();
		$gdpr = $this->validGdpr();

		if(!empty($validate)) {
			echo $validate;		
		} else if(!empty($gdpr)) {
			echo $gdpr;
		} else {
			if($checkEmail == true) {
			echo '<div class="alert-danger p-5"><i class="fa fa-info-circle"></i> Adresa de email exista deja.</div>';
			} else {
			$success = $this->insert();
				if($success == true) {
					$this->sendEmail();
			echo '<div class="alert-success p-5"><i class="fa fa-info-circle"></i> Felicitari! V-ati abonat cu success la newsletterul nostru.</div>';
				} else {
			echo '<div class="alert-danger p-5"><i class="fa fa-info-circle"></i> Ceva nu a mers bine. Incearca inca o data.</div>';
				}
			}
		}

		
	}

	private function validGdpr() {
		$data = $this->postData;
		extract($data);
		if(!isset($gdpr)) {
			return '<div class="alert-danger " ><i class="fa fa-info-circle"></i> Atentie! Nu ati bifat acordul cu privire la prelucrarea datelor cu caracter personal!</div>';
		}
	}

	private function validFields() {
		$validation = new validation();
		$data = $this->postData;
		$valid = $validation->valid($data);
 		return $valid;
	}

	private function sendEmail() {
		$data = $this->postData;
		extract($data);
		$to = "nuntadj@nuntadj.ro";
$subject = "New subscribe :" . $email . " - " . $nume . " " . $prenume . " ";
$htmlContent = "<body style='background-color:#e4e4e4; color: #5b73d2;'>";
$htmlContent .= "";
$htmlContent .= '<table width="800px" border="0" cellspacing="0" cellpadding="0">';
$htmlContent .= ' <tr>
    <td align="center" valign="middle"><h1 style="color:#5b73d2; text-align:left; padding-top:40px; text-decoration:underline; padding-left:150px;"> Contact request details</h1><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>';
$htmlContent .= "<p style='color: #3f3f3f; padding-left:20px;'><b><span style='color:#5b73d2'>Nume: </span>" . $nume . "</b></p><br />";
$htmlContent .= "</td></tr><tr><td>";
$htmlContent .= "<p style='color: #3f3f3f; padding-left:20px;'><b><span style='color:#5b73d2'>Prenume: </span>" . $prenume . "</b></p><br />";
$htmlContent .= "</td></tr><tr><td>";
$htmlContent .= "<p style='color: #3f3f3f; padding-left:20px;'><b><span style='color:#5b73d2'>Email: </span>" . $email . "</b></p><br />";
$htmlContent .= "</td></tr><tr><td>";
if(!empty($gdpr)){
 $gdpr = "Yes";
} else {
	$gdpr = "No";
}
$htmlContent .= "<p style='color: #3f3f3f; padding-left:20px;'><b><span style='color:#5b73d2'>GDPR: </span>" . $gdpr  . "</b></p><br />";
$htmlContent .= '</td></tr></table>
</td>
    <td align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>';

$htmlContent .= "</td></tr><tr><td>";
$htmlContent .= "<p style='padding-left:20px; padding-top:20px;'><b>Abonat la: </b>";
$htmlContent .= '<table style="color: #3f3f3f; padding-bottom:80px;">';


if(!empty($infoPublic)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($infoPublic == 1) ? "Informatii institutii publice" : "" ;
$htmlContent .= "</td></tr>";
}

if(!empty($inaugarari)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($inaugarari == 1) ? "<b>Inaugarari, expozitii, degustari</b>" : "" ;
$htmlContent .= "</td></tr>";
}


if(!empty($activitati)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($activitati == 1) ? "Activitati sportive" : "" ;
$htmlContent .= "</td></tr>";
}

if(!empty($conferinte)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($conferinte == 1) ? "<b>Conferinte, seminarii, workshop-uri</b>" : "" ;
$htmlContent .= "</td></tr>";
}

if(!empty($spectacole)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($spectacole == 1) ? "Spectacole" : "" ;
$htmlContent .= "</td></tr>";
}

if(!empty($oferte)){
$htmlContent .= "<tr><td style='padding-left:20px;'> - ";
$htmlContent .=  ($oferte == 1) ? "<b>Oferte si promotii</b>" : "" ;
$htmlContent .= "</td></tr>";
}

$htmlContent .= "</table>";
$htmlContent .= "</p>";
$htmlContent .= "</td>";
$htmlContent .= "</tr></table>
</td>
  </tr>
</table>
</td>
  </tr>
</table>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From:' . $email . "\r\n";
@mail($to, $subject, $htmlContent, $headers);
	}

	private function insert() {
		$dataPost = $this->postData;
		extract($dataPost);
		$infoPublic = isset($infoPublic) ? 1 : 0;
		$oferte = isset($oferte) ? 1 : 0;
		$spectacole = isset($spectacole) ? 1 : 0;
		$conferinte = isset($conferinte) ? 1 : 0;
		$activitati = isset($activitati) ? 1 : 0;
		$inaugarari = isset($inaugarari) ? 1 : 0;
		$gdpr = isset($gdpr) ? 1 : 0;
		$mysqli = $this->mysqliOpen();
		$sql = $this->insertData();
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param('sssiiiiiii' , $nume, $prenume, $email, $gdpr, $oferte, $spectacole, $conferinte, $activitati, $inaugarari, $infoPublic);
		$stmt->execute();
		$stmt->close();
		$mysqli = $this->mysqliClose();
		return true;
	}

	private function checkEmail() {
		$mysqli = $this->mysqliOpen();
		$sql = $this->checkEmailData();
		$stmt = $mysqli->prepare($sql);
		$data = $this->postData;
		extract($data);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->store_result();
		//$test = $stmt->bind_result($col1);
		//$count = mysqli_num_rows($test);
		$count = $stmt->num_rows;

		if(!empty($count)) {
			return true;
		} else {
			return false;
		}
		$stmt->close();
		$mysqli = $this->mysqliClose();
	}
}
class formIn {
	public static function create($elements) {
		return new formPost($elements);
	}
}
//var_dump($_POST);
$post = formIn::create($_POST);
echo $post->saveDB();
?>