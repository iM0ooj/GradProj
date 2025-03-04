const steps = document.querySelectorAll(".step");
const formSteps = document.querySelectorAll(".form-step");
const nextBtns = document.querySelectorAll(".next");
const backBtns = document.querySelectorAll(".back");
const confirmBtn = document.querySelector(".confirm");

let currentStep = 0;

function updateStepProgress() {
    steps.forEach((step, index) => {
        if (index <= currentStep) {
            step.classList.add("active");
        } else {
            step.classList.remove("active");
        }
    });
}

function showStep() {
    formSteps.forEach((step, index) => {
        step.classList.toggle("active", index === currentStep);
    });
    updateStepProgress();
}

nextBtns.forEach(button => {
    button.addEventListener("click", () => {
        if (currentStep < formSteps.length - 1) {
            currentStep++;
            showStep();
        }
    });
});

backBtns.forEach(button => {
    button.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            showStep();
        }
    });
});

confirmBtn.addEventListener("click", () => {
    alert("Request confirmed!");
});

showStep();
