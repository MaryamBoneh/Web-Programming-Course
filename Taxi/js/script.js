var map;
var cars;
var lat = 36.2605;
var long = 59.6155;
flag = false;

async function read_data(json_file){
    let file = await fetch(json_file);
    let information = await file.text();
    cars = JSON.parse(information);    
}

function displayCars(){ 
    console.log(cars);

    var car1 = new google.maps.LatLng(cars[0].lat, cars[0].lng);
    var car2 = new google.maps.LatLng(cars[1].lat, cars[1].lng);
    var car3 = new google.maps.LatLng(cars[2].lat, cars[2].lng);

    var car_position_1 = new google.maps.LatLng(car1);
    map.setCenter(car_position_1);
    var car_img_1 = new google.maps.Marker({   
        position: car1,
        draggable: false,
        icon:'img/taxi.svg',
        animation:google.maps.Animation.BOUNCE
    });
    car_img_1.setMap(map);
    
    var car_position_2 = new google.maps.LatLng(car2);
    map.setCenter(car_position_2);
    var car_img_2 = new google.maps.Marker({   
        position: car2,
        draggable: false,
        icon:'img/taxi.svg',
        animation:google.maps.Animation.BOUNCE
    });
    car_img_2.setMap(map);
    
    var car_position_3 = new google.maps.LatLng(car3);
    map.setCenter(car_position_3);
    var car_img_3 = new google.maps.Marker({   
        position: car3,
        draggable: false,
        icon:'img/taxi.svg',
        animation:google.maps.Animation.BOUNCE
    });
    car_img_3.setMap(map);
}


function getDistance(start, end){
    x1 = start.lat()
    y1 = start.lng()
    x2 = end.lat()
    y2 = end.lng()
    var distance = Math.sqrt((x1 - x2) ** 2 + (y1 - y2) ** 2);
    return distance;
}

function myMap() {
    var mapProp= {
        center: new google.maps.LatLng(lat, long),
        zoom: 15,
    };
    map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

read_data("https://raw.githubusercontent.com/MaryamBoneh/Web-Programming-Course/main/Taxi/js/taxi.json");

if (navigator.geolocation){
    navigator.geolocation.getCurrentPosition(function(position){
        lat = position.coords.latitude
        long = position.coords.longitude

        var myCenter = new google.maps.LatLng(lat, long);
        map.setCenter(myCenter);

        var marker_start = new google.maps.Marker({
                position: myCenter,
                draggable: true,
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/position.png'
            });

        marker_start.setMap(map)
        
        google.maps.event.addListener(marker_start, 'click', function() {
            
            var location_start = marker_start.getPosition();
            
            if (!flag){
                flag = true;    
                
                document.getElementById("message").innerHTML = "مقصد را انتخاب کنید."
                
                var marker_end = new google.maps.Marker({
                    position: myCenter,
                    draggable: true,
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'img/destination.png'
                })
                
                marker_end.setMap(map)
                
                google.maps.event.addListener(marker_end, 'click', function(){
                    
                    var location_end = marker_end.getPosition();
                    
                    distance = getDistance(location_start, location_end);
                    var price = Math.round(distance * 2000);
                    console.log(price)
            
                    var message = document.getElementById("message")
                    message.innerHTML = "درخواست سفر شما ثبت شد. هزینه سفر " + price + " هزار تومان است.";
                    message.classList.remove("alert-warning");
                    message.classList.add("alert-success")
                    showNotification()
                });
            }
        });
        
        displayCars()
    });
} else {
    alert("geolocation isn't supported by this browser");
}
