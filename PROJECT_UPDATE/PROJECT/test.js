// JavaScript for the image carousel

// Define variables
let currentIndex = 0;
const images = document.querySelectorAll('#property-img img');

// Function to show the current image
function showImage(index) {
    // Hide all images
    images.forEach(img => {
        img.style.display = 'none';
    });
    // Show the current image
    images[index].style.display = 'block';
}

// Function to show the next image
function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
}

// Function to show the previous image
function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
}

// Initial setup: Show the first image
showImage(currentIndex);
