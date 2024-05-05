function greet(name) {
    return "Hello, " + name + "!";
}

function processUserInput(callback) {
    let name = prompt("Please enter your name:");
    alert(callback(name));
}

processUserInput(greet);

