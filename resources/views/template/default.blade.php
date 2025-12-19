<!-- file resources/views/html101.blade.php -->
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัครสมาชิก</title>

    <style>
        body {
            font-family: "TH SarabunPSK", sans-serif;
            font-size: 22px;
            background-color: #add8e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 25px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            width: 150px;
            display: inline-block;
            vertical-align: top;
        }

        input,
        textarea {
            font-size: 18px;
            padding: 5px;
            margin-bottom: 2px;
        }

        textarea {
            width: 300px;
            height: 100px;
        }

        button {
            font-size: 18px;
            padding: 5px 15px;
            margin-top: 15px;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .reset-btn {
            background-color: white;
            border: 1px solid #333;
        }

        /* ===== Validation Style ===== */
        .field {
            position: relative;
        }

        .error {
            border: 2px solid red;
        }

        .success {
            border: 2px solid green;
        }

        .error-text {
            color: red;
            font-size: 14px;
            margin-left: 150px;
            height: 18px;
            /* จองพื้นที่ไว้ตลอด */
            display: block;
        }

        .check {
            color: green;
            font-size: 20px;
            position: absolute;
            right: -25px;
            top: 5px;
            display: none;
        }
    </style>
</head>

<body>

    <div class="form-container">

        @yield('content')
    </div>
    @stack('script')
</body>

</html>
