<section class="brands">
    <div class="container">
        <ul class="owl-carousel">
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
            </li>
            <li>
                <img src="{{ asset("/img/brand_oversound.svg") }}" alt="Oversound">
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