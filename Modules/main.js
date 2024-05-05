
if ( typeof window.getPeople === "function")
{
    const people = window.getPeople();
    function filterByAge(people, minAge) 
    {
        return people.filter(person => person.age >= minAge);
      
    }
      
      const adults = filterByAge(people, 21);
      console.log("Adults:", adults);
}
else
{
    console.error("error: Module data.js not loaded properly")
}


