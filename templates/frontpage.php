<?php include ("includes/header.php"); ?>

    <div class="main-col">

        <div class="block">
            <h2 class="pull-left">
                Welcome to Talking Camp
            </h2>
            <h4 class="pull-right">
                A simple PHP Forum Engine
            </h4>
            <div class="clearfix"></div>
            <hr>
            <?php  displayMessage(); ?>
            <ul id="topics">
                <?php if($topics) : ?>

                    <?php foreach($topics as $topic) : ?>

                        <li class="topic">
                            <div class="row ">
                                <div class="col-md-2 ">
                                    <div class="">
                                        <div class="user-info">
                                            <img class="avatar pull-left" src="images/avatars/<?php echo $topic['avatar']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 ">
                                    <div class="topic-content ">
                                        <h3 class="">
                                            <a href="topic.php?id=<?php echo $topic['id']; ?>">
                                                <?php echo $topic['title']; ?>
                                            </a>

                                        </h3>
                                        <div class="">
                                            <a href="topics.php?category=<?php echo $topic['category_id']; ?>"><?php echo $topic['name']; ?></a>
                                            >>
                                            <a href="topics.php?user=<?php  echo $topic['user_id']; ?>"><?php echo $topic['username']; ?></a>
                                            >>
                                            <a href="">Posted on <?php echo formatDate($topic['create_date']); ?> </a>
                                            <span class="badge"><?php echo replyCount($topic['id']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php else :  ?>

                    <p> No Topic to display</p>
                <?php endif; ?>

            </ul>

            <h3>
                Forum Statistics
            </h3>

            <ul>
                <li>Total Number of Users : <strong><?php echo $totalUsers;?></strong></li>
                <li>Total Number of Topics : <strong><?php echo $totalTopics;?></strong></li>
                <li>Total Number of Categories : <strong><?php echo $totalCategories;?></strong></li>
            </ul>
        </div>
    </div>
<?php include ("includes/footer.php"); ?>