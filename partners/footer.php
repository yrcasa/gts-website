<?php include "../../contactDetails.php" ;?>
<!-- ======= Footer ======= -->
 
<footer id="footer">
    <div class="container-fluid">
      <!-- <h3>IT SOLUTIONS THAT WORK FOR YOU</h3>
      <p>We at GTS working to provide innovative, reliable and secured IT Solutions.<p> -->
    
        <div class="row">
            <!-- First Column  -->
            <div class="col-md-3 mx-auto">
               <h5 class="text-uppercase text-lg-left">About Us</h5>
              <p class="text-lg-left" style="color: #b0b6b8"> Global Tiger Solutions is a leading provider of sustainable systems, solutions and services that are tailor-fitted for a fast-paced community where innovation and integration is the backbone towards a progressive and sound management, where the future can be the present.</p>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <!-- 2nd Column  -->
            <div class="col-md-3 mx-auto">
            <!-- Links -->
             <h5 class="text-uppercase text-lg-left">Partners</h5>
                <ul class="list-unstyled text-lg-left">
                    <li><a href="../../partner.php">Endpoint Protection</a></li>
                    <li><a href="../../partner.php#firewall">Firewall</a></li>
                    <li><a href="../../partner.php#networking">Networking</a></li>
                    <li><a href="../../partner.php#pc_servers&printers">PC, Server & Printers</a></li>
                    <li><a href="../../partner.php#softwarePartners">Software Partners</a></li>
                    <li><a href="../../partner.php#powerSupply">Uninterrupted Power Supply</a></li>
                </ul>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <!-- 3rd Column  -->
            <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="text-uppercase text-lg-left">Products</h5>

            <ul class="list-unstyled text-lg-left">
              <li>
                <a href="../../products/enterprise/zeus.php">Flight Information Display System</a>
              </li>
              <!-- <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li> -->
            </ul>

            </div>

            <hr class="clearfix w-100 d-md-none">
            <!-- 4th Column  -->

            <div class="col-md-3 mx-auto">

              <!-- Links -->
              <h5 class="text-uppercase text-lg-left">Contact Us</h5>

              <ul class="list-unstyled text-lg-left">

                <li>
                <i class="las la-map-marker"></i>
                  <a href="../../contact.php">

                    <span>
                    <?php echo $companyAddress; ?>               
                    </span>
                  </a>
                </li>

                <br>
                <li>
                <i class="las la-phone"></i>
                  <a href="tel:<?php echo $directContact;?>" target="_blank">
                    Phone: <?php echo $directContact;?>
                  </a>
                </li>
                <li>
                <i class="las la-envelope"></i>
                  <a href="mailto:<?php echo $emailSales; ?>" target="_blank">Email: <?php echo $emailSales; ?></a>
                </li>
               
              </ul>

              </div>

        </div>


      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
          Copyright © 2020. All Rights Reserved. Powered by Global Tiger Solutions.
      </div>
    </div>
  </footer>
  <!-- End Footer -->