<?php

use Core\Session;

loadPartials("head") ?>

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
            <h1 class="text-muted">Knowledge Drive Submissions</h1>
            <div class="d-flex justify-content-start space-x-3  mt-4">

                <div class="mb-3 me-2">
                    <select name="show" id="showRecords" class="form-select" aria-label="Default select example">
                        <option value="10">5</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                        <option value="35">35</option>
                    </select>
                </div>

                <div class="">
                    <form action="/submissions" class="d-flex" method="post">
                        <input type="text" name="search" id="search" class="form-control me-2"
                            aria-describedby="passwordHelpInline" placeholder="search submissions">
                        <button class="btn btn-success px-3" id="btn-search">Search</button>
                    </form>
                </div>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Submitted by</th>
                        <th scope="col">Email</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($submissions as $index => $submission): ?>
                        <tr id="results">
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $submission["name"] ?></td>
                            <td><?= $submission["email"] ?></td>
                            <td><?= substr($submission["content"], 0, 25) ?>...</td>
                            <td>
                                <?= explode(" ", $submission["created_at"])[0]; ?>
                            </td>
                            <td>
                                <?php if ($submission["status"] == "0"): ?>
                                    <span class="px-3 py-1 bg-primary text-white rounded">Under Review</span>
                                <?php elseif ($submission["status"] == "1") : ?>
                                    <span class="px-3 py-1 bg-success text-white rounded">Published</span>
                                <?php elseif ($submission["status"] == "2") : ?>
                                    <span class="px-3 py-1 bg-secondary text-white rounded">Draft</span>
                                <?php endif; ?>
                            </td>
                            <td class="">
                                <div class="btn-group dropstart d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-three-dots-vertical dropdown-toggle " data-bs-toggle="dropdown"
                                        aria-expanded="false" viewBox="0 0 16 16" role="button">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                    </svg>
                                    <ul class="dropdown-menu">
                                        <li>

                                            <a class="dropdown-item" href="#" id="editIcon" data-bs-toggle="modal"
                                                data-bs-whatever="userViewModal"
                                                data-bs-target="#userViewModal-<?= $submission['id'] ?>">Review
                                            </a>

                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <!-- View Modal -->
                            <div class="modal fade" id="userViewModal-<?= $submission['id'] ?>" tabindex="-1"
                                aria-labelledby="userViewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 text-success" id="userViewModalLabel">
                                                Submitted by - <?= $submission['name'] ?? '' ?>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" form="review-form">
                                                <input type="hidden" name="_method" value="PATCH">
                                                <input type="hidden" name="id" value="<?= $submission["id"] ?>">
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="content" class="col-form-label">Content:</label>
                                                        <textarea name="content" class="form-control" id="content"
                                                            rows="10">
                                                        <?= $submission["content"] ?>
                                                    </textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="col-form-label">Status:</label>
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="0">review</option>
                                                            <option value="1">published</option>
                                                            <option value="2">Draft</option>
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
                            </div>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </main>
    </div>
</div>


<?php loadPartials("footer") ?>