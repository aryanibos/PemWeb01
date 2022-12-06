function kirim() {
    let inp_nama = document.getElementById("username").value;
    let inp_pass = document.getElementById("password").value;
    let form = document.getElementById("form");

    if (inp_nama == "admin" && inp_pass == "admin") {
        alert("Login Berhasil")
        form.setAttribute("action", "dashboard.html2a2a222a")
    } else {
        alert("Username atau Password Salah")
    }
}