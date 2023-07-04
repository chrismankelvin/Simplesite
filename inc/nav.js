{/* <script> */}
    const images = document.querySelectorAll('.slideshow img');
const imageTitle = document.getElementById('image-title');
const imageDescription = document.getElementById('image-description');

const imageInfo = [
  { title: 'Image 1 Title', description: 'This is the description for Image 1.' },
  { title: 'Image 2 Title', description: 'This is the description for Image 2.' },
  { title: 'Image 3 Title', description: 'This is the description for Image 3.' }
];

let currentIndex = 0;

function showImage(index) {
  images.forEach(img => img.classList.remove('active'));
  images[index].classList.add('active');

  imageTitle.textContent = imageInfo[index].title;
  imageDescription.textContent = imageInfo[index].description;
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
}

// Start the slideshow
showImage(currentIndex);
setInterval(nextImage, 10000);
{/* </script> */}