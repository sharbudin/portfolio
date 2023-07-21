// JavaScript code for additional interactivity

// Function to add copy-to-clipboard functionality to copy buttons
document.addEventListener("DOMContentLoaded", function () {
    const copyButtons = document.querySelectorAll(".copy-button");

    copyButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const codeElement = button.previousElementSibling;
            if (codeElement.classList.contains("linux-command")) {
                const textToCopy = codeElement.textContent.trim();
                copyToClipboard(textToCopy);
            }
        });
    });
});

// Function to copy text to clipboard
function copyToClipboard(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
    alert("Copied to clipboard: " + text);
}
