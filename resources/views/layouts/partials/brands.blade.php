<section class="brands">
    <div class="container">
        <ul class="owl-carousel">
            <li>
                <img src="{{ asset("/img/brands/antera.svg") }}" class="antera" alt="Antera">
            </li>
            <li>
                <img src="{{ asset("/img/brands/orange.svg") }}" class="orange" alt="Orange">
            </li>
            <li>
                <img src="{{ asset("/img/brands/yamaha.svg") }}" class="yamaha" alt="Yamaha">
            </li>
            <li>
                <img src="{{ asset("/img/brands/laney.svg") }}" class="laney" alt="Laney">
            </li>
            <li>
                <img src="{{ asset("/img/brands/mesa.svg") }}" class="mesa" alt="Mesa">
            </li>
            <li>
                <img src="{{ asset("/img/brands/behringer.svg") }}" class="behringer" alt="Behringer">
            </li>
            <li>
                <img src="{{ asset("/img/brands/audioleader.svg") }}" class="audioleader" alt="Audioleader">
            </li>
            <li>
                <img src="{{ asset("/img/brands/oversound.svg") }}" class="oversound" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brands/meteoro.svg") }}" class="meteoro" alt="Meteoro">
            </li>
            <li>
                <img src="{{ asset("/img/brands/jbl.svg") }}" class="jbl" alt="Jbl">
            </li>
            <li>
                <img src="{{ asset("/img/brands/etelj.svg") }}" class="etelj" alt="Etelj">
            </li>
        </ul>
    </div>
</section>

@push("scripts")
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            lazyLoad: true,
            singleItem: true,
            responsive: {
                0: {
                    items: 1
                },
                550: {
                    items: 2
                },
                751: {
                    items: 3
                },
                1001: {
                    items: 5
                }
            }
        });
    });
</script>
@endpush
