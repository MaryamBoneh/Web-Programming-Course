
function Notify() {
    var notif = Notification("سفر جدید", {
        icon:"img/taxi.svg",
        body: "سلام خانم/آقای راننده. کجاااایی زود باش برو مسافر منتظره. البته عجله نکن!"
    })

    setTimeout(function() {notif.close()}, 5000);
}


function showNotification() {
    if ("Notification" in window){
        if (Notification.permission === "granted"){
            Notify();
        } else if (Notification.permission !== "denied"){
            Notification.requestPermission(function(permission){
                if (permission === "granted" ){
                    Notify();
                }
            })
        }
    } else {
        alert("نوتیفیکیشن در مرورگر شما پشتیبانی نمی‌شود.")
    }
}
