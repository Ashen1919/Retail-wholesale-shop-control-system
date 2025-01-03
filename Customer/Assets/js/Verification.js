// Add any interactivity if needed, such as handling the radio button selection.
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    form.addEventListener("submit", (e) => {
        const verificationType = form.verificationType.value;
        const code = form.verificationCode.value;

        if (!verificationType || code.length !== 6) {
            alert("Please fill all fields correctly.");
            e.preventDefault();
        }
    });
});
