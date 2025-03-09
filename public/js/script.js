//Sidebar
const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

document.addEventListener("DOMContentLoaded", function () {
    let loginButton = document.querySelector(".custom-btn");

    if (loginButton) {
        loginButton.addEventListener("click", function (event) {
            console.log("Login button clicked!");
        });
    } else {
        console.error("Error: Button dengan class 'custom-btn' tidak ditemukan!");
    }
});