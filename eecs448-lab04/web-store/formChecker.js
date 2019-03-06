function formSubmit() {
  let tusks = document.getElementsByName("tusks")[0].value
  let pelts = document.getElementsByName("pelts")[0].value
  let claws = document.getElementsByName("claws")[0].value
  let shipping = getShipping(document.getElementsByName("shipping"))
  let email = document.getElementsByName("email")[0].value
  let password = document.getElementsByName("password")[0].value

  if (tusks >= 0 && pelts >= 0 && claws >= 0 && shipping && validateEmail(email) && password){
    $.ajax({
      data: 'tusks=' + tusks +
            '&pelts=' + pelts +
            '&claws=' + claws +
            '&shipping=' + shipping +
            '&email=' + email +
            '&password=' + password,
      url: 'customerBackend.php',
      method: 'POST',
      error: function(error){
        alert("Error " + error)
      }
    })
  }
  else {
    alert("Inputs failed. :(")
  }
}

function validateEmail(email){
  return email.lastIndexOf(".") > email.indexOf("@");
}

function getShipping(arr) {
  for (let e in arr){
    if (e.checked == true){
      return e.value
    }
  }
  else return -1;
}
