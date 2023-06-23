<?php include('../loader.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="tcsdi endpoint, gts endpoint, global tiger solutions endpoint, endpoint security, endpoint protection, cybersecurity">
  <title>Become A Partner | Global Tiger Solutions</title>
  <?php include "../links.php" ?>
  <link href="../assets/css/products-styles/partners.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/cta-style.css">
  <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-item<header id="header" class="fixed-top d-flex align-items-center header-transparent ">
    <?php include "../navMenu.php" ?>
  </header><!-- End Header -->
  <main id="main">
    <section class="partner" style="padding-top: 50px !important;">
      <!-- <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <p>Become A Partner</p>
          <h2>Registration Form</h2>
        </div>
        <div class="mb-3">
          <h2 class="h5">As a Global Tiger Solutions reseller partner, you will have access to the world’s leading technologies – and more. Our reseller partners outperform the competition and deliver next-level solutions for clients and customers thanks to our unique, value-added services.</h2>
        </div>
        <form action="">
          <div class="form-group form-row">
            <div class="col">
              <input type="text" name="First Name" id="firstName" class="form-control" placeholder="First Name">
            </div>
            <div class="col">
              <input type="text" name="Last Name" id="lastName" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <div>
              <input type="email" name="" id="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Company Name" class="form-control" id="companyName">
          </div>
          <div class="form-group">
            <input type="tel" name="" id="contactNumber" placeholder="Contact Number" class="form-control">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Position" class="form-control" id="position">
          </div>
          <div class="text">
            <input type="button" value="Submit" class="btn btn-primary">
          </div>
        </form>
      </div> -->

      
    <iframe
      id="JotFormIFrame-220317972182455"
      title="Account Deal Registration"
      onload="window.parent.scrollTo(0,0)"
      allowtransparency="true"
      allowfullscreen="true"
      allow="geolocation; microphone; camera"
      src="https://form.jotform.com/220317972182455"
      frameborder="0"
      style="min-width:100%;max-width:100%;height:539px;border:none;"
      scrolling="no"
    >
    </iframe>
    <script type="text/javascript">
    var ifr = document.getElementById("JotFormIFrame-220317972182455");
    if (ifr) {
      var src = ifr.src;
      var iframeParams = [];
      if (window.location.href && window.location.href.indexOf("?") > -1) {
        iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
      }
      if (src && src.indexOf("?") > -1) {
        iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
        src = src.substr(0, src.indexOf("?"))
      }
      iframeParams.push("isIframeEmbed=1");
      ifr.src = src + "?" + iframeParams.join('&');
    }
    window.handleIFrameMessage = function(e) {
      if (typeof e.data === 'object') { return; }
      var args = e.data.split(":");
      if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
      if (!iframe) { return; }
      switch (args[0]) {
        case "scrollIntoView":
          iframe.scrollIntoView();
          break;
        case "setHeight":
          iframe.style.height = args[1] + "px";
          if (!isNaN(args[1]) && parseInt(iframe.style.minHeight) > parseInt(args[1])) {
            iframe.style.minHeight = args[1] + "px";
          }
          break;
        case "collapseErrorPage":
          if (iframe.clientHeight > window.innerHeight) {
            iframe.style.height = window.innerHeight + "px";
          }
          break;
        case "reloadPage":
          window.location.reload();
          break;
        case "loadScript":
          if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
          var src = args[1];
          if (args.length > 3) {
              src = args[1] + ':' + args[2];
          }
          var script = document.createElement('script');
          script.src = src;
          script.type = 'text/javascript';
          document.body.appendChild(script);
          break;
        case "exitFullscreen":
          if      (window.document.exitFullscreen)        window.document.exitFullscreen();
          else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
          else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
          else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
          else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
          break;
      }
      var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
      if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
        var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
        iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
      }
    };
    window.isPermitted = function(originUrl, whitelisted_domains) {
      var url = document.createElement('a');
      url.href = originUrl;
      var hostname = url.hostname;
      var result = false;
      if( typeof hostname !== 'undefined' ) {
        whitelisted_domains.forEach(function(element) {
            if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
                result = true;
            }
        });
        return result;
      }
    };
    if (window.addEventListener) {
      window.addEventListener("message", handleIFrameMessage, false);
    } else if (window.attachEvent) {
      window.attachEvent("onmessage", handleIFrameMessage);
    }
    </script>
    </section>
  </main>
  <!-- Footer Section  --> <?php include "../footer.php" ?> <!--End Footer Section -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="../../assets/js/pandasecurity-main.js"></script>
</body>

</html>