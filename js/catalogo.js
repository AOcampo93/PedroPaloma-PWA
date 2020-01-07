// CALLING THE JSON
const requestURL = 'producto.json';
fetch(requestURL)
    .then(function(response) {
        return response.json();
    })
    .then(function(jsonObject) {
        console.table(jsonObject);
        myobj = jsonObject;

        // SEARCHING THE PROPERTIES IN THE JSON FILE

        var name = myobj.paquetes[0].name;
        //IMG
        /*var FishPhoto = myobj.towns[1].photo;
        var PrestonPhoto = myobj.towns[4].photo;
        var SodaPhoto = myobj.towns[5].photo;*/


        // PRINTING THE RESULTS IN THE HTML

        //PHOTO
        /*document.getElementById("FishPhoto").src = FishPhoto;
        document.getElementById("PrestonPhoto").src = PrestonPhoto;
        document.getElementById("SodaPhoto").src = SodaPhoto;*/
    });