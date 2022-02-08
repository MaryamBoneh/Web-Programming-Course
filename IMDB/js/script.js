media_info = [];

async function read_data(json_file){
    let file = await fetch(json_file);
    let information = await file.text();
    media_info = JSON.parse(information);    
    show_movie()
}


function show_movie(){      
    console.log(media_info);

    var main = document.getElementById("main");   
   
    for(var i = 0; i< media_info.length; i++) {
    
       
        var main_div = document.createElement("div");
        var img_div = document.createElement("div");
        var description_div = document.createElement("div");
        var director = document.createElement("span");
        var img = document.createElement("img");
        var rate = document.createElement("span");
        var card_title = document.createElement("h3");
        var genre = document.createElement("span");
        var year = document.createElement("span");

        main_div.className = "col-3 col-md col-sm m-3";
        img_div.className = "card";
        description_div.className = "card-body";
        card_title.className = "card-title";
        year.className = "card-text";
        director.className = "card-text";
        rate.className = "card-text";
        genre.className = "card-text";
        img.className = "fluid card-img-top";

        img.src = media_info[i].info.image_url;
        card_title.innerHTML = media_info[i].title;
        director.innerHTML = "Dirctor: " + media_info[i].info.directors;
        rate.innerHTML = "Rate:"+ media_info[i].info.rating;
        genre.innerHTML = "Genre:"+ media_info[i].info.genres;
        year.innerHTML = "Year: " + media_info[i].year;

        main.appendChild(main_div);          
        main_div.appendChild(img_div);
        main_div.appendChild(description_div); 
        img_div.appendChild(img);           
        description_div.appendChild(card_title);
        description_div.appendChild(director);
        description_div.appendChild(rate);
        description_div.appendChild(genre);
        description_div.appendChild(year);
       
    }   
}

read_data("https://raw.githubusercontent.com/MaryamBoneh/Web-Programming-Course/main/IMDB/data/moviedata.json");
