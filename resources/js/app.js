(function () {
    document.addEventListener("DOMContentLoaded", function () {
        function setupImagePreview(inputId, previewId) {
            const input = document.getElementById(inputId);
            const previewImg = document.getElementById(previewId);

            if (input && previewImg) {
                input.addEventListener("change", function () {
                    if (input.files && input.files[0]) {
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            previewImg.src = e.target.result;
                            previewImg.classList.remove("d-none");
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                });
            }
        }

        // Jalankan untuk input di halaman edit profil
        setupImagePreview("profile_image", "preview-img");

        // Jalankan juga untuk input di halaman create postingan
        setupImagePreview("image", "preview-img");
    });
})();
