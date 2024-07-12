<?php


views("partials/head.php");
views("partials/navigation.php");
views("partials/banner.php", ["heading" => $note["title"]]);


?>

<main>
    <p>
        <a href="/notes" class="go_back">Go back</a>
    </p>

    <div class="note__summary">
        <?= $note["summary"] ?>
    </div>

    <form method="post">
        <input type="hidden" name="id" value="<?= $note["id"] ?>">
        <input type="hidden" name="_method" value="delete">
        <div class="post_btn">
            <a href="/note/edit?id=<?= $note["id"] ?>" class="btn_edit">Edit</a>
            <button type="submit" class="btn_delete">Delete</button>
        </div>
    </form>
</main>

<?php views("partials/footer.php"); ?>