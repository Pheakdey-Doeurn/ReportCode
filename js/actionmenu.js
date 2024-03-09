document.addEventListener("DOMContentLoaded", function() {
    // Get all links within elements with the class "links"
    let links = document.querySelectorAll(".links a");
    // Get the ID of the body element
    let bodyId = document.querySelector("body").id;

    // Loop through each link
    for (let link of links) {
        // Check if the data-active attribute matches the body ID
        if (link.dataset.active === bodyId) {
            // Add the "active" class to the matching link
            link.classList.add("active");
        }
    }
});
