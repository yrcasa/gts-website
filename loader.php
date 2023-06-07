<link href=assets/img/tcsdi_icon.ico rel=icon>
<link href=assets/css/loader.css rel=stylesheet>
<script src=https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js></script>
<div class="loader">
    <div class="loader-logo"><img alt="GTS Logo" src="assets/img/gtslogo_web.webp"></div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".loader").style.display = "none"
    }), window.addEventListener("load", function() {
        var e = document.querySelector(".loader");
        gsap.to(e, {
            opacity: 0,
            duration: .5,
            onComplete: function() {
                e.parentNode.removeChild(e)
            }
        })
    })
</script>