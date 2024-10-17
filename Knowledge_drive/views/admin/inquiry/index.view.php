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
            <h1 class="text-muted">Users</h1>
            <div class="d-flex justify-content-between align-items-center">
                <p>Manage (create, activate/disable, update, and delete) users of your application</p>

                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal"
                    data-bs-whatever="createUserModal">Create</button>
                <!-- Create Modela -->

                <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-success" id="createUserModalLabel">Create New User
                                </h1>
                                <p type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></p>
                            </div>
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Name:</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="<?= Session::get('createData')['name'] ?? '' ?>">
                                        <?php if (Session::has("errors")): ?>

                                            <p class="px-2 text-danger fs-6">
                                                <?= Session::get("errors")["name"] ?? "" ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email:</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="<?= Session::get('createData')['email'] ?? '' ?>">
                                        <?php if (Session::has("errors")): ?>

                                            <p class="px-2 text-danger fs-6">
                                                <?= Session::get("errors")["email"] ?? "" ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="col-form-label">Role:</label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="contributor">Contributor</option>
                                            <option value="viewer">Viewer</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="col-form-label">Status:</label>
                                        <select name="status" id="role" class="form-control">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $user["name"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td><?= $user["role"] ?></td>
                            <td class="d-flex align-items-center">
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
                                                data-bs-whatever="userEditModal"
                                                data-bs-target="#userEditModal-<?= $user['id'] ?>">Edit
                                            </a>

                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" id="deleteIcon" data-bs-toggle="modal"
                                                data-bs-whatever="deleteModal"
                                                data-bs-target="#deleteModal-<?= $user['id'] ?>">Delete
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">View</a></li>
                                    </ul>
                                </div>
                            </td>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="userEditModal-<?= $user['id'] ?>" tabindex="-1"
                                aria-labelledby="userEditModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-success" id="userEditModalLabel">
                                                Edit User
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <form method="post" id="editForm">
                                            <input type="hidden" name="_method" value="PATCH">
                                            <input type="hidden" name="editId" value="<?= $user["id"] ?>">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">Name:</label>
                                                    <input type="text" name="editName" class="form-control" id="name"
                                                        value="<?= $user['name'] ?? '' ?>">
                                                    <?php if (Session::has("errors")): ?>

                                                        <p class="px-2 text-danger fs-6">
                                                            <?= Session::get("errors")["editName"] ?? "" ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="col-form-label">Email:</label>
                                                    <input type="text" name="editEmail" class="form-control" id="email"
                                                        value="<?= $user['email'] ?? '' ?>">
                                                    <?php if (Session::has("errors")): ?>

                                                        <p class="px-2 text-danger fs-6">
                                                            <?= Session::get("errors")["editEmail"] ?? "" ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="role" class="col-form-label">Role:</label>
                                                    <select name="editRole" id="role" class="form-control">
                                                        <option value="admin">Admin</option>
                                                        <option value="contributor">Contributor</option>
                                                        <option value="viewer">Viewer</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="status" class="col-form-label">Status:</label>
                                                    <select name="editStatus" id="status" class="form-control">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
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
                            <div class="modal fade" id="deleteModal-<?= $user['id'] ?>" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="post" id="deleteForm">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="deleteId" value="<?= $user["id"] ?>">
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