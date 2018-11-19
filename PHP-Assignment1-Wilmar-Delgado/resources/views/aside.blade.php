<!--***********************************
Aside Section
*************************************-->
<div class="aside">
        <div class="fifth-box">
            <img src="<?php echo $summary->summaryBanner ?>" alt="" class="summaryBanner">
            <div class="summaryHeading">
                <img src="<?php echo $summary->summaryImage ?>" alt="" class="summaryImg">
                <?php echo $summary->summaryHeading ?> <br>
            </div>
            <div class="summaryContent">
                <?php echo $summary->summaryDescription ?>
            </div>
            <button type="button" class="postBtn" onclick="alert('Yeah Boii!')"><strong style="color: black">CREATE POST</strong></button>
        </div>

        <div class="sixth-box">
            <div class="adHeading">
                <?php echo $ad->description ?>
            </div>
            <img src="<?php echo $ad->image ?>" alt="" style="width: 100%">
        </div>
        <div class="seventh-box">
            <span class="trendingHeading">TRENDING COMMUNITIES</span>
            <?php foreach ($communities as $community): ?>
                    <div class="communityContainer flex flex-h">
                        <div class="community">
                            <img src="<?php echo $community->profile->image ?>" alt="" class="circular" style="width: 35px" style="height: 35px">
                        </div>
                        <div class="info">
                            <a href="<?php echo $community->id ?>"><?php echo $community->name ?></a> <br>
                        </div>
                        <button type="button" class="subscribeBtn" onclick="alert('Subscribed!')">SUBSCRIBE</button>
                    </div>
            <?php endforeach; ?>
        </div>
</div>