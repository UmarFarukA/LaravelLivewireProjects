<?php

views("partials/head.php");
?>


<main>
    <div class="register__container">
        <form method="post">
            <div class="form__email">
                <lable for="username">Title</lable>
                <input type="email" value="<?= $_POST['username'] ?? '' ?>" placeholder="example@mail.com"
                    name="username" id="username" />
                <span class="input__error">
                    <?= $errors["username"] ?? "" ?>
                </span>
            </div>

            <div class="form__password">
                <lable for="password">Password</lable>
                <input type="password" value="" placeholder="***********" name="password" id="password" />
                <span class="input__error">
                    <?= $errors["password"] ?? "" ?>
                </span>
            </div>

            <button type="submit" class="form__btn">Sign Up</button>

        </form>
    </div>
</main>

<?php views("partials/footer.php") ?>