 var modal = document.getElementById("login-modal");
 var btnDesktop = document.getElementById("btn_login_modal_window_desktop");
 var btnMobile = document.getElementById("btn_login_modal_window_mobile");
 var span = document.getElementsByClassName("close_modal_window")[0];

 btnDesktop.onclick = function () {
    modal.style.display = "block";
 }
 btnMobile.onclick = function () {
    modal.style.display = "block";
 }

 span.onclick = function () {
    modal.style.display = "none";
 }

 window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}