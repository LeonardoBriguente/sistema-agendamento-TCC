class FormActions{
    constructor(){
        this.inputs = document.querySelectorAll('input');
        this.eye = document.getElementById('icone');
        this.passwordInput = document.getElementById('inputPassword');
        this.reviewPassInput = document.getElementById('review-password');
        this.alertMessege = document.getElementById('aviso');

        this.addFocusListeners();
        this.addEyeListener();
    }

    addFocusListeners(){
        this.inputs.forEach(input => {
            input.addEventListener('focus', function(){
                this.style.backgroundColor = "";
            });
        });
    }

    addEyeListener(){
        this.eye.addEventListener('click', () => this.ShowPassword());
    }
    
    ShowPassword(){
        if(this.passwordInput.type == "password"){
            this.passwordInput.type = "text";
            this.reviewPassInput.type = "text";
            this.eye.src = "../imagens/olho-aberto.png";
        }
        else{
            this.passwordInput.type = "password";
            this.reviewPassInput.type = "password";
            this.eye.src = "../imagens/olho-fechado.png";
        }
    }

    VerifyAllInputs() {
        let verifyComplete = true;

        this.inputs.forEach(input => {
            if (input.value.trim() === '') {
                input.style.backgroundColor = "rgba(33, 106, 86, 0.2)";
                input.style.borderBottomColor = "#216A56";
                verifyComplete = false;
            }
        });

        console.log(verifyComplete);
        return verifyComplete;
    }

    VerifyPasswords() {

        //console de teste ATENÇÃO
        console.log("entrou");
        let passwordValue = this.passwordInput.value;
        let reviewValue = this.reviewPassInput.value;

        console.log(passwordValue);
        console.log(reviewValue);

        if (passwordValue != reviewValue) {
        console.log("entrou if");

            this.alertMessage.style.display = "block";
            this.reviewPassInput.style.backgroundColor = "rgba(33, 106, 86, 0.2)";
            this.reviewPassInput.style.borderBottomColor = "#216A56";

            return false;
        }
        console.log("passou");

        return true;
    }

    VerifyForm() {
        if(this.VerifyPasswords() == true && this.VerifyAllInputs() == true){
            return true;
        }

        else{
            return false;
        }
        // console.log("Verifying form...");
        // return  this.VerifyPasswords() && this.VerifyAllInputs();

        //PROBELMAS: Se colocar qualquer coisa nas senhas o form vai de arrasta mesmo com campos vazios.
    }
}

let formAction = new FormActions();