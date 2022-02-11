media_info = [];
years = [];

async function read_data(json_file){
    let file = await fetch(json_file);
    let information = await file.text();
    media_info = JSON.parse(information);    
    show_all_movies()
}

function show_movie(selected_year){

    var main = document.getElementById("main");   
    main.innerHTML = ''
    for(var i = 0; i< media_info.length; i++) {
       if (media_info[i].year == selected_year) {
            var main_div = document.createElement("div");
            var img_div = document.createElement("div");
            var description_div = document.createElement("div");
            var director = document.createElement("span");
            var img = document.createElement("img");
            var rate = document.createElement("span");
            var card_title = document.createElement("h4");
            var genre = document.createElement("span");
            var year = document.createElement("span");

            main_div.className = "col-lg-3 col-md-4 col-sm-6";
            img_div.className = "card";
            description_div.className = "card-body text-white border-box d-flex flex-column";
            card_title.className = "card-title";
            year.className = "card-text";
            director.className = "card-text";
            rate.className = "card-text";
            genre.className = "card-text";
            img.className = "fluid card-img-top";

            img.src = media_info[i].info.image_url;
            card_title.innerHTML = media_info[i].title;
            director.innerHTML = "Dirctor: " + media_info[i].info.directors;
            rate.innerHTML = "Rate: "+ media_info[i].info.rating;
            genre.innerHTML = "Genre: "+ media_info[i].info.genres;
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
            
            years.push(media_info[i].year)
       }
       
    }   
    unique_list()
}

function show_all_movies(){
    var main = document.getElementById("main");   
   
    for(var i = 0; i< media_info.length; i++) {
        var main_div = document.createElement("div");
        var img_div = document.createElement("div");
        var description_div = document.createElement("div");
        var director = document.createElement("span");
        var img = document.createElement("img");
        var rate = document.createElement("span");
        var card_title = document.createElement("h4");
        var genre = document.createElement("span");
        var year = document.createElement("span");

        main_div.className = "col-lg-3 col-md-4 col-sm-6";
        img_div.className = "card";
        description_div.className = "card-body text-white border-box d-flex flex-column";
        card_title.className = "card-title";
        year.className = "card-text";
        director.className = "card-text";
        rate.className = "card-text";
        genre.className = "card-text";
        img.className = "fluid card-img-top";

        img.src = media_info[i].info.image_url;
        card_title.innerHTML = media_info[i].title;
        director.innerHTML = "Dirctor: " + media_info[i].info.directors;
        rate.innerHTML = "Rate: "+ media_info[i].info.rating;
        genre.innerHTML = "Genre: "+ media_info[i].info.genres;
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
        
        years.push(media_info[i].year)
    }   
    unique_list()
}

function unique_list(){
    var filter = document.getElementById("filter");
    var unique_list_year = new Set(years);
    unique_list_year = [...unique_list_year]
    unique_list_year.sort();

    for (let i = 0; i < unique_list_year.length; i++){
        var filter_li = document.createElement("li");
        var filter_li_a = document.createElement("a");
        filter_li_a.className = "dropdown-item";
        filter_li_a.value = unique_list_year[i];
        filter_li_a.innerHTML = unique_list_year[i];
        filter_li_a.onclick = function(){show_movie(unique_list_year[i])};
        filter.appendChild(filter_li);      
        filter_li.appendChild(filter_li_a);
    }
}


read_data("https://raw.githubusercontent.com/MaryamBoneh/Web-Programming-Course/main/IMDB/data/moviedata.json");
