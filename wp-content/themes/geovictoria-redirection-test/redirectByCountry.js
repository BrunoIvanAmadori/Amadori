function httpGet(theUrl) {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl, true); // false for synchronous request
  xmlHttp.send(null);
  return xmlHttp.responseText;
}

let response = httpGet("https://geolocation-db.com/jsonp");
console.log(response.json());
