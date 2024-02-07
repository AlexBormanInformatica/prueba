function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const containerUserInfo = document.querySelector('.toggle-div');
    const dashboardStats = document.querySelectorAll('.dashboard-stats canvas');

    // Cambia las clases para expandir o contraer el panel lateral
    sidebar.classList.toggle('collapsed');
    mainContent.classList.toggle('collapsed');
    containerUserInfo.classList.toggle('collapsed');

    // Ajusta dinámicamente el tamaño del canvas en las tarjetas de estadísticas
    dashboardStats.forEach(canvas => {
        const parentDiv = canvas.parentNode;
        const width = parentDiv.offsetWidth;
        const height = parentDiv.offsetHeight;
        canvas.width = width;
        canvas.height = height;
    });
}