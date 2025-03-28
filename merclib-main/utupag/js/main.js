document.addEventListener('DOMContentLoaded', function() {
    const sidebarHeader = document.querySelector('.sidebar-header');
    const sidebar = document.querySelector('.sidebar');
    
    sidebarHeader.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
        
        // Guardar el estado en localStorage para mantenerlo entre páginas
        if (sidebar.classList.contains('collapsed')) {
            localStorage.setItem('sidebarCollapsed', 'true');
        } else {
            localStorage.setItem('sidebarCollapsed', 'false');
        }
    });
    
    // Verificar si el menú estaba colapsado anteriormente
    if (localStorage.getItem('sidebarCollapsed') === 'true') {
        sidebar.classList.add('collapsed');
    }
});