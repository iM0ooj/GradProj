document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".sidebar ul li");

    sidebarLinks.forEach(link => {
        link.addEventListener("click", function () {
            // إزالة النمط النشط عن جميع العناصر
            sidebarLinks.forEach(li => {
                li.classList.remove("active");
                li.style.borderLeft = "none";
                li.style.outline = "none";
                li.querySelector("img").style.filter = "none";
                li.querySelector("a").style.color = "#333";
            });

            // تفعيل العنصر النشط الجديد
            this.classList.add("active");
            this.style.borderLeft = "5px solid rgb(10, 96, 60)";
            this.style.outline = "1px solid rgb(10, 96, 60)";;
            this.querySelector("img").style.filter = "grayscale(100%) brightness(50%)";
            this.querySelector("a").style.color = "#555";
        });
    });
});
// إظهار/إخفاء تفاصيل البحث
function toggleDetails(button) {
    let detailsRow = button.closest("tr").nextElementSibling;
    detailsRow.style.display = (detailsRow.style.display === "table-row") ? "none" : "table-row";

    // تعديل السهم
    button.classList.toggle("open");
}

// إظهار/إخفاء ملف PDF
function togglePDF(button) {
    let pdfLink = button.closest("td").querySelector(".pdf-link");
    let img = button.querySelector("img");
    
    if (button.getAttribute("data-visible") === "true") {
        pdfLink.style.display = "none";
        img.src = "eye-closed.png";
        button.setAttribute("data-visible", "false");
    } else {
        pdfLink.style.display = "inline-block";
        img.src = "eye-open.png";
        button.setAttribute("data-visible", "true");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // احصل على جميع الروابط في القائمة الجانبية
    let sidebarLinks = document.querySelectorAll(".sidebar ul li a");

    // احصل على اسم الصفحة الحالية من الرابط
    let currentPage = window.location.pathname.split("/").pop();

    sidebarLinks.forEach(link => {
        if (link.getAttribute("href").includes(currentPage)) {
            link.parentElement.classList.add("active"); // إضافة `active` إلى العنصر المحدد
        } else {
            link.parentElement.classList.remove("active"); // إزالة `active` من العناصر الأخرى
        }
    });
});

