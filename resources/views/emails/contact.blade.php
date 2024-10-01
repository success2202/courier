<!DOCTYPE html>
<html lang="en">

<head>
    <title>CGG Courier</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
</head>

<body>
    <table class="email-wraper"
        style="background-color:#f5f6fa;font-size:14px;line-height:22px;font-weight:400; font-family:Poppins, sans-serif;color:#8094ae;width:100%">
        <tbody>
            <tr>
                <td class="py-5" style="padding-top: 44px !important;padding-bottom: 44px !important;">
                    <table class="email-header" style="width:100%;max-width:620px;margin:0 auto">
                        <tbody>
                            <tr>
                                <td class="text-center pb-4"
                                    style="text-align: center !important;padding-bottom: 24px !important;">
                                    <img class="email-logo" src="{{ asset('assets/'.$settings->logo) }}" alt="logo"
                                        style="height: 40px;max-width: 100%;vertical-align:middle;background: #6f6767">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="email-body"
                        style="width: 96%;max-width: 620px;margin: 0 auto;background-color: #fff;">
                        <tbody>
                            <tr>
                                <td class="px-3 px-sm-5 pt-3 pt-sm-5 pb-1"
                                    style="padding-bottom: 16px !important;padding-top: 44px !important;padding-right: 44px !important;padding-left: 44px !important;">
                                    <h2 class="email-heading"
                                        style="font-size: 18px;color: #303e67;font-weight: 600;margin: 0;line-height: 1.4;">
                                        Hi Admin,</h2>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-3 px-sm-1 pb-2"
                                    style="padding-bottom: 12px !important;padding-right: 44px !important;padding-left: 44px !important;">
                                    <p style="margin-top: 0;margin-bottom: 16px;">You have a new Contact form</p>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Name
                                </td>
                                <td>
                                    {{ $data['name'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    {{ $data['email'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Phone
                                </td>
                                <td>
                                    {{ $data['phone'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Message
                                </td>
                                <td>
                                    {{ $data['message'] }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="email-footer" style="width:100%;max-width:480px;margin:0 auto">
                        <tbody>
                            <tr>
                                <td class="text-center pt-4"
                                    style="text-align: center !important;padding-top: 24px !important;">

                                    <p class="email-copyright-text" style="font-size: 12px;margin: 0;padding: 0;">
                                        {{ date('Y') }} {{ $settings->copyright }}.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>

    </table>
</body>

</html>
