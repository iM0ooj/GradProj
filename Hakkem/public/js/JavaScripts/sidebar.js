document.addEventListener("DOMContentLoaded", function () {
    // تفعيل عناصر .sidebar ul li عند الضغط
    const sidebarListItems = document.querySelectorAll(".sidebar ul li");

    sidebarListItems.forEach(link => {
        link.addEventListener("click", function () {
            sidebarListItems.forEach(li => {
                li.classList.remove("active");
                li.style.borderLeft = "none";
                li.style.outline = "none";
                const img = li.querySelector("img");
                const anchor = li.querySelector("a");
                if (img) img.style.filter = "none";
                if (anchor) anchor.style.color = "#333";
            });

            this.classList.add("active");
            this.style.borderLeft = "5px solid rgb(10, 96, 60)";
            this.style.outline = "1px solid rgb(10, 96, 60)";
            const img = this.querySelector("img");
            const anchor = this.querySelector("a");
            if (img) img.style.filter = "grayscale(100%) brightness(50%)";
            if (anchor) anchor.style.color = "#555";
        });
    });

    // تفعيل العنصر المناسب حسب رابط الصفحة
    const sidebarLinks = document.querySelectorAll(".sidebar ul li a");
    const currentPage = window.location.href;

    sidebarLinks.forEach(link => {
        if (currentPage.includes(link.getAttribute("href"))) {
            document.querySelectorAll(".sidebar ul li").forEach(li => {
                li.classList.remove("active");
            });
            if (link.parentElement) {
                link.parentElement.classList.add("active");
            }
        }
    });

    // تفعيل عناصر .sidebar-item عند الضغط وتحديث المحتوى
    const sidebarItems = document.querySelectorAll(".sidebar-item");
    const dynamicContent = document.getElementById("dynamic-content");

    sidebarItems.forEach(item => {
        item.addEventListener("click", function () {
            sidebarItems.forEach(i => i.classList.remove("active"));
            this.classList.add("active");

            const pageName = this.innerText.trim();
            if (typeof pages !== "undefined" && pages[pageName]) {
                dynamicContent.innerHTML = pages[pageName];
            }
        });
    });

    // تفعيل الصفحة الافتراضية عند التحميل
    document.querySelector(".sidebar-item.active")?.click();
});

// دالة تتحقق من الإدخال وتسمح فقط بالأرقام
function validateInput() {
    const inputField = document.getElementById("userIdInput");
    const errorMessage = document.getElementById("error-message");

    if (!/^\d*$/.test(inputField.value)) {
        errorMessage.style.display = "block";
        inputField.value = inputField.value.replace(/\D/g, "");
    } else {
        errorMessage.style.display = "none";
    }
}

// التحقق من أن الاسم يحتوي على حروف فقط
function validateName() {
    const nameField = document.getElementById("fullName");
    const nameError = document.getElementById("name-error");

    if (!/^[a-zA-Z\s]*$/.test(nameField.value)) {
        nameError.style.display = "block";
        nameField.value = nameField.value.replace(/[^a-zA-Z\s]/g, "");
    } else {
        nameError.style.display = "none";
    }
}

// التحقق من تطابق كلمة المرور
function checkPasswordMatch() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const passwordError = document.getElementById("password-error");

    if (password !== confirmPassword) {
        passwordError.style.display = "block";
    } else {
        passwordError.style.display = "none";
    }
}

// حفظ بيانات المستخدم
function saveUser() {
    const name = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const department = document.getElementById("department").value;
    const academicRank = document.getElementById("academicRank").value;
    const permissions = [];

    document.querySelectorAll("input[type='checkbox']:checked").forEach((checkbox) => {
        permissions.push(checkbox.value);
    });

    if (name.trim() === "" || email.trim() === "" || password.trim() === "" || department === "") {
        alert("All fields are required!");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }

    // محاكاة حفظ البيانات
    setTimeout(() => {
        document.getElementById("success-message").style.display = "block";

        setTimeout(() => {
            if (typeof closeCreateUserPopup === "function") {
                closeCreateUserPopup();
            }
            document.getElementById("success-message").style.display = "none";
        }, 2000);
    }, 500);
}
