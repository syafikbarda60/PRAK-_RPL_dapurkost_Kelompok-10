import './bootstrap';

    document.querySelectorAll('.bookmark-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const icon = btn.querySelector('.bookmark-icon');
            icon.classList.toggle('bi-bookmark');
            icon.classList.toggle('bi-bookmark-fill');
        });
    });