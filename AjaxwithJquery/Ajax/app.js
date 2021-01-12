// console.log('Hello Ambikesh How are You?');
// lEts Start XHR - XMLHttpRequest with Text file
// Get Button 
const button = document.getElementById('getData');
const jsonBtn = document.getElementById('getJson');


// Click Event
button.addEventListener('click', loadData);
jsonBtn.addEventListener('click', loadJson);

// Function Load 

function loadJson() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'demo.json', true);
    xhr.onload = function() {
        if (this.status === 200) {
            const data = JSON.parse(this.responseText);
            let output = '';
            data.forEach(function(person) {
                output += `
                    <ul class="list-group">
                        <li class="list-group-item">ID: ${person.id}</li>
                        <li class="list-group-item">Name: ${person.name}</li>
                        <li class="list-group-item">Age: ${person.age}</li>
                        <li class="list-group-item">Location: ${person.address}</li>
                    </ul>
                `;
            });
            document.getElementById('output').innerHTML = output;
        }
    }
    xhr.send();
}


function loadData() {
    // Create XHR   hey bro ha bhai bolo call  pr 
    const xhr = new XMLHttpRequest();
    // Open file

    xhr.open('GET', 'demo.txt', true);

    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('output').innerHTML = this.responseText;
            console.log(0);
        }
    }

    xhr.onload = function() {
        if (this.status === 200) {
            document.getElementById('output').innerHTML = this.responseText;
        }
    }



    xhr.send();

}

function loadData() {
    // Creat XMLHttpRequest object 
    //Open a folder/file/with
    // object.open = ('method', 'location','asynchronous');
    //
}