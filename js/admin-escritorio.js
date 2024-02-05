function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const containerUserInfo = document.querySelector('.toggle-div');

    // Cambia las clases para expandir o contraer el panel lateral
    sidebar.classList.toggle('collapsed');
    mainContent.classList.toggle('collapsed');
    containerUserInfo.classList.toggle('collapsed');
}
