<?php

use Core\Session;

loadPartials("head") ?>

<?php if (Session::has("errors")): ?>
<script>
// Automatically open the modal if errors are present
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('createUserModal'));
    myModal.show();
});
</script>
<?php endif; ?>

<!-- Sidebar -->

<?php loadPartials("sidebar") ?>


<!-- Navbar -->
<?php loadPartials("header", ["user" => $user]) ?>

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <main>
            <!-- notification -->
            <?php loadPartials("notification") ?>
            <h1 class="text-muted">Inquiry</h1>
            <div class="d-flex justify-content-between align-items-center">
                <p>Manage users inquiry of your application</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">content</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inquiries as $index => $inquiry): ?>
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td><?= $inquiry["name"] ?></td>
                        <td><?= substr($inquiry["content"], 0, 15) ?>...</td>
                        <td><?= $inquiry["submitted_on"] ?></td>
                        <td>
                            <div class="btn-group dropstart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-three-dots-vertical dropdown-toggle " data-bs-toggle="dropdown"
                                    aria-expanded="false" viewBox="0 0 16 16" role="button">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                </svg>
                                <ul class="dropdown-menu">
                                    <li>

                                        <a class="dropdown-item" href="#" id="editIcon" data-bs-toggle="modal"
                                            data-bs-whatever="viewModal"
                                            data-bs-target="#viewModal-<?= $inquiry['id'] ?>">View
                                        </a>

                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" id="deleteIcon" data-bs-toggle="modal"
                                            data-bs-whatever="deleteModal"
                                            data-bs-target="#deleteModal-<?= $inquiry['id'] ?>">Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <!-- View Modal -->
                        <div class="modal fade" id="viewModal-<?= $inquiry['id'] ?>" tabindex="-1"
                            aria-labelledby="viewModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-success" id="viewModalLabel">
                                            Inquired by - <?= $inquiry['name'] ?? '' ?>
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="fs-5">
                                            <?= $inquiry['content'] ?? '' ?>
                                        </p>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- delete Modal -->
                        <div class="modal fade" id="deleteModal-<?= $inquiry['id'] ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" id="deleteForm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="deleteId" value="<?= $inquiry["id"] ?>">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">No</button>
                                            <button type="submit" class="btn btn-danger">Yes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </main>
    </div>
</div>


<?php loadPartials("footer") ?>