<?php
    include "../model/database.php";
    include "navbar.php"; 
    $posts = $db->query("SELECT * FROM posts INNER JOIN users ON posts.USER_ID = users.ID");
?>
<div class="container mt-6rem">
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <div class="card rounded">
                <div class="card-header">
                   Add new post
                </div>
                <div class="card-body">
                    <form method="post" action="posts" id="new-post">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Caption:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="caption"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit" form="new-post">submit post</button>
                </div>
            </div>
        </div>

        <div class="col-6">
            <?php foreach($posts as $post):?>
                <div class="card rounded mb-5">
                    <div class="card-header d-flex justify-content-start align-items-center">
                        <img src="/Web-Programming-Course/Maryamgram/view/assets/img/users/<?php echo $post["IMAGE"];?>" class="img-fluid rounded-circle" width="80px" alt="...">
                        <span class="text-secondary m-3">
                            <span class=""><?php echo $post["FIRST_NAME"];?></span>
                            <br>
                            <span class=""><?php echo $post["LAST_NAME"];?></span>
                            <br>
                            <i><?php echo $post["TIME"];?></i>
                        </span>
                    </div>

                    <div class="card-body">
                        <img src="/Web-Programming-Course/Maryamgram/view/assets/img/posts/<?php echo $post["MEDIA"];?>" class="img-fluid" >
                        <p class="my-3"><?php echo $post["CAPTION"];?></p>
                    </div>
                
                    <div class="card-footer d-flex flex-row align-items-center">
                        <span class=""> 2 </span>
                        <button type="button" class="btn mt-1">
                            <span class="material-symbols-outlined">thumb_up</span>
                        </button>
                        <input type="text" class="form-control" id="<?php echo $post["ID"];?>" placeholder="your comment...">

                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

</div>


<?php include "footer.php"; ?>