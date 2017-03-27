<?php include('includes/header.php'); ?>

<form enctype="multipart/form-data" method="post" action="register.html">
    <div class="form-group">
        <label>Name*</label> <input name="name" type="text" class="form-control"  placeholder="Enter Your Name">
    </div>

    <div class="form-group">
        <label>Email Address*</label> <input name="email" type="email" class="form-control"  placeholder="Enter Your Email Address">
    </div>

    <div class="form-group">
        <label>Choose Username*</label> <input name="username" type="text" class="form-control"  placeholder="Create A Username">
    </div>

    <div class="form-group">
        <label>Password*</label> <input name="password" type="password" class="form-control"  placeholder="Enter A Password">
    </div>

    <div class="form-group">
        <label>Confirm Password*</label> <input name="password2" type="password" class="form-control"  placeholder="Enter Password Again">
    </div>

    <div class="form-group">
        <label>Upload Avatar</label> <input name="avatar" type="file">
        <p class="help-block"></p>
    </div>

    <div class="form-group">
        <label>About Me</label>
        <textarea id="about" rows="6" cols="80" class="form-control"
                  name="about" placeholder="Tell us about yourself(Optional)"></textarea>
    </div>

    <input name="register" type="submit" class="btn btn-primary" value="Register"/>
</form>

<?php include('includes/footer.php'); ?>
