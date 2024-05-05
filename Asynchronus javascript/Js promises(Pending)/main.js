const users = fetch ("https://jsonplaceholder.typicode.com/users")
.then(response => {
    return response.json()
}).then(users =>{
    users.forEach(user => {
        console.log(user)
    });
})

console.log(users)