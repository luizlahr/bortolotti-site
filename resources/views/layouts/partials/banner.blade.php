<section class="banner">
    <div id="bannerCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item" id="slide-1">
                <img src="{{ asset("/img/slides/slide_1.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Tenha equipamentos de qualidade</h5>
                    <p> Os amplificadores Bortolotti Áudio são fabricados de acordo com as necessidades de som que você
                        precisa</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/img/slides/slide_2.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Restauração</h5>
                    <p>Serviços de restauração em rádios antigos e afins</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset("/img/slides/slide_3.jpg") }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Audiotécnica</h5>
                    <p>Você pode confiar em nossos serviços de manutenções.</p>
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