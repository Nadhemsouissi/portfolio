// JavaScript Document
function validateForm() {
    var anliegen = document.getElementById("anliegen").value;
    var name = document.getElementById("name").value;
    var nachname = document.getElementById("nachname").value;
    var email = document.getElementById("email").value;
    var privacyCheckbox = document.getElementById("flexCheckChecked");

    if (anliegen == "" || name == "" || nachname == "" || email == "") {
        alert("Please fill in all required fields marked with *");
        return false;
    }

    if (!privacyCheckbox.checked) {
        alert("Bitte stimmen Sie der Datenschutzerklärung zu.");
        return false;
    }

    return true;
}
