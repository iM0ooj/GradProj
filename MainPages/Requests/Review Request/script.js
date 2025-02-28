document.addEventListener("DOMContentLoaded", function () {
    const openButton = document.getElementById("openReviewOverlay");
    const overlayContainer = document.getElementById("overlayContainer");

    openButton.addEventListener("click", function () {
        fetch("ReviewRequestOptions.html")
            .then(response => response.text())
            .then(data => {
                overlayContainer.innerHTML = data;
                overlayContainer.classList.add("active"); // إضافة كلاس نشط لتظهر الأوفرلاي
                setupCloseOverlay();
            });
    });

    function setupCloseOverlay() {
        const overlay = overlayContainer.querySelector(".overlay");

        overlay.addEventListener("click", function (event) {
            if (event.target === overlay) { 
                overlayContainer.innerHTML = ""; // إزالة المحتوى لإغلاق الأوفرلاي
                overlayContainer.classList.remove("active");
            }
        });
    }
});

