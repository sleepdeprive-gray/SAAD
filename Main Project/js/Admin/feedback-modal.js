function openModal(email, message, status) {
    // Set email and message in the modal input and textarea
    document.getElementById('modalEmail').value = email; // Use .value for input fields
    document.getElementById('modalMessage').value = message; // Use .value for textarea
    
    var statusButton = document.getElementById('statusButton');
    if (status === 'read') {
        statusButton.innerText = 'Mark as Unread';
    } else {
        statusButton.innerText = 'Mark as Read';
    }

    // Show the modal
    document.getElementById('messageModal').style.display = "block";
}

// Close the modal
function closeModal() {
    document.getElementById('messageModal').style.display = "none";
}