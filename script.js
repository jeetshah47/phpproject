/*const putData = (num) => {
    var session = num;
    window.open('user_session/project_blog.php','_self') ;
    return session;
}
*/
const getData = (str) => {
    var xmlHttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = () => {
        if (this.readyState == 4 && this.status == 200) {
            window.open('user_session/project_blog.php','_self');
        }
        xmlhttp.open("GET", "user_session/project_blog.php?q=" + str, true);
        xmlhttp.send();

    }
}