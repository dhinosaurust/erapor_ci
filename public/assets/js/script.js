const btnSideNav = document.getElementById('btnSideNav');
const sideNav = document.getElementById('sideNav');

btnSideNav.addEventListener('click', () => {
    sideNav.classList.toggle('sidebar-toggled');
    sideNav.classList.contains('sidebar-toggled') 
        ? sideNav.classList.remove('p-3') 
        : sideNav.classList.add('p-3');
    console.log('mashok pak eko');
});