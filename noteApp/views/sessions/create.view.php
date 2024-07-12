<?php

views("partials/head.php");
?>


<main>
    <div class="register__container">

        <form method="post">
            <div class="form__header">
                <h2>
                    <a href="/">NoteApp</a>
                </h2>
            </div>
            <div class="form__email">
                <lable for="email">Username</lable>
                <input type="email" value="<?= old('email') ?>" placeholder="example@mail.com" name="email"
                    id="email" />
                <span class="input__error">
                    <?= $errors["email"] ?? "" ?>
                </span>
            </div>

            <div class="form__password">
                <lable for="password">Password</lable>
                <input type="password" value="" placeholder="***********" name="password" id="password" />
                <span class="input__error">
                    <?= $errors["password"] ?? "" ?>
                </span>
            </div>

            <button type="submit" class="form__btn">Login</button>

        </form>
    </div>
</main>

<!-- <?php views("partials/footer.php") ?> -->