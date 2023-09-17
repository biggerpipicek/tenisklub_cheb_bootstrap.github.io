// Wrap your code in an event listener to ensure the DOM is ready
document.addEventListener("DOMContentLoaded", function() {
    // Get all elements with the class "card-text"
    const cardTextElements = document.querySelectorAll(".card-text");

    // Define the character limit
    const characterLimit = 55; // Change this to your desired character limit

    // Loop through each card text element and truncate the text
    cardTextElements.forEach(function(cardTextElement) {
        const text = cardTextElement.textContent;
        if (text.length > characterLimit) {
            const truncatedText = text.slice(0, characterLimit - 1) + "...";
            cardTextElement.textContent = truncatedText;
        }
    });
});