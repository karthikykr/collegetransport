// Function to open the sidebar
function openSidebar() {
    document.getElementById('sidebar').style.left = '0'; // Open sidebar
    document.querySelector('.main-content').style.marginLeft = '250px'; // Adjust content
}

// Function to close the sidebar
function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('sidebarToggle');
    // Check if the mouse is not over the sidebar or the toggle button
    if (!sidebar.matches(':hover') && !toggleButton.matches(':hover')) {
        sidebar.style.left = '-250px'; // Close sidebar
        document.querySelector('.main-content').style.marginLeft = '0'; // Reset content margin
    }
}

// Add event listeners for the toggle button
const toggleButton = document.getElementById('sidebarToggle');
toggleButton.addEventListener('mouseover', openSidebar);
toggleButton.addEventListener('mouseout', closeSidebar);

// Add event listeners for the sidebar
const sidebar = document.getElementById('sidebar');
sidebar.addEventListener('mouseover', openSidebar);
sidebar.addEventListener('mouseout', closeSidebar);
