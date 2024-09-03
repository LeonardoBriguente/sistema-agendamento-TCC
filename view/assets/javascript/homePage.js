class SideBar {
    constructor() {
        this.icon = document.querySelector("#hamburguer");
        this.sidebar = document.querySelector(".sidebar");

        this.icon.addEventListener("click", () => this.ToggleMenu());
    }

    static isOpen = false;

    ToggleMenu() {
        if (SideBar.isOpen) {
            this.closeMenu();
        } else {
            this.openMenu();
        }
        SideBar.isOpen = !SideBar.isOpen;
    }

    openMenu() {
        this.sidebar.classList.add("open");
    }

    closeMenu() {
        this.sidebar.classList.remove("open");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let start = new SideBar();
});
