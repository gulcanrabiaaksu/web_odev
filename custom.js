var listele=document.getElementById("album")
let data=fetch("https://jsonplaceholder.typicode.com/albums/1/photos")
.then(response=>response.json())
.then(veri=>{
    veri.forEach(element=>
    {
        if(element.id<=8)
        {
            listele.innerHTML+=`<img src="${element.url}"/>`
        }
    });
});