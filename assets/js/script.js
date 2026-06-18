// Mobile menu toggle


function openMenu() {

    const navLinks = document.getElementById("navLinks");

    navLinks.classList.toggle("active");

}






// Close mobile menu after clicking links


const links = document.querySelectorAll(".nav-links a");


links.forEach(function (link) {


    link.addEventListener("click", function () {


        document
            .getElementById("navLinks")
            .classList
            .remove("active");


    });


});









// Scroll Reveal Animation


const cards = document.querySelectorAll(

    ".feature-card, .product-card, .review-card, .stats-card, .certificate-card"

);



const observer = new IntersectionObserver(

    function (entries) {


        entries.forEach(function (entry) {


            if (entry.isIntersecting) {


                entry.target.classList.add("show");


            }


        });


    },


    {

        threshold: 0.2

    }

);






cards.forEach(function (card) {


    observer.observe(card);


});