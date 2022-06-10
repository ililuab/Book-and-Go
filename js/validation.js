function ValidateTextBox() {
    if (document.getElementById("txtName").value.trim() == "") {
        alert("Alles invullen");
        return false;
    } else {
        alert("Verstuurd")
    }
};