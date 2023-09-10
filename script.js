const header = document.querySelector("header");

/*----------------------- Reveal Animation -----------------------*/

let sr = ScrollReveal({
    duration: 2500,
    distance: "60px",
});

// Example: Changing the delays and origins for the animations
sr.reveal(".anmd", { delay: 800 }); // Increased delay
sr.reveal(".anmt", { origin: "bottom", delay: 700 }); // Changed origin to "bottom"
sr.reveal(".anms", { origin: "right", delay: 400 }); // Changed origin to "right"
sr.reveal(".anml", { origin: "right", delay: 900 }); // Changed origin to "right" and increased delay

// Additional animation
sr.reveal(".custom-animation", { origin: "left", delay: 500 }); // Added a custom animation
