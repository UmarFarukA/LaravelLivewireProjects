<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>KASU Password Reset</title>
</head>

<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff;border-radius:8px;overflow:hidden">

                    {{-- HEADER --}}
                    <tr>
                        <td style="background:#0f7b42;padding:25px;text-align:center;color:white">

                            <img src="{{ asset('storage/assets/KASU_logo.jpg') }}" alt="KASU Logo" width="70"
                                style="display:block;margin:auto;margin-bottom:10px;">

                            <h2 style="margin:0;font-weight:600;">
                                Kaduna State University
                            </h2>

                            <p style="margin:5px 0 0 0;font-size:14px;">
                                Application Portal
                            </p>

                            <p style="margin-top:6px;font-size:12px;opacity:0.9">
                                Academic Session: 2025/2026
                            </p>

                        </td>
                    </tr>


                    {{-- BODY --}}
                    <tr>
                        <td style="padding:30px">

                            <h3 style="margin-top:0;color:#333">
                                Password Reset Request
                            </h3>

                            <p style="font-size:15px;color:#555;line-height:1.6">
                                Hello,
                            </p>

                            <p style="font-size:15px;color:#555;line-height:1.6">
                                We received a request to reset your password for the
                                <strong>KASU Application Portal</strong>.
                            </p>

                            <p style="font-size:15px;color:#555;line-height:1.6">
                                Click the button below to reset your password.
                            </p>


                            {{-- BUTTON --}}
                            <div style="text-align:center;margin:30px 0">

                                <a href="{{ $url }}" style="
background:#0f7b42;
color:white;
padding:12px 30px;
text-decoration:none;
border-radius:6px;
font-weight:bold;
display:inline-block;
font-size:15px;
">
                                    Reset Password
                                </a>

                            </div>


                            <p style="font-size:14px;color:#666;line-height:1.6">
                                This password reset link will expire in
                                <strong>{{ config('auth.passwords.' . $broker . '.expire') }} minutes</strong>.
                            </p>

                            <p style="font-size:14px;color:#666;line-height:1.6">
                                If you did not request a password reset, please ignore this email.
                            </p>

                        </td>
                    </tr>


                    {{-- FOOTER --}}
                    <tr>
                        <td style="background:#f4f6f8;padding:20px;text-align:center;font-size:13px;color:#777">

                            <p style="margin:0">
                                Need help?
                            </p>

                            <p style="margin:5px 0">
                                Contact KASU ICT Helpdesk
                            </p>

                            <p style="margin:0">
                                📧 support@kasu.edu.ng | ☎ +234 XXX XXX XXXX
                            </p>

                            <p style="margin-top:10px;font-size:12px">
                                Kaduna State University © {{ date('Y') }}
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
