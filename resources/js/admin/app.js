import('@popperjs/core');
import {PerfectScrollbar} from '/resources/js/admin/plugins/perfect-scrollbar.min'

let btnMenu = document.querySelector('#menu-btn');
btnMenu.addEventListener('click', (e)=>{
    e.preventDefault();
    let sidebar = document.getElementById('sidebarMenu');
    sidebar.classList.toggle('active');
});

