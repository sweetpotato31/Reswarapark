<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    // When image is clicked, show the popup
    $('#open-popup-rute').click(function() {
        $('#popup-rute').addClass('active');
    });

    // Close the popup when the close button is clicked
    $('.close-popup-rute').click(function() {
        $('#popup-rute').removeClass('active');
    });

    // Close the popup when clicking outside the content
    $('#popup-rute').click(function(event) {
        if (!$(event.target).closest('.popup-content').length) {
            $('#popup-rute').removeClass('active');
        }
    });
    });
    $(document).ready(function() {
        function setupPopup(buttonId, popupId, closeClass) {
        // When button is clicked, show the popup
        $(buttonId).click(function() {
        $(popupId).addClass('active');
        });

        // Close the popup when the close button is clicked
        $(closeClass).click(function() {
        $(popupId).removeClass('active');
        });

        // Close the popup when clicking outside the content
        $(popupId).click(function(event) {
        if (!$(event.target).closest('.popup-content').length) {
            $(popupId).removeClass('active');
        }
        });
        }

        setupPopup('#open-popup-ragnala-large', '#popup-ragnala-large', '.close-popup');
        setupPopup('#open-popup-ranjana-large', '#popup-ranjana-large', '.close-popup');
        setupPopup('#open-popup-raksaka-large', '#popup-raksaka-large', '.close-popup');
        setupPopup('#open-popup-ragnala-small', '#popup-ragnala-small', '.close-popup');
        setupPopup('#open-popup-ranjana-small', '#popup-ranjana-small', '.close-popup');
        setupPopup('#open-popup-raksaka-small', '#popup-raksaka-small', '.close-popup');
        setupPopup('#open-popup-ruko-small', '#popup-ruko-small', '.close-popup');
        setupPopup('#open-popup-ruko-large', '#popup-ruko-large', '.close-popup');
    });
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card-spek');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show'); // Tambahkan kelas 'show' saat elemen muncul di layar
                    observer.unobserve(entry.target); // Hentikan pengamatan setelah elemen terlihat
                }
            });
        }, {
            threshold: 0.5 // 50% dari elemen harus terlihat di viewport sebelum memicu animasi
        });

        cards.forEach(card => {
            observer.observe(card); // Mulai mengamati setiap elemen .card-spek
        });
    });
    $(document).ready(function() {
        $('a.nav-link').on('click', function(event) {
            // Cegah link default jika menuju ID
            if (this.hash !== "") {
            event.preventDefault();
            
            // Simpan hash
            var hash = this.hash;
            
            // Scroll secara smooth menggunakan jQuery
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                // Tambahkan hash ke URL setelah scroll
                window.location.hash = hash;
            });
            } 
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        autoplay: {
        delay: 3000, // Slide will change every 5 seconds
        disableOnInteraction: false,
        },
    });
    });
</script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>
    window.addEventListener('load', function() {
            document.getElementById('loadingOverlay').style.display = 'none';
    });
</script>