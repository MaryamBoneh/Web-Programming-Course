<?php
    include "../model/database.php";
    include "navbar.php"; 
    $posts = $db->query("SELECT *, users.ID AS karbar_id, posts.ID AS post_id FROM posts INNER JOIN users ON posts.USER_ID = users.ID ORDER BY TIME DESC");
    $posts_array = array();
    foreach ($posts as $post)
    {
        $post_id = $post["post_id"];
        $post["likes"] = $db->query("SELECT COUNT(*) AS count FROM likes WHERE POST_ID = $post_id")->fetch_assoc();
        $post["comments"] = $db->query("SELECT * FROM comments INNER JOIN users ON comments.USER_ID = users.ID WHERE comments.POST_ID = $post_id ORDER BY TIME DESC");
        $posts_array[] = $post;
    }
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
            <?php foreach($posts_array as $post):?>
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
                        <button class="btn btn-success" type="button" data-bs-toggle="collapse"
                         data-bs-target="#collapse<?php echo $post["ID"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post["ID"]; ?>">
                            comments
                        </button>
                        <br>
                        <br>
                        <div class="collapse" id="collapse<?php echo $post["post_id"]; ?>">
                            <div class="list-group">
                                <?php foreach($post["comments"] as $comment) : ?>
                                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <i> <?php echo $comment["USER_NAME"];?></i>
                                            <h6><?php echo $comment["TEXT"];?></h6>
                                            <i> <?php echo time2str($comment["TIME"]);?></i>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

</div>


<?php include "footer.php"; ?>