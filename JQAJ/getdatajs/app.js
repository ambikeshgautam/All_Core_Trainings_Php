function myfun() {
    var req = new XMLHttpRequest();
    req.open('GET', 'content.txt', true);
    req.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 2000) {
            document.getElementById("#output").innerHTML = this.responseText;
        }

    }
    req.send();
}