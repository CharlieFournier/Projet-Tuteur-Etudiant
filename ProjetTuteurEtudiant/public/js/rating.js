var stars = document.querySelectorAll('.star');
stars.forEach(function(star, index) {
    star.addEventListener('click', function() {
        // Remove 'active' class from all stars
        stars.forEach(function(s) {
            s.classList.remove('active');
        });
        
        // Highlight selected star and stars before it
        for (var i = 0; i <= index; i++) {
            stars[i].classList.add('active');
        }
    });
});