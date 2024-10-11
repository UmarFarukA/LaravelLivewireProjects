<?php

use Core\Session;

loadPartials("head") ?>


<!-- Sidebar -->

<?php loadPartials("sidebar") ?>
<?php if (Session::has("errors")): ?>
<script>
// Automatically open the modal if errors are present
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('sessionModal'));
    myModal.show();

    var actionItem = document.getElementById("action");
    var id = actionItem.dataset.sessId;
    console.log(id);
});
</script>
<?php endif; ?>

<!-- Navbar -->
<?php loadPartials("header") ?>

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <main>
            <h1 class="text-muted">Knowledge Drive Sessions</h1>
            <div class="d-flex justify-content-between align-items-center">
                <p>Manage Knowledge sessions: Upcoming and concluded sessions</p>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sessionModal"
                    data-bs-whatever="sessionModal">Create</button>
                <!-- Create Modela -->

                <div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="sessionModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-success" id="sessionModalLabel">Create New Session
                                </h1>
                                <p type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></p>
                            </div>
                            <form action="/sessions" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="title" class="col-form-label">Title:</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            value="<?= Session::get('formData')['title'] ?? '' ?>">
                                        <?php if (Session::has("errors")): ?>

                                        <p class="px-2 text-danger fs-6">
                                            <?= Session::get("errors")["title"] ?? "" ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="venue" class="col-form-label">Venue:</label>
                                        <input type="text" name="venue" class="form-control" id="venue"
                                            value="<?= Session::get('formData')['venue'] ?? '' ?>">
                                        <?php if (Session::has("errors")): ?>

                                        <p class="px-2 text-danger fs-6">
                                            <?= Session::get("errors")["venue"] ?? "" ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="col-form-label">Date:</label>
                                        <input type="date" name="date" class="form-control" id="date"
                                            value="<?= Session::get('formData')['date'] ?? '' ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="col-form-label">Status:</label>
                                        <select name="status" id="role" class="form-control">
                                            <option value="0">Completed</option>
                                            <option value="1">Upcoming</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </form>
                            <?php Session::unflash("errors"); ?>
                        </div>
                    </div>
                </div>

            </div>
            <?php if ($events): ?>

            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $index => $event): ?>
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td><?= $event["title"] ?></td>
                        <td><?= $event["venue"] ?></td>
                        <td><?= $event["date"] ?></td>
                        <td>
                            <?php if ($event["status"] == 0): ?>
                            <span class="px-3 py-1 bg-success text-white rounded">Done</span>
                            <?php else: ?>
                            <span class="px-1 py-1 bg-primary text-white rounded">Upcoming</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="btn-group dropstart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-three-dots-vertical dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false" viewBox="0 0 16 16" role="button">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                </svg>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#" id="editIcon" data-bs-toggle="modal"
                                            data-bs-whatever="editModal"
                                            data-bs-target="#editModal-<?= $event['id'] ?>">Edit
                                        </a>

                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" id="deleteIcon" data-bs-toggle="modal"
                                            data-bs-whatever="deleteModal"
                                            data-bs-target="#deleteModal-<?= $event['id'] ?>">Delete</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">View</a></li>
                                </ul>
                            </div>
                        </td>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal-<?= $event['id'] ?>" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-success" id="editModalLabel">
                                            Edit Session
                                        </h1>
                                        <p type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </p>
                                    </div>
                                    <form method="post" id="editForm">
                                        <input type="hidden" name="_method" value="PATCH">
                                        <input type="hidden" name="id" value="<?= $event["id"] ?>">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="title" class="col-form-label">Title:</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    value="<?= $event['title'] ?? '' ?>">
                                                <?php if (Session::has("errors")): ?>

                                                <p class="px-2 text-danger fs-6">
                                                    <?= Session::get("errors")["title"] ?? "" ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-3">
                                                <label for="venue" class="col-form-label">Venue:</label>
                                                <input type="text" name="venue" class="form-control" id="venue"
                                                    value="<?= $event['venue'] ?? '' ?>">
                                                <?php if (Session::has("errors")): ?>

                                                <p class="px-2 text-danger fs-6">
                                                    <?= Session::get("errors")["venue"] ?? "" ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date" class="col-form-label">Date:</label>
                                                <input type="date" name="date" class="form-control" id="date"
                                                    value="<?= $event['date'] ?? '' ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="col-form-label">Status:</label>
                                                <select name="status" id="role" class="form-control">
                                                    <option value="0">Completed</option>
                                                    <option value="1">Upcoming</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="resolution" class="col-form-label">Resolution:</label>
                                                <textarea name="resolution" class="form-control"
                                                    id="resolution"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                    <?php Session::unflash("errors"); ?>
                                </div>
                            </div>
                        </div>

                        <!-- delete Modal -->
                        <div class="modal fade" id="deleteModal-<?= $event['id'] ?>" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form method="post" id="deleteForm">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="deleteId" value="<?= $event["id"] ?>">
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
            <?php else: ?>
            <p class="fs-4 text-muted">No Session has either been created or conducted</p>
            <?php endif; ?>
        </main>

    </div>
</div>


<?php loadPartials("footer") ?>