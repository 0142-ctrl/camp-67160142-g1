@extends('template.default')
@section('content')
    <h2>แบบฟอร์มสมัครสมาชิก</h2>
    <form id="registerForm">

        <div class="field">
            <label>ชื่อ</label>
            <input type="text" name="fname">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>สกุล</label>
            <input type="text" name="lname">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>วันเดือนปีเกิด</label>
            <input type="date" name="birth">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>เพศ</label>
            <input type="radio" name="gender"> ชาย
            <input type="radio" name="gender"> หญิง
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>รูป</label>
            <input type="file" name="photo">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>ที่อยู่</label>
            <textarea name="address"></textarea>
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>สีที่ชอบ</label>
            <input type="text" name="color">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <label>แนวเพลงที่ชอบ</label>
            <input type="text" name="music">
            <span class="check">✔</span>
            <small class="error-text"></small>
        </div>

        <div class="field">
            <input type="checkbox" id="agree"> ยินยอมให้เก็บข้อมูล
            <small class="error-text"></small>
        </div>

        <button type="reset" class="reset-btn">Reset</button>
        <button type="submit" class="submit-btn">บันทึก</button>

    </form>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(e) {
            e.preventDefault();
            let valid = true;

            let fields = this.querySelectorAll(".field");

            fields.forEach(field => {
                let input = field.querySelector("input, textarea");
                let errorText = field.querySelector(".error-text");
                let check = field.querySelector(".check");

                if (input && input.type !== "radio" && input.type !== "checkbox") {
                    if (input.value.trim() === "") {
                        input.classList.add("error");
                        input.classList.remove("success");
                        errorText.textContent = "กรุณากรอกข้อมูล";
                        if (check) check.style.display = "none";
                        valid = false;
                    } else {
                        input.classList.remove("error");
                        input.classList.add("success");
                        errorText.textContent = "";
                        if (check) check.style.display = "inline";
                    }
                }
            });

            // ตรวจเพศ
            let genderChecked = document.querySelector("input[name=gender]:checked");
            let genderError = document.querySelector("input[name=gender]").closest(".field").querySelector(
                ".error-text");

            if (!genderChecked) {
                genderError.textContent = "กรุณาเลือกเพศ";
                valid = false;
            } else {
                genderError.textContent = "";
            }

            // ตรวจ checkbox
            let agree = document.getElementById("agree");
            let agreeError = agree.closest(".field").querySelector(".error-text");

            if (!agree.checked) {
                agreeError.textContent = "กรุณายินยอม";
                valid = false;
            } else {
                agreeError.textContent = "";
            }

            if (valid) {
                alert("บันทึกข้อมูลเรียบร้อย");
                this.submit();
            }
        });
    </script>
@endsection
