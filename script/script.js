const sidebar = document.querySelector('.sidebar'); // Sidebar element
const gridContainer = document.querySelector('.grid-container'); // Grid container
const sidebarToggle = document.querySelector('.sidebar-toggle');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-collapsed');
    // Adjust the grid container margin to account for the sidebar collapse
    gridContainer.classList.toggle('sidebar-collapsed');
});