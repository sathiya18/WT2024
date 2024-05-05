const view1 =document.getElementById("view1");
console.log(view1);

const view2 =document.querySelector("#view2");
console.log(view2)

view1.style.display = "flex";
view2.style.display ="none";

const views = document.getElementsByClassName("view");
console.log(views);

const sameviews =document.querySelectorAll(".view");
console.log(sameviews);

const divs = view1.querySelectorAll("div");
console.log(divs);

const sameDivs = view1.getElementsByTagName("div");
console.log(sameDivs);


const evenDivs = view1.querySelectorAll("div:nth-of-type(2n)");
console.log(evenDivs);
evenDivs[4].style.backgroundColor="purple";

for(i=0; i < evenDivs.length; i++){
evenDivs[i].style.width="150px";
evenDivs[i].style.backgroundColor ="green";

}

const navText =document.querySelector("nav h1");
console.log(navText);
navText.textContent = "Hello World";
const navBar = document.querySelector("nav");
navBar.innerHTML="<h1> PTU </H1><P> Puducherry</p>"
console.log(navBar);
navBar.style.justifyContent= "space-evenly";



console.log(evenDivs[0]);
console.log(evenDivs[0].parentElement);
console.log(evenDivs[0].parentElement.children);
console.log(evenDivs[0].parentElement.hasChildNodes);
console.log(evenDivs[0].parentElement.lastChild);
console.log(evenDivs[0].parentElement.lastElementChild);
console.log(evenDivs[0].parentElement.firstChild);
console.log(evenDivs[0].parentElement.firstElementChild);
console.log(evenDivs[0].nextSibling);
console.log(evenDivs[0].nextElementSibling);
console.log(evenDivs[0].nextElementSibling.nextElementSibling);
console.log(evenDivs[0].previousElementSibling);
console.log(evenDivs[0].previousElementSibling);
