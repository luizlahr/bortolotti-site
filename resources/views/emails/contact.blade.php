@extends("emails.layout")

@section("content")
<table border="0" cellpadding="10" cellspacing="0" width="100%">
    <tr>
        <td align="center">
            <h2 style="color: #f08467">
                Você tem um novo contato <br>
                <small style="font-size: 14px; color: #888;">
                    veja os detalhes abaixo
                </small>
            </h2>
        </td>
    </tr>
    <tr>
        <td>
            <strong style="color: #555;">Nome</strong> <br>
            <span style="color: #888">{{ $data["name"] }}</span>
        </td>
    </tr>
    <tr>
        <td>
            <strong style="color: #555;">E-mail</strong> <br>
            <span style="color: #888">{{ $data["email"] }}</span>
        </td>
    </tr>
    <tr>
        <td>
            <strong style="color: #555;">Assunto</strong> <br>
            <span style="color: #888">{{ $data["subject"] }}</span>
        </td>
    </tr>
    <tr>
        <td>
            <strong style="color: #555;">Mensagem</strong> <br>
            <span style="color: #888">{{ $data["message"] }}</span>
        </td>
    </tr>
    <tr>
        <td align="center">
            <br>
            <a href="mailto:{{ $data["email"] }}"
                style="padding:8px 30px 8px 30px; background-color: #f08467; color:#fff; text-decoration: none;">
                Responder
            </a>
        </td>
    </tr>
</table>

@endsection