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