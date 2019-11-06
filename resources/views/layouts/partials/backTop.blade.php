<a href="#" id="backTop" title="Voltar ao topo">
<i class="fas fa-arrow-up"></i>
</a>

@push("scripts")
<script>
    function topFunction() {
        $("html").animate({ scrollTop: 0 }, 1000);
        return false;
    }

    $(function(){
        $("#backTop").click(function(e) {
            e.preventDefault();
            topFunction();
        })
    })
</script>
@endpush
