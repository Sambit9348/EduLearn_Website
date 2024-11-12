// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Form Validation
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;

    if (name === "" || email === "" || message === "") {
        alert("Please fill out all fields.");
    } else {
        alert("Thank you for contacting us, " + name + "!");
        this.reset();
    }
});

// Enroll Button Functionality
document.querySelectorAll('.enroll-btn').forEach(button => {
    button.addEventListener('click', function () {
        const courseName = this.getAttribute('data-course');
        alert(`You have successfully enrolled in ${courseName}.`);
    });
});
