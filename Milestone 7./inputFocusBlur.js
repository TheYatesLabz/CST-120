// inputFocusBlur.js

function addFocusBlurListeners(inputElement) {
    inputElement.addEventListener("focus", function () {
        this.style.border = "2px solid green";
    });

    inputElement.addEventListener("blur", function () {
        this.style.border = "none";
    });
}
