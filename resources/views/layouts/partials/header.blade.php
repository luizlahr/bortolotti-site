<header id="main-header" id="home-anchor">
    <div class="container">
        <a href="">
            <img src="{{ asset("/img/logo.svg") }}" alt="Logo" class="logo">
        </a>
        <a href="" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <nav>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#about-anchor">Sobre</a>
                </li>
                <li>
                    <a href="#services-anchor">Serviços</a>
                </li>
                <li>
                    <a href="#localization-anchor">Contato</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

@push("scripts")
<script>
    window.onscroll = function() {stickyHeader()};

    // Get the header
    var header = document.getElementById("main-header");
    var backtop = document.getElementById("backTop");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stickyHeader() {
        if (window.pageYOffset-70 > sticky) {
            header.classList.add("sticky");
            backtop.classList.add("visible");
        } else {
            header.classList.remove("sticky");
            backtop.classList.remove("visible");
        }
    }

    $('#main-header li a, .btn-contact').click(function(e){
        e.preventDefault();

        if ($(this).attr('href') == "#") {
            topFunction();
        }

        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        },1000);
        return false;
    });
</script>
@endpush