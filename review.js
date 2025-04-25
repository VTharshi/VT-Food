// Selecting the elements
const stars = document.querySelectorAll("#starRating i");
const submitButton = document.querySelector(".submit-button");
const foodInput = document.getElementById("food");
const feedbackInput = document.getElementById("feedback");
let currentRating = 0;

// Star rating functionality
stars.forEach((star, index) => {
    star.addEventListener("mouseover", () => {
        stars.forEach((s, i) => {
            s.classList.toggle("active", i <= index);
        });
    });

    star.addEventListener("mouseout", () => {
        stars.forEach((s, i) => {
            s.classList.toggle("active", i < currentRating);
        });
    });

    star.addEventListener("click", () => {
        currentRating = index + 1;
        stars.forEach((s, i) => {
            s.classList.toggle("active", i < currentRating);
        });
    });
});

// Form submission handling
submitButton.addEventListener("click", (event) => {
    event.preventDefault(); // Prevents form from refreshing the page

    const foodName = foodInput.value.trim();
    const feedback = feedbackInput.value.trim();

    if (!foodName || !feedback || currentRating === 0) {
        alert("Please fill out all fields and select a rating.");
        return;
    }

    // Simulate form submission
    const reviewData = {
        food: foodName,
        rating: currentRating,
        feedback: feedback,
    };

    console.log("Review Submitted:", reviewData);

    // Clear the form after submission
    foodInput.value = "";
    feedbackInput.value = "";
    stars.forEach((s) => s.classList.remove("active"));
    currentRating = 0;

    alert("Thank you for your feedback!");
});
