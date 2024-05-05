const myPromise = new Promise((resolve,reject)=>{
const error = true;
//const error = false;
    if(!error){
        resolve('yes! resolved the promise')
    }
    else{
        reject("No! rejected the promise.")
    }
})
console.log(myPromise)

myPromise.then(value => {
    return value
})
.then(newValue => console.log(newValue))
.catch(err =>{
    console.log(err)
})