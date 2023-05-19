<html>

<head>
    <link rel="icon" href="assets/img/tcsdi_icon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/loader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body>
    <div class="loader">
        <div class="loader-logo">
            <img src="https://globaltigersolutions.com/assets/img/gtslogo.png" alt="Company Logo">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loader = document.querySelector(".loader");
            loader.style.display = "none";
        });

        window.addEventListener("load", function() {
            var loader = document.querySelector(".loader");
            gsap.to(loader, {
                opacity: 0,
                duration: 0.5,
                onComplete: function() {
                    loader.parentNode.removeChild(loader);
                }
            });
        });
    </script>
</body>

</html>