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
            <h1 class="text-muted">Insight Submissions</h1>
            <div class="d-flex justify-content-between align-items-center">
                <p>Manage submissions</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Submitted by</th>
                        <th scope="col">Email</th>
                        <th scope="col">Content</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($submissions as $index => $submission): ?>
                        <tr>
                            <th scope="row"><?= $index + 1 ?></th>
                            <td><?= $submission["name"] ?></td>
                            <td><?= $submission["email"] ?></td>
                            <td><?= substr($submission["content"], 0, 25) ?>...</td>
                            <td>
                                <?= explode(" ", $submission["created_at"])[0]; ?>
                            </td>
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
                                                data-bs-whatever="userViewModal"
                                                data-bs-target="#userViewModal-<?= $submission['id'] ?>">View
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
                                            <p class="fs-5">
                                                <?= $submission['content'] ?? '' ?>
                                            </p>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
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