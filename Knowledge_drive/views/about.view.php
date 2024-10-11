<?php

require("partials/head.php");
require("partials/navigation.php");

?>

<main class="pt-5 bg-white">
    <div class="row justify-content-center g-0 pb-5">
        <div class="text-center">
            <h5 class="display-3 text-success fw-bold">
                About Us
            </h5>
            <p class="text-sm fw-4 text-muted">Who we are</p>
        </div>
        <div class="row justify-content-center g-0 mt-4 text-justify lh-base text-md-center py-md-4">
            <div class="col-md-8">
                <p class="px-3 fs-4 text-capitalize text-muted">
                    At Kaduna State University, we believe that knowledge is the key to progress. The KASU Knowledge
                    Drive
                    is designed to foster a culture of continuous learning, collaboration, and innovation among our
                    staff.
                </p>
            </div>
        </div>

        <div class="row justify-content-center pt-5 pb-md-4">
            <div class="col-md-5">
                <img src="./images/objectives.jpg" class="img-fluid rounded" alt="Knowledge">
            </div>
            <div class="col-md-4 pt-4">
                <h5 class="display-5 fw-bold text-success">
                    Our Objectives
                </h5>

                <ul class="py-3">
                    <li class="mb-3">Foster a culture of innovation and continuous learning.</li>
                    <li class="mb-3">Empower staff to share their ideas and solutions.</li>
                    <li class="mb-3">Drive both personal and institutional growth</li>
                    <li class="mb-1">Facilitate knowledge sharing across departments.</li>
                </ul>

            </div>
        </div>

        <div class="row justify-content-center g-0 mt-md-5 text-success">
            <div class="d-flex justify-content-center align-items-center flex-column fw-bold">
                <hr class="w-50 h-3 text-danger">
                <span class="fs-2 fw-bold pb-3">Meet the Team</span>
            </div>

            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-3 text-center">
                        <img src="./images/girl.jpeg" alt="Team Member" class="img-fluid">
                        <p class="text-muted text-center text-md-start fs-5 pt-3">Team Member 1</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="./images/man.jpeg" alt="Team Member" class="img-fluid">
                        <p class="text-muted text-md-start fs-5 pt-3">Team Member 2</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="./images/man.jpeg" alt="Team Member" class="img-fluid">
                        <p class="text-muted  text-md-start fs-5 pt-3">Team Member 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require("partials/footer.php"); ?>