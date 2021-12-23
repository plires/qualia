const form = document.getElementsByTagName('form')[0]
const inputs = form.getElementsByTagName('input')
const textarea = form.getElementsByTagName('textarea')[0]
const sending = document.getElementById('sending_form')


function submitFormContacto(form) {

  let formValidated = validateForm()

  if (formValidated) {
    sending.classList.add('active')
    verifyRecaptcha(form, '6LfnZJMdAAAAAAuBwszjLqdyOHG3W90tntO1hfde', 'validarFormularioContacto' )
  }

}

function validateForm() {

  validForm = true

  textarea.classList.remove("invalid")

  if (textarea.value == "" ) {

    textarea.className += " invalid"
    validForm = false
    
  }

  for (i = 0; i < inputs.length; i++) {

    inputs[i].classList.remove("invalid")

    if (inputs[i].type === 'email') { // Si el input es de tipo email
      if (!this.validateEmail(inputs[i].value)) {
        inputs[i].className += " invalid"
        validForm = false
      }
    }

    if (inputs[i].value == "" ) {

      inputs[i].className += " invalid"
      validForm = false
      
    }

  }

  return validForm

}

function validateEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email)
}

// Verificar recaptcha de los formularios
function verifyRecaptcha(formName = null, key = null, action = null) {

  var errorsInFieldsFront = false

  // Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var form = document.getElementById(formName);

  // Loop over them and prevent submission
  if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    errorsInFieldsFront = true
  }

  // form.classList.add('was-validated');

  if (!errorsInFieldsFront) {
    grecaptcha.ready(function() {
      grecaptcha.execute(key , {
        action: action
        }).then(function(token) {
        $('#' + formName).prepend('<input type="hidden" name="token" value="' + token + '" >');
        $('#' + formName).prepend('<input type="hidden" name="action" value="' + action + '" >');
        $('#' + formName).submit();
      });
    });
  }
  
}