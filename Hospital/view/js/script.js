function send_like(post_id) {
    let form = document.createElementById("form-like-" + post_id);
    let form_data = new FormData();

    fetch("send_like", {
        method : "post";
        body : form_data;
    }).then(result =>{
        let output = result.text();
    }).then(result=>{
        
    })

    
}