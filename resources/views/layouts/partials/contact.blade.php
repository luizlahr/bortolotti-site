<section class="contact" id="contact-anchor">
    <div class="container">
        <h1 class="title">
            Fale Conosco
        </h1>
        <div class="alert-msg">
        </div>
        <form method="POST" id="frmContact">
            @csrf

            <input class="form-control" type="text" name="name" id="name" placeholder="Nome*" required>
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail*" required>
            <input class="form-control" type="text" name="subject" id="subject" placeholder="Assunto">
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" required
                placeholder="Sua mensagem*"></textarea>
            <div class="actions">
                <button id="btnContact">Enviar</button>
            </div>

        </form>
    </div>
</section>

@push("scripts")
<script>

    $("#btnContact").click(function(e){
        e.preventDefault();

        loader();
        $("#btnContact").attr("disabled", true);

        var form = $("#frmContact").serialize();

        $.post("{{ route('contact.send') }}", form)
        .done(function(data) {
            loader(false);
            $(".alert-msg").html(data.message);
            $(".alert-msg").removeClass("show")
            $(".alert-msg").removeClass("error")
            $(".alert-msg").addClass("show");
            $("#name").val("");
            $("#email").val("");
            $("#subject").val("");
            $("#message").val("");
            $("#btnContact").attr("disabled", false);
        })
        .fail(function(data) {
            loader(false);
            $(".alert-msg").removeClass("show")
            $(".alert-msg").html(data.error);
            $(".alert-msg").addClass("error");
            $(".alert-msg").addClass("show");
            $("#btnContact").attr("disabled", false);
        });
    });
</script>
@endpush

