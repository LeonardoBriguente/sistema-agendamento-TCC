class Usuario{
    constructor(){
        this.eye = document.getElementById("eye-icon");
        this.password = document.getElementById("inputPassword");

        this.ModifyEye();
    };

    ModifyEye(){
        this.eye.addEventListener("click", () => this.ShowPassword());
    }

    ShowPassword(){
        if(this.password.type == "password"){
            this.password.type = "text";
            this.eye.className = "fa-solid fa-eye eye";
        }
        else{
            this.password.type = "password";
            this.eye.className = "fa-solid fa-eye-slash eye";
        }
    }
}

let user = new Usuario();