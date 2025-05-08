<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DapurKost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @vite('resources/sass/app.scss','resources/js/app.js')
    <!-- atau app.css jika sudah dikompilasi -->
</head>
<body>
    <x-sidebar />
    <x-header />
    <main class="container mt-4">

        @yield('content')

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewAvatar() {
            const input = document.getElementById('avatar');
            const preview = document.getElementById('avatarPreview');
            if (input.files && input.files[0]) {
                preview.src = URL.createObjectURL(input.files[0]);
            }
        }

        function setLightMode() {
            document.body.classList.remove('bg-dark', 'text-white');
        }

        function setDarkMode() {
            document.body.classList.add('bg-dark', 'text-white');
        }

    </script>
</body>
</html>
