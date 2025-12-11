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
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        label {
            width: 150px;
            display: inline-block;
            vertical-align: top;
            margin-bottom: 10px;
        }

        input, textarea {
            font-size: 18px;
            padding: 5px;
            margin-bottom: 10px;
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

    </style>
</head>

<body>

    <div class="form-container">
        <h2>แบบฟอร์มสมัครสมาชิก</h2>

        <form>

            <label>ชื่อ</label>
            <input type="text" name="fname" required><br>

            <label>สกุล</label>
            <input type="text" name="lname" required><br>

            <label>วันเดือนปีเกิด</label>
            <input type="date" name="birth" required><br>

            <label>เพศ</label>
            <input type="radio" name="gender" value="ชาย"> ชาย
            <input type="radio" name="gender" value="หญิง"> หญิง <br>

            <label>รูป</label>
            <input type="file" name="photo" accept="image/*"><br>

            <label>ที่อยู่</label>
            <textarea name="address"></textarea><br>

            <label>สีที่ชอบ</label>
            <input type="text" name="color" placeholder="พิมพ์สีที่ชอบ"><br>

            <label>แนวเพลงที่ชอบ</label>
            <input type="text" name="music" placeholder="พิมพ์แนวเพลงที่ชอบ"><br>

            <input type="checkbox" required> ยินยอมให้เก็บข้อมูล<br><br>

            <button type="reset" class="reset-btn">Reset</button>
            <button type="submit" class="submit-btn">บันทึก</button>

        </form>
    </div>

</body>
</html>