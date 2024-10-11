<?php

use Core\Session;

views("partials/head.php");
?>

<main>
    <form method="post">
        <div class="container-sm">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <div class="mt-5 px-4 py-5 bg-white rounded">
                        <div class="mb-4 text-center">
                            <img src="./images/kasu_logo.jpeg" alt="KASU Logo" class="w-50 mt-1" />
                            <p class="text-success font-semibold pt-1">Knowledge Drive Hub</p>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-success">Username</label>
                            <input type="email" name="email" id="email" placeholder="example@kasu.edu.ng"
                                class="form-control" value="<?= old('email') ?>" />
                            <?php if (Session::has("errors")): ?>
                            <p class="text-danger fs-5 mt-1">
                                <?= Session::get("errors")["email"] ?>
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-success">Password</label>
                            <input type="password" name="password" id="password" placeholder="*********"
                                class="form-control" />
                            <?php if (Session::has("errors")): ?>
                            <p class="text-danger fs-5 mt-1">
                                <?= Session::get("errors")["password"] ?>
                            </p>
                            <?php endif; ?>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-3">Login</button>

                        <div class="mt-3 text-center">
                            <p>Forgotten your password? Click <a href="#" class="text-danger">here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php Session::flush() ?>
    </form>
</main>