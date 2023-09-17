document.addEventListener("DOMContentLoaded", function() {
    const paragraph = document.getElementById("card-text");

    // Get the number of characters you want to display before fading
    const characterLimit = 50; // Change this to your desired character limit

    // Check if the text exceeds the character limit
    if (paragraph.textContent.length > characterLimit) {
        // Trim the text to the character limit and add "..."
        const truncatedText = paragraph.textContent.slice(0, characterLimit) + "...";
        
        // Update the paragraph text
        paragraph.textContent = truncatedText;
    }
});