class Sidebar {
    constructor() {
        this.sidebar = document.querySelector(".sidebar");
        this.content = document.querySelector(".content");
        this.menuIcon = document.querySelector("#menuIcon");

        this.menuIcon.addEventListener("click", () => this.toggleMenu());
    }

    toggleMenu() {
        if (this.sidebar.style.width === "250px") {
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
    new Sidebar();
});

