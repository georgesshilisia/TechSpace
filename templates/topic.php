<?php include('includes/header.php'); ?>
<ul id="topics">
    <li class="topic">
        <div class="row">
            <div class="col-md-2">
                <img class=" avatar pull-left" src="img/gravatar.jpg"/>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.html">How did you learn CSS and HTML?</a></h3>
                    <div class="topic-info">
                        <a href="category.html">Development</a>> <a href="profile.html">BradT</a>
                        <span class="badge pull-right">3</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="topic">
        <div class="row">
            <div class="col-md-2">
                <img class=" avatar pull-left" src="img/gravatar.jpg"/>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.html">How to create new page dynamically in PHP?</a><span> </span></h3>
                    <div class="topic-info">
                        <a href="category.html">Development</a>> <a href="profile.html">BradT</a>
                        <span class="badge pull-right">7</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="topic">
        <div class="row">
            <div class="col-md-2">
                <img class=" avatar pull-left" src="img/gravatar.jpg"/>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.html">Google - Panda - Who's affected?</a></h3>
                    <div class="topic-info">
                        <a href="category.html">Search Engines</a>> <a href="profile.html">BradT</a>
                        <span class="badge pull-right">4</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="topic">
        <div class="row">
            <div class="col-md-2">
                <img class=" avatar pull-left" src="img/gravatar.jpg"/>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.html">Is CSS3 not working in IE8 and IE9?</a></h3>
                    <div class="topic-info">
                        <a href="category.html">Design</a>>><a href="profile.html">BradT</a>
                        <span class="badge pull-right">4</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="topic">
        <div class="row">
            <div class="col-md-2">
                <img class=" avatar pull-left" src="img/gravatar.jpg"/>
            </div>
            <div class="col-md-10">
                <div class="topic-content pull-right">
                    <h3><a href="topic.html">Best Web Application Frameworks?</a></h3>
                    <div class="topic-info">
                        <a href="category.html">Development</a>> <a href="profile.html">BradT</a>
                        <span class="badge pull-right">4</span>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
<h3>Reply To Topic</h3>
<?php if(isLoggedIn()) : ?>
<form method="=post" action="topic.php?id=<?php echo $topic_id; ?>">
    <div class="form-group">
        <textarea id="reply" rows="10" cols="80" class="form-control" name="body"></textarea>
        <script>
            CREDITOR.replace('reply');
                </script>
    </div>
    <button name="do_reply" type="submit" class="btn btn-primary">Submit</button>
</form>
<?php else : ?>
    <p>Please login to reply</p>
<?php endif ; ?>
<?php include('includes/footer.php'); ?>
