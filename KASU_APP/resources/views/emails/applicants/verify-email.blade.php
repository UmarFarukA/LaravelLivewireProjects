<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>KASU Email Verification</title>
</head>

<body style="margin:0;background:#f2f5f3;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="620" style="background:#ffffff;margin:40px auto;border-radius:8px;overflow:hidden;">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#0f5132;padding:20px;text-align:center;color:#fff;">
                            <img src="{{ config('app.url') }}/storage/assets/KASU_logo.jpg" alt="KASU Logo" width="70"
                                style="display:block;margin:auto;margin-bottom:10px;">

                            <h2 style="margin:0;">Kaduna State University</h2>
                            <p style="margin:5px 0;font-size:14px;">
                                KASU Application Portal
                            </p>

                            <p style="margin:0;font-size:13px;background:#198754;
                      display:inline-block;padding:4px 10px;
                      border-radius:4px;">
                                Admission Session: 2026
                            </p>
                        </td>
                    </tr>

                    <!-- BODY -->
                    <tr>
                        <td style="padding:30px;color:#333;">
                            <h3>Hello {{ $applicant->othernames ?? 'Applicant' }},</h3>

                            <p>
                                Thank you for creating an applicant account on the
                                Kaduna State University Application Portal.
                            </p>

                            <p>
                                Kindly verify your email address to activate your account
                                and continue your admission application.
                            </p>

                            <!-- CTA BUTTON -->
                            <div style="text-align:center;margin:35px 0;">
                                <a href="{{ $url }}" style="background:#198754;
                          color:#ffffff;
                          padding:14px 28px;
                          text-decoration:none;
                          border-radius:6px;
                          font-weight:bold;
                          font-size:16px;">
                                    Verify Email & Continue Application
                                </a>
                            </div>

                            <p style="font-size:14px;color:#666;">
                                This link expires in <strong>60 minutes</strong>.
                            </p>

                            <p style="font-size:14px;color:#666;">
                                If you did not initiate this registration, please ignore this email.
                            </p>

                            <hr style="margin:30px 0;border:none;border-top:1px solid #eee;">

                            <p style="font-size:14px; margin-top: 15px;">
                                Thank you,<br>
                                The KASU Admissions Team
                            </p>

                            <!-- HELPDESK -->
                            {{-- <p style="font-size:14px;">
                                Need assistance?
                            </p>

                            <p style="font-size:13px;color:#555;">
                                ICT Helpdesk – Kaduna State University<br>
                                📧 support@kasu.edu.ng<br>
                                ☎ +234 XXX XXX XXXX
                            </p> --}}
                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="background:#f8f9fa;padding:15px;text-align:center;
                   font-size:12px;color:#888;">
                            © {{ date('Y') }} Kaduna State University.<br>
                            forms.kasu.edu.ng
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
