function passwordSubmit() {
  if (document.getElementById("pword").value != document.getElementById("confirm").value) {
    alert("Passwords were not the same!")
  }
  else if (document.getElementById("pword").value.length < 9) {
    alert("Password was not strong enough!")
  }
  else {
    alert("Passwords matched!")
  }
}
