<section class="banner">
    <div id="bannerCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item" id="slide-1">
                <img src="{{ asset("/img/slides/slide-1.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/img/slides/slide-2.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/img/slides/slide-3.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push("scripts")
<script>
    $(function() {
        $("#bannerCarousel").carousel({
            ride: true,
            interval: 8000,
        });

        $(".banner #slide-1").addClass("active");
    })
</script>
@endpush
