<?php

views("partials/head.php");
views("partials/navigation.php");
views("partials/banner.php", ["heading" => "My Notes"]);

?>

<main>
    <ul class="notes">
        <?php foreach($notes as $note): ?>
        <li class="note">
            <a href="/note?id=<?= $note["id"] ?>" class="note__item">
                <?= $note["title"] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

    <a href="/notes/create" class="note_create">Create Note</a>
</main>

<?php views("partials/footer.php"); ?>