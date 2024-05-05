const myUsers ={
    userList : []
}

const users = async() =>{
    const response = await fetch("https://jsonplaceholder.typicode.com/users")
    const userData = await response.json()
    anotherFunction(userData)
    return userData
}

const anotherFunction = (data) =>{
    myUsers.userList = data
    console.log(myUsers)
    return data
}

users()
console.log(myUsers)