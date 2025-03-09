//Sidebar
const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

// Button Login
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

// Notif Alert Auto
window.setTimeout(function(){
    $("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);

// Image Perview
document.addEventListener("DOMContentLoaded", function () {
    let imageInput = document.getElementById("gambarUnit");
    let previewContainer = document.getElementById("imagePerview");

    function previewImages() {
        previewContainer.innerHTML = ""; // Kosongkan preview sebelum ditampilkan ulang
        let files = Array.from(imageInput.files); // Ambil file yang dipilih

        if (files.length > 10) {
            alert("Maksimal 10 gambar yang dapat diunggah!");
            imageInput.value = ""; // Reset input file
            return;
        }

        files.forEach((file, index) => {
            let reader = new FileReader();
            reader.onload = function (e) {
                let imageWrapper = document.createElement("div");
                imageWrapper.className = "position-relative me-2 mb-2";
                imageWrapper.style.display = "inline-block";

                let img = document.createElement("img");
                img.src = e.target.result;
                img.className = "img-thumbnail";
                img.style.width = "100px";
                img.style.height = "100px";
                img.style.objectFit = "cover";

                let removeBtn = document.createElement("button");
                removeBtn.innerHTML = "x";
                removeBtn.className = "btn btn-danger btn-sm position-absolute";
                removeBtn.style.top = "5px";
                removeBtn.style.right = "5px";
                removeBtn.style.padding = "2px 5px";
                removeBtn.style.borderRadius = "50%";

                removeBtn.onclick = function (event) {
                    event.preventDefault(); // Mencegah reload
                    files.splice(index, 1); // Hapus file dari array
                    updateFileInput(files);
                    previewImages();
                };

                imageWrapper.appendChild(img);
                imageWrapper.appendChild(removeBtn);
                previewContainer.appendChild(imageWrapper);
            };
            reader.readAsDataURL(file);
        });
    }

    function updateFileInput(files) {
        let dataTransfer = new DataTransfer();
        files.forEach((file) => dataTransfer.items.add(file));
        imageInput.files = dataTransfer.files;
    }

    imageInput.addEventListener("change", previewImages);
});

