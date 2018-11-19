<!--***********************************
Posts Section
*************************************-->
<div class="main">   
            <div class="boxes">
                <!-- <div class="column flex-v"></div> -->
                <div class="bg">
                    <div class="userInfo flex flex-h">
                        <div>
                            <img src="<?php echo $post->user->profile->image ?>" alt="" class="circular" style="width: 25px" style="height: 25px">
                        </div>
                        <?php echo $post->user->name ?>
                        <?php echo $post->user->description ?>
                        <a href="#"><?php echo $post->user->descriptionLink ?></a>
                    </div>
                    <div class="content flex flex-v">
                        <?php echo $post->contentDescription ?>
                        <img src="<?php echo $post->contentDescriptionLink ?>" alt="" class="halloImage">
                    </div>
                    <div class="comment-icon">
                    <i class="fas fa-comment-alt"></i> <?php echo $post->comments->count() ?>
                    </div>
                </div>
            </div>

</div>