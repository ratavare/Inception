const introductionText = `
    Test website for Inception Project. Enjoy!

	... and have a pic of edu.
`;

function displayIntroduction() {
    const introductionElement = document.getElementById('introduction');
    
    if (introductionElement) {
        const paragraph = document.createElement('p');
        paragraph.textContent = introductionText;
        introductionElement.appendChild(paragraph);
    }
}

document.addEventListener('DOMContentLoaded', displayIntroduction);
