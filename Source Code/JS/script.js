let darkMode = localStorage.getItem("darkMode");
const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const darkModeToggle = document.querySelector("#dark-mode-toggle");

// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});
// close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});  
// change theme
const enableDarkMode = () => {
    document.body.classList.add("darkmode");
    localStorage.setItem('darkMode', 'enabled'); 
};

const disableDarkMode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkMode', null); 
};

if (darkMode === 'enabled') {
    enableDarkMode();
}

darkModeToggle.addEventListener('click', () => {
    darkMode = localStorage.getItem('darkMode');
    if (darkMode !== 'enabled') { 
        enableDarkMode();
    } else {
        disableDarkMode();
    }
    darkModeToggle.querySelector('span:nth-child(2)').classList.toggle('active');
    darkModeToggle.querySelector('span:nth-child(1)').classList.toggle('active');
});


const modal = document.querySelector('#modal');
const openModal = document.querySelector('.open-button');
const closeModal = document.querySelector('.close-button');

openModal.addEventListener('click', () => {
    modal.showModal()
})

closeModal.addEventListener('click', () => {
    modal.close()
})