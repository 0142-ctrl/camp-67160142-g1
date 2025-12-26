@extends('template.default')
@section('content')
    <h2>แบบฟอร์มสมัครสมาชิก</h2>
    <form action="/submitForm" method="POST" enctype="multipart/form-data">
    @csrf

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
            <input type="radio" name="gender"value="ผู้ชาย"> ชาย
            <input type="radio" name="gender"value="ผู้หญิง"> หญิง
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
const form = document.getElementById("registerForm");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    let valid = true;

    form.querySelectorAll("input, textarea").forEach(input => {
        input.classList.remove("error", "success");
    });
    form.querySelectorAll(".check").forEach(c => c.style.display = "none");
    form.querySelectorAll(".error-text").forEach(e => e.textContent = "");

    form.querySelectorAll("input:not([type=radio]):not([type=checkbox]), textarea")
        .forEach(input => {
            let field = input.closest(".field");
            let errorText = field.querySelector(".error-text");
            let check = field.querySelector(".check");

            if (input.value.trim() === "") {
                input.classList.add("error");
                errorText.textContent = "กรุณากรอกข้อมูล";
                valid = false;
            } else {
                input.classList.add("success");
                if (check) check.style.display = "inline";
            }
        });

    let genderChecked = document.querySelector("input[name=gender]:checked");
    let genderError = document.querySelector("input[name=gender]")
        .closest(".field").querySelector(".error-text");

    if (!genderChecked) {
        genderError.textContent = "กรุณาเลือกเพศ";
        valid = false;
    }

    let agree = document.getElementById("agree");
    let agreeError = agree.closest(".field").querySelector(".error-text");

    if (!agree.checked) {
        agreeError.textContent = "กรุณายินยอม";
        valid = false;
    }

    if (valid) {
        alert("บันทึกข้อมูลเรียบร้อย");
        this.submit();
    }
});
</script>


@endsection
