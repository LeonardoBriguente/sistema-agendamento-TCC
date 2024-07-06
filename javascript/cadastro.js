const allInputs = document.querySelectorAll('input');

for(let i = 0; i < allInputs.length; i++){
    allInputs[i].addEventListener('focus', function(){
       this.style.backgroundColor = "";
    })
}

function ShowPassword(){
    let eye = document.getElementById('icone');
    let dataInput = document.getElementById('inputPassword');
    let confirmarSenha = document.getElementById('review-password');

    if(dataInput.type === 'password'){
        dataInput.type = 'text';
        confirmarSenha.type = 'text';
        eye.src = '../imagens/olho-aberto.png';
    }

    else{
        dataInput.type = 'password';
        confirmarSenha.type = 'password';
        eye.src = '../imagens/olho-fechado.png';
    }
}

function VerifyAllInputs(){
    let inputs = document.getElementsByTagName('input');
    let verifyComplete = true;

    for(let i = 0; i < inputs.length; i++){
        if(inputs[i].value === ''){
            inputs[i].style.backgroundColor = "rgba(33, 106, 86, 0.2)";
            inputs[i].style.borderBottomColor = "#216A56";
            verifyComplete = false;
        }
    }
    return verifyComplete;
}

function VerifyPasswords(){
    let passwordInput = document.getElementById('inputPassword').value;
    // let passwordValue = passwordInput.value;
    let reviewPasswordInput = document.getElementById('review-password')
    let review = reviewPasswordInput.value;

    let alert = document.getElementById('aviso');

    if (passwordInput != review){
        alert.style.display = "block";
        reviewPasswordInput.style.backgroundColor = "rgba(33, 106, 86, 0.2)";
        reviewPasswordInput.style.borderBottomColor = "#216A56";
        return false;      
    }
    else{
        return true;
    }
}

function VerifyForm(){
    // event.preventDefault();

    if(VerifyAllInputs() === true && VerifyPasswords() === true){
        return true;
    }

    else{
        return false;
    }
}