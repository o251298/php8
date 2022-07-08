<?php require_once '../views/layouts/header.php'; ?>
    <div class="container">
        <h3>
            login
        </h3>
        <form action="/login/store" method="post">
            <label for="login"></label>
            <input type="text" name="login" id="login">
            <label for="password"></label>
            <input type="password" name="password" id="password">
            <input type="submit" name="button" id="button" value="Submit">
        </form>
    </div>
<?php require_once '../views/layouts/footer.php'; ?>