function removeBackgroundImage(element) {
    element.style.backgroundImage = 'none';
    return false;
} //REMOVES BG-IMG//

//FOR DATE PLACEHOLDER LANG 'TO//
$(document).ready(function() {
    $('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    placeholder: 'Date of Birth'
    });
});

function navigateToPage() {
    const pageSelect = document.getElementById("form-select");
    const selectedPage = pageSelect.value;

    if (selectedPage) {
        window.location.href = selectedPage;
    }
    return false;
}


document.getElementById('treeQuantity').addEventListener('input', function() {
    var treeQuantity = parseInt(this.value);
    var treeInputsContainer = document.getElementById('treeInputsContainer');
    
    // Clear existing input fields
    treeInputsContainer.innerHTML = '';
    
    // Generate new input fields based on quantity
    for (var i = 0; i < treeQuantity; i++) {
    var inputLabel = document.createElement('label');
    inputLabel.textContent = 'Tree ' + (i + 1) + ' Species:';
    
    var inputField = document.createElement('input');
    inputField.type = 'text';
    inputField.name = 'treeSpecies[]'; // Use array notation for multiple inputs
    
    var lineBreak = document.createElement('br');
    
    treeInputsContainer.appendChild(inputLabel);
    treeInputsContainer.appendChild(inputField);
    treeInputsContainer.appendChild(lineBreak);
    }
});

    
