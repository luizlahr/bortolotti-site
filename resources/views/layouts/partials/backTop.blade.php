<a href="#" id="backTop" onClick="topFunction()" title="Voltar ao topo">
<i class="fas fa-arrow-up"></i>
</a>

@push("scripts")
<script>
function topFunction() {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
}
</script>
@endpush
