document.addEventListener("DOMContentLoaded", () => {
    const btn_back = document.getElementById('btn_back');

    btn_back.addEventListener('click', () => {
        window.location.href = '../index.php';
    });
});