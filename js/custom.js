document.addEventListener("DOMContentLoaded", function() {
    // Load animation when the page loads
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('bm'),
        renderer: 'svg',
        loop: false,
        autoplay: true, // Set autoplay to false initially
        path: 'js/logodata.json'
    });

    // Function to play the animation when logo is hovered
    function playAnimation() {
        animation.goToAndPlay(0); // Start the animation from the beginning
    }

    // Add event listener for hover
    var logo = document.getElementById('bm');
    logo.addEventListener('mouseenter', playAnimation);
});

  var animation = bodymovin.loadAnimation({
    container: document.getElementById('stickybm'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'js/logodata.json'
  })

