document.addEventListener('DOMContentLoaded', function() {
    const calculateButton = document.getElementById('calculate-area');
    const resultContainer = document.getElementById('area-result');

    calculateButton.addEventListener('click', function() {
        const length = parseFloat(document.getElementById('length').value);
        const width = parseFloat(document.getElementById('width').value);

        if (!isNaN(length) && !isNaN(width)) {
            const area = calculateArea(length, width);
            resultContainer.textContent = `Calculated Area: ${area} square units`;
        } else {
            resultContainer.textContent = 'Please enter valid numbers for length and width.';
        }
    });

    function calculateArea(length, width) {
        return length * width;
    }
});