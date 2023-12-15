document.getElementById("popupButton").addEventListener("click", function() {
    document.getElementById("popup").style.display = "block";
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
});
document.addEventListener("DOMContentLoaded", function() {
    const mobileMenuIcon = document.getElementById("mobileMenuIcon");
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenuIcon.addEventListener("click", function() {
        mobileMenu.classList.toggle("active");
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const popupLinks = document.querySelectorAll(".popup-link");

    popupLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            const url = link.getAttribute("href");
            fetchDataAndDisplayPopup(url);
        });
    });

    function fetchDataAndDisplayPopup(url) {
        // Use AJAX or fetch to get data from the PHP page
        fetch(url)
            .then(response => response.text())
            .then(data => {
                // Display the data in a popup
                alert(data);
            })
            .catch(error => console.error('Error fetching data:', error));
    }
});

// mobile menu animation 

document.getElementById("mobileMenuIcon").addEventListener("click", function() {
    document.getElementById("mobileMenu").classList.toggle("open");
});
