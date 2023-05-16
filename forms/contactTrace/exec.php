<?php

use PHPMailer\PHPMailer\PHPMailer;
date_default_timezone_set("Asia/Hong_Kong");

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

    $temp = $_POST['temp'];
    $completeName = $_POST['completeName'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $presentAddress = $_POST['presentAddress'];
    $mobileNum = $_POST['mobileNum'];
    $natureOfVisit = $_POST['natureOfVisit'];

    $internal = $_POST['internal'];
    $companyName = $_POST['companyName'];
    $companyAddress = $_POST['companyAddress'];

    $cough = $_POST['cough'];
    $fatigue = $_POST['fatigue'];
    $colds = $_POST['colds'];
    $soreThroat = $_POST['soreThroat'];
    $fluSymptoms = $_POST['fluSymptoms'];
    $fever = $_POST['fever'];
    $covidHistory = $_POST['covidHistory'];
    $closeCovidContact = $_POST['closeCovidContact'];
    $contactPast2Weeks = $_POST['contactPast2Weeks'];
    $publicTranspo = $_POST['publicTranspo'];

    // console_log($_POST['g-recaptcha-response']);
    console_log($_POST);
    console_log($_REQUEST);

    $date = date_format(new DateTime(date("Y-m-d H:i:s")), 'Y-m-d H:i:s');
    $currentDateTime = $date;
    $newDateTime = date('Y-m-d h:i A', strtotime($currentDateTime));
               
                                try {
                                    //Server settings
                                    $mail->isSMTP();
                                    $mail->Host = 'mail.globaltigersolutions.com';
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'gtscontacttracing@globaltigersolutions.com'; // Gmail address which you want to use as SMTP server
                                    $mail->Password = 'P@ssword123'; // Gmail address Password
                                    $mail->SMTPSecure = 'tls';
                                    $mail->Port = 587;

                                    // gtscontact.tracing@gmail.com
                                    // P@ssword123456789

                                    //Recipients settings
                                    $mail->setFrom('gtscontacttracing@globaltigersolutions.com');     //SMTP email that will send to the recipient email
                                    $mail->addAddress('carminamendoza1109@gmail.com');
                                    $mail->addAddress('gtscontact.tracing@gmail.com');
                                    // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
                                    
                                    // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

                                    // $mail->addAddress('');      //Adding another address template 
                                    //  $mail->addCC('gtscontact.tracing@gmail.com');     // Input email if there will be a CC to the email 

                                    $mail->isHTML(true);
                                    $mail->Subject = 'Contact Tracing form of '.$completeName;
                                    $mail->Body = "
                                    <h2>".$date." <br>".$completeName."</h2> <br>

                                    <ul>
                                        <li>
                                        <h3>Temparature: ".$temp."</h3>
                                        </li>
                                        <li>
                                        <h3>Name: ".$completeName."</h3>
                                        </li>
                                        <li>
                                            <h3>Age: ".$age."</h3>
                                        </li>
                                        <li>
                                            <h3>Sex / Gender: ".$sex."</h3>
                                        </li>
                                        <li>
                                            <h3>President Address: ".$presentAddress."</h3>
                                        </li>
                                        <li>
                                            <h3>Mobile Number: ".$mobileNum."</h3>
                                        </li>
                                        <li>
                                                <h3>Nature of Visit: ".$natureOfVisit."</h3>
                                                <ul>
                                                <li>Internal:  ".$internal." </li>
                                                <li>Visitor Company Name:  ".$companyName." </li>
                                                <li>Visitor Company Address:  ".$companyAddress." </li>
                                                </ul>
                                            </li>
                                    
                                            <li>
                                            <h3>
                                                1. Respiratory Symptoms:
                                            </h3>
                                                <ul>
                                                    <li>
                                                        a. Cough: ".$cough."
                                                    </li>
                                                    <li>
                                                        b. Shortness of breath or fatigue : ".$fatigue."
                                                    </li>
                                                    <li>
                                                        c. Colds : ".$colds."
                                                    </li>
                                                    <li>
                                                        d. Sore throat  : ".$soreThroat."
                                                    </li>
                                                    <li>
                                                        e. Flu Symptoms (Headache, Body Pains, Diarrhea, Vomiting, Lack of Smell or Taste)  : ".$fluSymptoms."
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                            <h3>
                                                    2. Fever: ".$fever."
                                                    </h3>
                                            </li>
                                            <li>
                                            <h3>
                                                    3.  History of COVID-19 infection in the past 6 months?: ".$covidHistory."
                                                    </h3>
                                            </li>

                                            <li>
                                            <h3>
                                                    4.  Have you worked together or stayed in close environment of a confirmed COVID-19 case?: ".$closeCovidContact."
                                                    </h3
                                            </li>

                                            <li>
                                            <h3>
                                                    5.  Did you have any contract w/someone with fever, cough colds, sort throat in the past 2 weeks?: ".$contactPast2Weeks."
                                                    </h3>
                                            </li>

                                            <li>
                                            <h3>
                                                    6.  Travelled using Public Transport?: ".$publicTranspo."
                                                    </h3>
                                            </li>

                                        <li>
                                            <h3>Date & time submitted: ".$newDateTime."</h3>
                                        </li>

                                    </ul>
                                    ";

                                    $mail->send();
					echo "<script type='text/javascript'>
                                        window.location.href = 'ty.php';
                                    </script>
                                    ";
					
				    
                                  
                                }
                                catch (Exception $e) {
                                console_log($e->getMessage());
                            }
 
                  

   
?>