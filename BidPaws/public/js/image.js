
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.clickable-image');
    const mainImage = document.getElementById('main-image');
    
    images.forEach(image => {
        image.addEventListener('click', function() {
            const imagePath = this.getAttribute('src');
            mainImage.setAttribute('src', imagePath);
        });
    });
});