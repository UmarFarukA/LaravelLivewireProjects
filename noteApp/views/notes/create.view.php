<?php

views("partials/head.php");
views("partials/navigation.php");
views("partials/banner.php", ["heading" => "Create Note"]);

?>

<main>

    <div class="form__container">
        <form method="post">
            <div class="form__title">
                <lable for="title">Title</lable>
                <input type="text" value="<?= $_POST['title'] ?? "" ?>" placeholder="Enter note title" name="title"
                    id="title" />
                <span class="input__error">
                    <?php if(isset($title_errors)) echo $title_errors["title"]; ?>
                </span>
            </div>

            <div class="form__summary">
                <lable for="summary">Summary</lable>
                <textarea id="summary" name="summary" rows="8" placeholder="Enter note summary">
                    <?= $_POST['summary'] ?? "" ?>
                </textarea>
                <span class="input__error">
                    <?php if(isset($summary_errors)) echo $summary_errors["summary"]; ?>
                </span>
            </div>

            <button type="submit" class="form__btn">Save</button>

        </form>
    </div>

</main>

<?php views("partials/footer.php") ?>