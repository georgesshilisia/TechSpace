      <?php include('includes/header.php'); ?>
        <ul id="topics">
                <?php if($topics) :?>
                         <?php foreach($topics as $topic) : ?>
                          <li class="topic">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class=" avatar pull-left" src="img/gravatar.jpg"/>
                                </div>
                                <div class="col-md-10">
                                    <div class="topic-content pull-right">
                                        <h3><a href="topic.html"><?php echo $topic->title; ?></a></h3>
                                        <div class="topic-info">
                                            <a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?>
                                            </a>>><a href="<topic.php?user=<?php echo urlFormat($topic->user_id)?>"><?php echo $topic->username; ?></a>>>
                                            <?php echo $topic->formatDate(create_date); ?>
                                            <span class="badge pull-right"><?php echo replyCount($topic->id); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                    <?php endforeach; ?>
                    </ul>
                <?php else : ?>
                    <p>No Topics To Display</p>
                <?php endif; ?>
                    <h3>Forum Statistics</h3>
                    <ul>
                        <li>Total Number of Users: <strong><?php echo $totalUsers; ?></strong></strong></li>
                        <li>Total Number of Topics: <strong><?php echo $totalTopics; ?></strong></strong></li>
                        <li>Total Number of Categories: <strong><?php echo $totalCategories; ?></strong></strong></li>
                    </ul>
                <?php include('includes/footer.php'); ?>