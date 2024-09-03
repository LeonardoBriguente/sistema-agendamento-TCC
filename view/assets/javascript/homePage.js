class SideBar {
    constructor() {
        // this.sidebar = document.querySelector(".sidebar");
        this.navbar = document.querySelector(".navbar");
        this.icon = document.querySelector("#hamburguer");
        
        this.Icon.addEventListener("click", () => this.ToggleMenu());
    }

    static isOpen = true;

    ToggleMenu() {
        if (isOpen == true) {
            this.closeMenu();
        } else {
            this.openMenu();
        }
    }

    openMenu() {
        this.sidebar.style.width = "250px";
        this.content.classList.add("open");
        this.menuIcon.classList.add("open");
    }

    closeMenu() {
        this.sidebar.style.width = "0";
        this.content.classList.remove("open");
        this.menuIcon.classList.remove("open");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new SideBar();
});

