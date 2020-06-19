<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
String.prototype.rtrim = function() {
    return this.replace(/\s+$/, "");
}

        let lowerCaseLetters = /[a-z]/gi;
        let numbers = /[0-9]/i;
        let upperCaseLetters = /[A-Z]/gi;

function inputUsername(inputData){
    let usernameData = inputData.rtrim().split(" ");
    let usernameInput = $('#register_username').val();

    if(usernameData < 2){
        usernameInput.after('<div class="erreur text-dark small" style="font-size: xx-small;">Le nom d\'utilisateur doit être de 3 caractères minimum et ne peux pas contenir d\'espace</div>');   
        
    }else{
        if(usernameData > 10) {
            usernameInput.after('<div class="erreur text-dark small" style="font-size: xx-small;">Le nom d\'utilisateur doit être  moins de 10 caractères</div>');
        }
         return usernameData;
           
    }
}

function inputEmail(inputData){
    let emailData = inputData.rtrim().split(" ");
    emailInput = $('#register_email').val();
    if(emailData < 1) {
        emailInput.after('<div class="erreur text-dark small" style="font-size: xx-small;">Ce champ est obligatoire</div>');
    }else{
        let regEx = /^[a-zA-Z0-9][a-zA-Z0-9._%+-]{0,63}@(?:[a-zA-Z0-9-]{1,63}\.){1,125}[a-zA-Z]{2,63}$/;
        let validEmail = regEx.test(emailData);

        if(!validEmail)
        {
            emailData.after('<span class="erreur text-dark small" style="font-size: xx-small;">Merci de rentrer une adresse email valide</span>');
        }
        else{
            return emailData;
        }
    }

}

function inputPassword(inputData){
    let passwordData = inputData.rtrim().split(" ");
    passwordInput = $('#register_password').val();

    if(passwordData < 8){
        passwordInput.after('<div class="erreur text-dark small-2" style="font-size: xx-small;">Merci de rentrer un mot de passe de 8 caractères minimum</div>');
        
    }else  {

        if(!password.match(lowerCaseLetters)) {
            passwordInput.after('<div class="erreur text-dark small-2" style="font-size: xx-small;">Le mot de passe doit contenir au moins une letter minuscule</div>');   
        } 
        else if(!password.match(upperCaseLetters)) {
            passwordInput.after('<div class="erreur text-dark small-2" style="font-size: xx-small;">Le mot de passe doit contenir au moins une letter majuscule</div>');   
        }

        else if (!password.match(numbers)) {
            passwordInput.after('<div class="erreur text-dark small-2" style="font-size: xx-small;">Le mot de passe doit contenir au moins un chiffre</div>');   
        }
        return passwordData;
    }
}

