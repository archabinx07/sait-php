<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header class="flex flex-v">
      <div class="top-top bg-white p-10">
        Top Top
      </div>
      <div class="hero-row bg-2">
        <img src="https://pbs.twimg.com/profile_banners/4917964310/1489630164/1500x500" width="100%" height="500px" style="object-fit: cover;">
      </div>
      <div class="stats bg-white py-10">
        <div class="flex flex-h flex-center">
          <div class="stat px-10">
            <div class="label fw-bold">
              Tweets
            </div>
            <div class="value">
                <?php echo $user['tweets'] ?>
            </div>
          </div>
          <div class="stat px-10">
            <div class="label fw-bold">
              Following
            </div>
            <div class="value">
                <?php echo $user['following'] ?>
            </div>
          </div>
          <div class="stat px-10">
            <div class="label fw-bold">
              Followers
            </div>
            <div class="value">
                <?php echo $user['followers'] ?>
            </div>
          </div>
          <div class="stat px-10">
            <div class="label fw-bold">
              Likes
            </div>
            <div class="value">
                <?php echo $user['likes'] ?>
            </div>
          </div>
          <div class="stat px-10">
            <div class="label fw-bold">
              Lists
            </div>
            <div class="value">
                <?php echo $user['lists'] ?>
            </div>
          </div>
          <div class="stat px-40">
            <button><span>Follow</span></button>
          </div>
        </div>
      </div>
    </header>
    <main class="flex customContainer">
      <div class="user-details flex-1 p-10">
        <div class="fz-4 fw-bold mb-0 pb-0 lh-1">
            <?php echo $user['name'] ?>
        </div>
        <div class="c-3">
            <?php echo $user['handle'] ?>
        </div>
        <div class="c-3">
        <br>
            <?php echo $user['description'] ?> <a href=""><?php echo $user['descriptionLink'] ?></a>
        </div>
        <div class="c-3">
        <br>
          <i class="fas fa-link"></i> <a href=""><?php echo $user['website'] ?></a>
        </div>
        <div class="c-3">
        <?php echo $user['joined'] ?>
        </div>
      </div>
      <div class="tweets flex-2 bg-white p-10">
          <div class="flex flex-h flex-left">
            <div class="label fw-bold px-10">
               <a href="#">Tweets</a> 
            </div>
            <div class="label fw-bold px-10">
               <a href="">Tweets & replies</a> 
            </div>
            <div class="label fw-bold px-10">
                <a href="">Media</a> 
            </div>
          </div>
          <hr>
      <?php foreach ($userTweet as $tweet): ?>
            <div class="flex mb-2">
                <div class="">
                <img src="<?php echo $tweet['image'] ?>"
                    alt=""
                    class="circular"
                    style="width: 50px"
                    style="height: 50px"
                    >
                </div>
                <div class="c-3 ml-3">
                <a href=""><?php echo $tweet['name'] ?></a>
                    <?php echo $tweet['handle'] ?> <br>
                    <?php echo $tweet['description'] ?> <br>
                    <img src="<?php echo $tweet['img'] ?>">
                </div>
            </div>
            <hr>
            <?php endforeach; ?>
      </div>
        <div class="suggestion flex-1 bg-white p-10">
            <div class="fz-4 mb-2 fw-bold">
            You may also like
            </div>
            <?php foreach ($youMightLike as $tweeter): ?>
            <div class="flex mb-2">
                <div class="mr-0">
                <img src="<?php echo $tweeter['image'] ?>"
                    alt=""
                    class="circular"
                    style="width: 70%"
                    >
                </div>
                <div class="c-3">
                <strong style="color:black"><?php echo $tweeter['name'] ?></strong><br>
                <?php echo $tweeter['handle'] ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
  </body>
</html>