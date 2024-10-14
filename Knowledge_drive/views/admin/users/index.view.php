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
<?php loadPartials("header") ?>

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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $user["name"] ?></td>
                            <td><?= $user["email"] ?></td>
                            <td class="d-flex align-items-center">
                                <div class="me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                    </svg>
                                </div>
                                <div class="me-1 text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </main>
    </div>
</div>


<?php loadPartials("footer") ?>