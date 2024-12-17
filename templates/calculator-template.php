<!-- This file contains the HTML structure for the area calculator. -->

<div class="area-calculator">
    <h2>Area Calculator</h2>
    <form id="area-calculator-form">
        <label for="length">Length:</label>
        <input type="number" id="length" name="length" required>

        <label for="width">Width:</label>
        <input type="number" id="width" name="width" required>

        <button type="submit">Calculate Area</button>
    </form>
    <div id="area-result"></div>
</div>

<script>
    document.getElementById('area-calculator-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const length = parseFloat(document.getElementById('length').value);
        const width = parseFloat(document.getElementById('width').value);
        const area = length * width;

        document.getElementById('area-result').innerText = 'Calculated Area: ' + area + ' square units';
    });
</script>