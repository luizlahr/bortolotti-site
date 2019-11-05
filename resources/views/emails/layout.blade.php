<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Bortolotti Audio</title>
</head>

<body bgcolor="#EDF0F3" height="100%" style="font-family: Arial, Helvetica, sans-serif; font-size: 16x;">
    <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#EDF0F3"
        style="background-color:#EDF0F3; table-layout:fixed">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="20" cellspacing="0" width="600"
                        style="max-width: 600px; width: 100%;">
                        <thead>
                            <tr>
                                <th align="center">
                                    <img src="{{ $message->embed(public_path() . "/img/logo.svg") }}" alt="Bortolotti
                                    Audio" style="display: block; width: 220px;">
                                    {{-- <img src="{{ asset("/img/logo.svg") }}" alt="Bortolotti Audio"
                                    style="display: block; width: 220px;"> --}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td bgcolor="#fff" style="background-color: #fff;">
                                    @yield("content")
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#fff" style="background-color: #fff;">
                                    <span style="font-size: 14px; color: #888;">
                                        Atenciosamente, <br>
                                    </span>
                                    <strong style="font-size: 18px; color: #555;">
                                        Bortolotti <span style="color: #f08467">Audio</span>
                                    </strong>
                                    <br>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br><br>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>