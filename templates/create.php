<?php include('includes/header.php'); ?>
<form method="post" action="create.php">
    <div class="form-group">
        <label>Topic Title</label>
        <input name="title" type="text" class="form-control"  placeholder="Enter A Post Title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
            <?php foreach (getCategories() as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
        <script>CKEDITOR.replace('body'); </script>
    </div>
    <button name="do_create" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
<div class="col-md-4">
    <div id="sidebar">
        <div class="block">
            <h3>Login Form</h3>
            <form>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control"  placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control"  placeholder="Enter Password">
                </div>
                <button name="do_login" type="submit" class="btn btn-primary">Login</button><a class="btn btn-default"href="register.html">Create Account</a>
            </form>
<?php include('includes/footer.php'); ?>
