console.log("ambikesh gautam you are in the Ajax ");

document.getElementById('fetchBtn');
fetchBtn.addEventListener('click', buttonClickHandler);

function buttonClickHandler() {
    // Instantiate an xhr object 
    console.log("you have clicked on the fetchBtn");
    const xhr = new XMLHttpRequest();

    // open th object
    xhr, open('GET', 'ambi.txt', true);
    // what to do on progress 
    xhr.onprogress = function() {
        console.log('on progress');

    }
    xhr.onload = function() {
            console.log(this.responseTest);

        }
        // send the request
    xhr.send();

}