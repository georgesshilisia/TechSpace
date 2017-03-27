<?php include('includes/header.php'); ?>
<form>
    <div class="form-group">
        <label>Topic Title</label>
        <input name="title" type="text" class="form-control"  placeholder="Enter A Post Title">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control">
            <option>Design</option>
            <option>Development</option>
            <option>Business & Marketing</option>
            <option>Search Engines</option>
            <option>Cloud & HostingS</option>
        </select>
    </div>
    <div class="form-group">
        <label>Topic Body</label>
        <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
    </div>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
