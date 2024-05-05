const myPromise = new Promise((resolve,reject)=>{
    const error = false;
    if(!error){
        resolve('yes! resolved the promise')
    }
    else{
        reject("No! rejected the promise.")
    }
})

const myNextPromise = new Promise((resolve,reject)=>{
    setTimeout(function(){
        resolve("myNextPromise resolved")
    },5000)
})

myNextPromise.then(value =>{
    console.log(value)
})

myPromise.then(value => {
    console.log(value)
})
