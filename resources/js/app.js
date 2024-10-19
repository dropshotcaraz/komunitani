import './bootstrap';

// DOMContentLoaded ensures that the script runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Get all the sidebar buttons
    const homeBtn = document.getElementById('home-btn');
    const pesanBtn = document.getElementById('pesan-btn');
    const cariBtn = document.getElementById('cari-btn');
    const chatbotBtn = document.getElementById('chatbot-btn');
    const buatPostBtn = document.getElementById('buat-post-btn');
    const profileBtn = document.getElementById('profile-btn');

    // Function to handle the clicks for different buttons
    function navigateTo(route) {
        window.location.href = route;
    }

    // Add click event listeners for each button
    homeBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/homepage');  // Replace with the actual route
    });

    pesanBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/messages');  // Replace with the actual route
    });

    cariBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/search');  // Replace with the actual route
    });

    chatbotBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/chatbot');  // Replace with the actual route
    });

    buatPostBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/create-post');  // Replace with the actual route
    });

    profileBtn.addEventListener('click', function (e) {
        e.preventDefault();
        navigateTo('/profile');  // Replace with the actual route
    });
});
