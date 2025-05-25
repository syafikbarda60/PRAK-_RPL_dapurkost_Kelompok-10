// Menampilkan Preview Gambar saat Menambah Postingan
document.getElementById("image").addEventListener("change", function (event) {
    const input = event.target;
    const previewImg = document.getElementById("preview-img");

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewImg.classList.remove("d-none");
        };

        reader.readAsDataURL(input.files[0]);
    }
});
