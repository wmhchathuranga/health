function isSame() {
    var passwds = document.getElementsByClassName('passwd');
    if (!(passwds[0].value == passwds[1].value)) {
        passwds[1].style.border = "1px solid red";
        document.getElementById('addDoctor').setAttribute('disabled');
    }
    else {
        passwds[1].style.border = "0px solid red";
        document.getElementById('addDoctor').removeAttribute('disabled');
    }
}