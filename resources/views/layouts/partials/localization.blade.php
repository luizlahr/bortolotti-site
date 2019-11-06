<section class="localization" id="localization-anchor">
    <div class="container">
        <div class="info">
            <h1 class="title">
                Contato
            </h1>
            <ul>
                <li>
                    <i class="icon fas fa-map-marker-alt"></i>
                    <p>
                        <strong>Endereço</strong>
                        <span>
                            Avenida 36, 1028, Vila Operária Rio Claro - SP <br>
                            CEP: 13504-120
                        </span>
                    </p>
                </li>
                <li>
                    <i class="icon fas fa-phone-alt"></i>
                    <p>
                        <strong>Telefone</strong>
                        <span>
                            <a href="tel:+5501935570896"> (19) 3557-0896</a>
                        </span>
                    </p>
                </li>
                <li>
                    <i class="icon fas fa-envelope-open-text"></i>
                    <p>
                        <strong>Endereço</strong>
                        <span>
                            atendimento@bortolottiaudio.com.br
                        </span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="map-area">
            <h1 class="title">
                Localização
            </h1>
            <div class="map" id="map"></div>
        </div>

    </div>
</section>

@push("scripts")
<script>
    
</script>

<script>
    window.onload = function() {
        initMap();
    };

    function initMap() {
        // The location of Uluru, -22.396062, -47.570532
        var ba = { lat: -22.396046, lng: -47.570468 };
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), { zoom: 17, center: ba });
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({ position: ba, map: map });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB10Xvg5CDcIo4aRvlhCU-byXWsye-jux4&callback=initMap">
</script>
@endpush
