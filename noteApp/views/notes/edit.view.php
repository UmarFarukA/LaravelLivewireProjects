<?php

views("partials/head.php");
views("partials/navigation.php");
views("partials/banner.php", ["heading" => "Edit Note"]);

?>

<main>

    <div class="form__container">
        <form method="post">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note["id"] ?>">
            <div class="form__title">
                <lable for="title">Title</lable>
                <input type="text" value="<?= $note['title'] ?? "" ?>" placeholder="Enter note title" name="title"
                    id="title" />
                <span class="input__error">
                    <?php if(isset($title_errors)) echo $title_errors["title"]; ?>
                </span>
            </div>

            <div class="form__summary">
                <lable for="summary">Summary</lable>
                <textarea id="summary" name="summary" rows="8" placeholder="Enter note summary">
                    <?= $note['summary'] ?? "" ?>
                </textarea>
                <span class="input__error">
                    <?php if(isset($summary_errors)) echo $summary_errors["summary"]; ?>
                </span>
            </div>

            <div class="update_btn">
                <a href="/notes" class="cancel__btn">Cancel</a>
                <button type="submit" class="form__btn">Update</button>
            </div>

        </form>
    </div>

</main>

<?php views("partials/footer.php") ?>