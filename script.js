const myInput = document.getElementById("password");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password filed, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const message = document.getElementById('message');
    const submitButton = document.querySelector('button');

    const lowercase = /[a-z]/.test(password);
    const uppercase = /[A-Z]/.test(password);
    const number = /[0-9]/.test(password);
    const length = password.length >= 8;

    // Let's start with an empty message to avoid stacking errors
    message.innerHTML = '';

    // Check for each requirement and add ✔️ or ❌
    if (!lowercase) {
        message.innerHTML += '❌ Must contain at least one lowercase letter.<br>';
    } else {
        message.innerHTML += '✔️ Contains a lowercase letter.<br>';
    }

    if (!uppercase) {
        message.innerHTML += '❌ Must contain at least one uppercase letter.<br>';
    } else {
        message.innerHTML += '✔️ Contains an uppercase letter.<br>';
    }

    if (!number) {
        message.innerHTML += '❌ Must contain at least one number.<br>';
    } else {
        message.innerHTML += '✔️ Contains a number.<br>';
    }

    if (!length) {
        message.innerHTML += '❌ Must be at least 8 characters long.<br>';
    } else {
        message.innerHTML += '✔️ Meets the 8 character minimum.<br>';
    }

    // Enable submit button only if all conditions are met
    if (lowercase && uppercase && number && length) {
        submitButton.disabled = false;
    } else {
        submitButton.disabled = true;
    }
})