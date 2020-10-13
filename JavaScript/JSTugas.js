function tampil() {
    var cek_input = document.getElementById("form1").txtFName.value;
    var p_kontainer = document.getElementById("container1");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please enter your First Name!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }

    cek_input = document.getElementById("form1").txtLName.value;
    p_kontainer = document.getElementById("container2");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please enter your Last Name!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }

    cek_input = document.getElementById("form1").txtEmail.value;
    p_kontainer = document.getElementById("container3");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please enter your Email!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }

    cek_input = document.getElementById("form1").txtID.value;
    p_kontainer = document.getElementById("container4");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please enter your User Id!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }

    cek_input = document.getElementById("form1").txtPass.value;
    p_kontainer = document.getElementById("container5");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please enter your Password!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }

    cek_input = document.getElementById("form1").txtCPass.value;
    p_kontainer = document.getElementById("container6");
    if (cek_input == "") {
        p_kontainer.innerHTML = "<span style='color: red;'>Please confirm your Password!</span>";
    } else {
        p_kontainer.innerHTML = "OK!";
    }
}