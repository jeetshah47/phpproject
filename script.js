const liveData = (str,name) => {
    switch(name) {
    case "name": document.getElementById("hidden1").innerHTML = "";
                
                 document.getElementById("hidden1").innerText = `Name: ${str}`;
                 break;
    case "username": document.getElementById("hidden2").innerHTML = "";
                 document.getElementById("hidden2").innerHTML = `Username: ${str}`;
                 break;
}
}

const showPreview = () => {
    document.getElementById("pre1").style.visibility = "hidden";
    document.getElementById("pre2").style.visibility = "visible";
}

const backPreview = () => {
    document.getElementById("pre1").style.visibility = "visible";
    document.getElementById("pre2").style.visibility = "hidden";
}
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}