document.getElementById("addNewUserBtn").addEventListener("click", function() {
    let form = document.getElementById("addUserModal");
    if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block";  // Show the form
    } else {
        form.style.display = "none";   // Hide the form
    }
});

// Get the modal
let modal = document.querySelector(".modal");

// Get the close button element
let closeButton = document.querySelector(".close-btn");

// Close the modal when the close button is clicked
closeButton.addEventListener("click", function() {
    modal.style.display = "none";  // Hide the modal
});

// Display success message
function showSuccessMessage() {
    let notification = document.getElementById('notification');
    notification.style.display = 'block';
    
    // Hide the message after 6 seconds
    setTimeout(function() {
        notification.style.display = 'none';
    }, 6000);
}

showSuccessMessage()


//Draw a simple pie chart to summarise the number of users

// Getting the canvas element and its 2D drawing context
var canvas = document.getElementById('userSummaryChart');
var ctx = canvas.getContext('2d');

// Legend container
var legendContainer = document.getElementById('chartLegend');

// Data for the pie chart (same data from PHP variables)
var data = [
    { label: 'Active Users', value: activeUsers, color: '#73D237' },
    { label: 'Banned Users', value: bannedUsers, color: '#8424EC' },
    { label: 'Deactivated Users', value: deactivatedUsers, color: '#FCDC3C' }
];

// Calculate total value of all data points
var totalValue = data.reduce(function(sum, dataPoint) {
    return sum + dataPoint.value;
}, 0);

// Pie chart drawing properties
var centerX = canvas.width / 2;
var centerY = canvas.height / 2;
var radius = Math.min(centerX, centerY) - 20; // Leave space for labels

// Start drawing the pie chart
var startAngle = 0;
data.forEach(function(item) {
    // Calculate slice angle
    var sliceAngle = (item.value / totalValue) * 2 * Math.PI;

    // Draw slice
    ctx.beginPath();
    ctx.moveTo(centerX, centerY); // Start from center
    ctx.arc(centerX, centerY, radius, startAngle, startAngle + sliceAngle); // Draw arc
    ctx.closePath();
    ctx.fillStyle = item.color;
    ctx.fill();

    // Update startAngle for the next slice
    startAngle += sliceAngle;

    // Create legend item
    var legendItem = document.createElement('div');
    legendItem.style.display = 'flex';
    legendItem.style.alignItems = 'center';
    legendItem.style.marginBottom = '8px';

    // Create color box
    var colorBox = document.createElement('div');
    colorBox.style.width = '20px';
    colorBox.style.height = '20px';
    colorBox.style.backgroundColor = item.color;
    colorBox.style.marginRight = '10px';

    // Create label text
    var labelText = document.createElement('span');
    labelText.textContent = item.label;

    // Append color box and label to legend item
    legendItem.appendChild(colorBox);
    legendItem.appendChild(labelText);

    // Append legend item to the legend container
    legendContainer.appendChild(legendItem);
});