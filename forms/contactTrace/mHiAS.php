<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="Author" content="Tiger Consulting and Software Devt Inc.">
  <meta name="Description" content="Tiger Consulting and Software Devt Inc. provides companies with cost-effective enterprise business solutions.">
  <title>Contract Tracing Form | Global Tiger Solutions</title>

  <!-- Favicons -->
  <link rel="icon" href="../../assets/img/tcsdi_icon.ico">
  <!-- <link href="../../assets/img/GTSLogo.png" rel="icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <div class="container py-3">

    <div class="row justify-content-center">

      <div class="col-md-8">
        <!-- form card login -->
        <div class="card card-outline-secondary">
          <div class="card-header">
            <h3 class="mb-2">Contact Tracing Form</h3>
            <h6 class="card-subtitle mb-2 text-muted form-part"></h6>
          </div>
          <div class="card-body">
            <span id="error-message">

            </span>


            <form action="" class="form" id="formLogin" name="formLogin" method="post" role="form">

              <div id="spinner-here">

              </div>
              <!-- TAB 1 -->
              <div class="tab">
                <!-- Temperature  -->
                <div class="form-group row ">
                  <label for="temp" class="col-sm-3 col-form-label mt-3">Temperature

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-9 mt-3">
                    <input placeholder="ex: 36.5" class="form-control" id="temp" name="temp" required type="number">
                  </div>

                </div><!-- Temperature  -->

                <!-- Complete Name  -->
                <div class="form-group row mt-3"">
                    <label for=" completeName" class="col-sm-3 col-form-label">Complete Name

                  <span class="text-danger">*</span></label>

                  <div class="col-sm-9">
                    <input class="form-control" id="completeName" name="completeName" required type="text">
                  </div>

                </div> <!-- Complete Name  -->

                <!-- Age  -->
                <div class="form-group row mt-3"">
                    <label for=" age" class="col-sm-3 col-form-label">Age

                  <!-- <span class="text-danger">*</span> -->
                  </label>

                  <div class="col-sm-9">
                    <input class="form-control" id="age" name="age" type="number">
                  </div>

                </div><!-- Age  -->

                <!-- Sex  -->
                <div class="form-group row mt-3"">
                    <label for=" temp" class="col-sm-3 col-form-label">Sex

                  <!-- <span class="text-danger">*</span> -->
                  </label>

                  <div class="col-sm-9">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sex" id="male" value="Male">
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                  </div>

                </div><!-- Sex  -->


                <!-- Present Address  -->
                <div class="form-group row mt-3"">
                    <label for=" presentAddress" class="col-sm-3 col-form-label">Present Address

                  <span class="text-danger">*</span></label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="presentAddress" name="presentAddress" required type="text" rows="10">
                                    </textarea>
                  </div>

                </div> <!-- Present Address  -->

                <!-- Mobile Number  -->
                <div class="form-group row mt-3"">
                    <label for=" mobileNum" class="col-sm-3 col-form-label">Mobile Number

                  <span class="text-danger">*</span></label>

                  <div class="col-sm-9">
                    <input placeholder="ex: 09xxxxxxxxx" class="form-control" id="mobileNum" name="mobileNum" required type="number">
                  </div>

                </div><!-- Number  -->

                <div class="form-group row mt-3"">
                    <label for=" natureOfVisit" class="col-sm-3 col-form-label">Nature of Visit

                  <span class="text-danger">*</span></label>

                  <div class="col-sm-9" id="novForm">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Employee" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="natureOfVisit">
                        Employee
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Applicant" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="natureOfVisit">
                        Applicant
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Pickup" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="natureOfVisit">
                        Pickup
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Delivery" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="delinatureOfVisitvery">
                        Delivery
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Collection" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="natureOfVisit">
                        Collection
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="natureOfVisit" id="natureOfVisit" value="Personal Visit" onclick="if(this.checked){checkNatureOfVisit(this.value)}" required>
                      <label class="form-check-label" for="natureOfVisit">
                        Personal Visit
                      </label>
                    </div>
                  </div>

                </div><!-- Nature of Visit  -->

                <!-- Employee  (Nature ofV isit)  -->
                <div class="form-group row mt-3" id="internalForm" style="display: none">
                  <label for="internal" class="col-sm-3 col-form-label">Internal (For Employees only)

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-9">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="internal" id="internal" onclick="if(this.checked){setInternal(this.value)}" value="TIGER">
                      <label class="form-check-label" for="tiger">
                        TIGER
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="internal" id="internal" onclick="if(this.checked){setInternal(this.value)}" value="GTAGS">
                      <label class="form-check-label" for="gtags">
                        GTAGS
                      </label>
                    </div>
                  </div>

                </div><!--  Employee  (Nature ofV isit)  -->

                <!-- Visitor Company Name  -->
                <div class="form-group row mt-3" id="companyNameForm" style="display: none">
                  <label for="companyName" class="col-sm-3 col-form-label">Visitor Company

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-9">
                    <input class="form-control" id="companyName" name="companyName" type="text">
                  </div>

                </div> <!-- Visitor Company Name  -->

                <!-- Visitor Company Address  -->
                <div class="form-group row mt-3" id="companyAddressForm" style="display: none">
                  <label for="companyAddress" class="col-sm-3 col-form-label">Visitor Company Address

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-9">
                    <textarea class="form-control" id="companyAddress" name="companyAddress" type="text" rows="10">
                                    </textarea>
                  </div>

                </div> <!-- Visitor Company Address  -->

              </div>
              <!-- / TAB 1 -->

              <!-- TAB 2 -->
              <div class="tab" style="display: none">
                <h3>DID YOU HAVE ANY HISTORY OF THE FOLLOWING?</h3>


                <!-- Temperature  -->
                1. Respiratory Symptoms: <br>

                <!--  Number 1 a -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">a. Cough

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cough" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="cough" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>
                  <span style="color:red" id="error-cough"></span>

                </div><!--  Number 1  -->

                <!--  Number 1 b -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">b. Shortness of breath or fatigue

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fatigue" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fatigue" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>
                  <span style="color:red" id="error-fatigue"></span>

                </div><!--  Number 1 b  -->

                <!--  Number 1 c -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">c. Colds

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="colds" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="colds" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>
                  <span style="color:red" id="error-colds"></span>

                </div><!--  Number 1 c  -->

                <!--  Number 1 d -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">d. Sore throat

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="soreThroat" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="soreThroat" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-soreThroat"></span>

                </div><!--  Number 1 d  -->

                <!--  Number 1 e -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">e. Flu Symptoms (Headache, Body Pains, Diarrhea, Vomiting, Lack of Smell or Taste)

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fluSymptoms" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fluSymptoms" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-fluSymptoms"></span>

                </div><!--  Number 1 e  -->

                <!--  Number 2 -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">2. Fever

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fever" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fever" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-fever"></span>

                </div><!--  Number 2  -->

                <!--  Number 3 -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">3. History of COVID-19 infection in the past 6 months?

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="covidHistory" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="covidHistory" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-covidHistory"></span>

                </div><!--  Number 3  -->

                <!--  Number 4 -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">4. Have you worked together or stayed in close environment of a confirmed COVID-19 case?

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="closeCovidContact" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="closeCovidContact" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-closeCovidContact"></span>

                </div><!--  Number 4  -->

                <!--  Number 5 -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">5. Did you have any contract w/someone with fever, cough colds, sort throat in the past 2 weeks?

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="contactPast2Weeks" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="contactPast2Weeks" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>

                  <span style="color:red" id="error-contactPast2Weeks"></span>

                </div><!--  Number 5  -->

                <!--  Number 6 -->
                <div class="form-group row mt-3">
                  <label for="internal" class="col-sm-6 col-form-label">6. Travelled using Public Transport?

                    <span class="text-danger">*</span></label>

                  <div class="col-sm-6">

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="publicTranspo" id="health" value="yes">
                      <label class="form-check-label" for="health">
                        Yes
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="publicTranspo" id="health" value="no">
                      <label class="form-check-label" for="health">
                        No
                      </label>
                    </div>
                  </div>
                  <span style="color:red" id="error-publicTranspo"></span>

                </div><!--  Number 6  -->

                <small class="text-muted">
                  By filling up this form, I hereby authorize Company to collect and process the data indicated herein for the purpose of effecting control of the COVID-19 infection. I understand that my personal information is protected by RA 10173 (Data Privacy Act of 2012). I know that I am required to provide truthful information as required by RA 11469 (Bayanihan as One Act).
                </small>
                <br>
                <br>
                <small class="text-muted">
                  I certify that as of today, I am in good health and practicing responsible social distancing. I certify that I am voluntarily entering the work premises out of my own free will. I will NOT hold the Company or my Agency liable if I contracted COVID-19 in its premises as I cannot conclusively verify that I have been infected as a result of my visit to the Company or elsewhere.
                </small>
                <br>
                <br>
                <small class="text-muted">
                  The information stated is true and complete to the best of my knowledge and no information concerning my past or present state of health has been withheld. I hereby agree to undergo a health assessment by a medical practitioner if deemed necessary by the Company. I am aware that I may be required to undergo a health assessment or testing.
                </small>
                <br>
                <br>
                <small class="text-muted">
                  I understand that any willfully incorrect or misleading answer or material omission which relates to any of the questions before mentioned may make me liable to dismissal. I understand that this health declaration may form part of my file.
                </small>

              </div> <!-- /TAB 2 -->

              

              <br>
              <button type="button" id="prevBtn" class="btn btn-primary btn-lg" onclick="nextPrev(-1)">Previous</button>
              <button class="btn btn-primary btn-lg" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>


            </form>
          </div>
          <!--/card-block-->

        </div><!-- /form card login -->


      </div>

    </div>

  </div>
  <!--/container-->


  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- js template  -->
  <script src="js/app.js"></script>


</body>

</html>