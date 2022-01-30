let state = document.querySelector("#state");
let city = document.querySelector("#city");
let dststate = document.querySelector("#dststate");
let dstcity = document.querySelector("#dstcity");

let xhr = new XMLHttpRequest();
urlState = "https://www.universal-tutorial.com/api/states/India";
xhr.open("GET", urlState, true);
xhr.setRequestHeader("Accept","application/json");
xhr.setRequestHeader(
  "Authorization",
  "Bearer key");
xhr.onreadystatechange = function () {

  if (this.readyState == 4 && this.status == 200) {
    let data = JSON.parse(this.responseText);
    data.forEach((element) => {
      state.innerHTML += `<option value="${element.state_name}">${element.state_name}</option>`;
    });
  }
  dststate.innerHTML = state.innerHTML;
};
xhr.send();

state.addEventListener("change",()=>{
    let stateValue = state.value;
    city.style.display="block";
    city.innerHTML ="";
    let xhr = new XMLHttpRequest();
    urlState = `https://www.universal-tutorial.com/api/cities/${stateValue}`;
    xhr.open("GET", urlState, true);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader(
    "Authorization",
      "Bearer key"
    );
    xhr.onreadystatechange = function () {
    
    if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        data.forEach((element) => {
        city.innerHTML += `<option value="${element.city_name}">${element.city_name}</option>`;
        });
    }

    };
    xhr.send();
});
