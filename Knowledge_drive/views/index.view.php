<?php

use Core\Session;

require("partials/head.php");
require("partials/navigation.php");
?>

<?php if (Session::has("errors")): ?>
    <script>
        // Automatically open the modal if errors are present
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('contributeModal'));
            myModal.show();
        });
    </script>

<?php endif; ?>

<?php require("partials/alert.php"); ?>

<main>
    <section class="row" id="hero">
        <div id="carouselExampleCaptions" class="d-none d-sm-block carousel slide col-md-12" data-bs-ride="carousel">
            <div class="d-none d-md-block carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item c-item active object-fit-cover position-relative">
                    <img src="./images/camp_1.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="caption">
                        <h5>Empowering Through Sharing: Welcome to
                            KASU Knowledge Drive Hub
                        </h5>
                        <p>
                            Daily insights, collaborative growth, and innovation at your fingertips.
                        </p>
                        <a class="caption-link" type="button" data-bs-toggle="modal" data-bs-target="#contributeModal"
                            data-bs-whatever="contributeModal">Contribute Now</a>
                    </div>
                </div>

                <div class="carousel-item c-item object-fit-cover">
                    <img src="./images/camp_2.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="caption">
                        <h5>Share Your Insight</h5>
                        <p>
                            &quot;Have an idea,
                            thought, or experience to share? Contribute and be
                            part of the collective growth.&quot;
                        </p>
                        <a class="caption-link" type="button" data-bs-toggle="modal" data-bs-target="#contributeModal"
                            data-bs-whatever="contributeModal">Submit Your
                            Write-Up</a>
                    </div>
                </div>
                <div class="carousel-item c-item object-fit-cover">
                    <img src="./images/camp_3.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="caption">
                        <h5>Today’s Insight</h5>
                        <p>
                            "Have an idea, thought, or experience to share? Contribute and be part of the collective
                            growth."
                        </p>
                        <a class="caption-link" type="button" data-bs-toggle="modal" data-bs-target="#contributeModal"
                            data-bs-whatever="contributeModal">Explore Today's Knowledge</a>
                    </div>
                </div>
                <div class="carousel-item c-item object-fit-cover">
                    <img src="./images/camp_3.jpg" class="d-block w-100 img-fluid" alt="...">
                    <div class="caption">
                        <h5>Ready to Join the Drive?</h5>
                        <p>
                            Feel free to contribute any insight,
                            or simply explore
                            knowledge repository.
                        </p>
                        <a class="caption-link" type="button" data-bs-toggle="modal" data-bs-target="#contributeModal"
                            data-bs-whatever="contributeModal">Submit Your
                            Insight</a>
                        <a class="caption-link" type="button" data-bs-toggle="modal" data-bs-target="#"
                            data-bs-whatever="contributeModal">Explore Knowledge</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="d-sm-none row g-0 justify-content-center">
            <div class="col-12">
                <img src="./images/kasu-3.jpg" alt="KASU" class="img-fluid object-fit-cover">

                <div class="position-absolute top-0 start-50 translate-middle-x mt-5 text-white p-2 text-center">
                    <h6 class="mt-5 fs-1 fw-sm-bolder fw-bold text-capitalize">Knowledge Drive Hub</h6>
                    <a href="/about" class="btn btn-sm btn-success text-white fw-4">Read More</a>
                    <a href="#" class="btn btn-sm btn-danger text-white fw-4">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us px-4 py-5">
        <div class="text-center">
            <h5 class="display-3 text-success ">
                About Us
            </h5>
            <p class="text-sm fw-4 text-muted">Who we are</p>
        </div>
        <div class="row justify-content-center g-0 mt-4 text-justify lh-base text-md-center py-4">
            <div class="col-md-8 text-center">
                <p class="fs-4 text-capitalize text-muted">
                    At Kaduna State University, we believe that knowledge is the key to progress. The KASU Knowledge
                    Drive
                    is designed to foster a culture of continuous learning, collaboration, and innovation among our
                    staff.
                </p>

                <a href="/about" class="btn btn-danger text-white fw-4 mt-3">Read More</a>
            </div>
        </div>

    </section>

    <section id="events" class="bg-white">
        <div class="text-center pt-5">
            <h5 class="display-3 text-success ">
                Events & Sessions
            </h5>
            <p class="text-sm fw-4 text-muted">knowledge drive sessions</p>
        </div>
        <div class="row justify-content-center pt-2 pt-md-5 pb-5">
            <div class="col-md-4">
                <div class="mt-2 mt-md-5">
                    <h4 class="fs-3 fw-bold text-danger text-center mb-3">
                        Upcoming Session
                    </h4>
                    <div class="d-flex flex-column py-3 align-items-md-center ms-3">
                        <div class="d-flex align-items-center mx-3 mb-3 text-success">
                            <div class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                            </div>

                            <div> 20th October 2024</div>
                        </div>
                        <div class="d-flex align-items-center mx-3 mb-3 text-success">
                            <div class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </div>

                            <div>Multipurpose Center</div>
                        </div>
                        <div class="d-flex align-items-center mx-3 mb-3 text-success">
                            <div class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-alarm" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
                                    <path
                                        d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
                                </svg>
                            </div>

                            <div>9.30am - 10.00am</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column">
                    <div class="mb-3  d-flex align-items-center flex-md-row flex-column">
                        <div class="w-75 w-md-50 me-3">
                            <img src="./images/event_1.jpg" alt="Event" class="img-fluid">
                        </div>
                        <div class="mb-2 mb-md-1 ms-4 ms-md-2">
                            <div class="text-muted fs-6 mx-auto mb-1 mt-2">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Aliquam
                                aliquid tempore cum! Sed, consequatur facere.
                            </div>
                            <a href="#" class="btn btn-sm btn-danger text-white">Read more</a>
                        </div>
                    </div>
                    <div class="mb-3  d-flex align-items-center flex-md-row flex-column">
                        <div class="w-75 w-md-50 me-3">
                            <img src="./images/event_2.jpg" alt="Event" class="img-fluid">
                        </div>
                        <div class="mb-2 mb-md-1 ms-4 ms-md-2">
                            <div class="text-muted fs-6 mx-auto mb-1 mt-2">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Aliquam
                                aliquid tempore cum! Sed, consequatur facere.
                            </div>
                            <a href="#" class="btn btn-sm btn-danger text-white">Read more</a>
                        </div>
                    </div>
                    <div class="mb-3  d-flex align-items-center flex-md-row flex-column">
                        <div class="w-75 w-md-50 me-3">
                            <img src="./images/event_3.jpg" alt="Event" class="img-fluid">
                        </div>
                        <div class="mb-2 mb-md-1 ms-4 ms-md-2">
                            <div class="text-muted fs-6 mx-auto mb-1 mt-2">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit.
                                Aliquam
                                aliquid tempore cum! Sed, consequatur facere.
                            </div>
                            <a href="#" class="btn btn-sm btn-danger text-white">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="bg-success px-4 py-5">
        <div class="text-center mb-5 pt-3">
            <h5 class="display-3 text-success text-white pt-3">
                Our Impact So Far
            </h5>
            <p class="text-sm text-white fw-4">Knowledge drive in action.</p>
        </div>

        <div class="row justify-content-center text-center text-md-start text-white">
            <div class="col-md-3 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                    class="bi bi-arrow-counterclockwise mb-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z" />
                    <path
                        d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466" />
                </svg>
                <p>Total contributions so far</p>
                <span class="fs-3 fw-bold">10</span>
            </div>
            <div class="col-md-3 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                    class="bi bi-calendar mb-2" viewBox="0 0 16 16">
                    <path
                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                </svg>
                <p>Number of weekly sessions held.</p>
                <span class="fs-3 fw-bold">23</span>
            </div>

            <div class="col-md-3 mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                    class="bi bi-percent mb-2" viewBox="0 0 16 16">
                    <path
                        d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
                <p>Percentage of departments engaged.</p>
                <span class="fs-3 fw-bold">64</span>
            </div>
        </div>
    </section>

    <section id="contribute" class="bg-white px-4 py-5">
        <div class="text-center pt-4">
            <h5 class="display-3 text-success ">
                Get Involved
            </h5>
            <p class="text-sm fw-4">Submitting your write-up is easy and impactful. Here’s how you can join.</p>
        </div>

        <div class="row justify-content-center py-4">
            <div class="col-md-5">
                <img src="./images/contribute.jpg" class="img-fluid rounded" alt="Knowledge">
            </div>
            <div class="col-md-4 pt-4">
                <h5 class="display-5 fw-bold text-success">
                    Steps
                </h5>

                <ul class="py-3">
                    <li class="mb-3">Write your one-minute insight (maximum of 150 words).</li>
                    <li class="mb-3">Submit through our portal or via email.</li>
                    <li class="mb-1">Get featured in the Daily Knowledge Drive.</li>
                </ul>
                <a href="#" class="btn btn-success text-white fw-4" data-bs-toggle="modal"
                    data-bs-target="#contributeModal" data-bs-whatever="contributeModal">Contribute Now</a>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-success px-4 py-5">
        <div class="text-center mb-2 pt-3">
            <h5 class="display-3 text-success text-white pt-3">
                Contact Us
            </h5>
            <p class="text-sm text-white fw-4">We are always available and open for new insight from you</p>
        </div>

        <div class="row justify-content-center text-white py-4">
            <div class="col-md-3 text-center text-md-start pb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-building mb-3" viewBox="0 0 16 16">
                    <path
                        d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                    <path
                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3z" />
                </svg>
                <p class="fs-3 fw-bold">Office.</p>
                <p>We are located at Main Campus, <br />Kaduna State University. Office of DVC</p>
            </div>
            <div class="col-md-3 text-center text-md-start pb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-envelope mb-3" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                </svg>
                <p class="fs-3 fw-bold">Email.</p>
                <p>Simply send an email to <br /> knowledgedrive@kasu.edu.ng</p>
            </div>

            <div class="col-md-3 text-center text-md-start pb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-telephone mb-3" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                </svg>
                <p class="fs-3 fw-bold">Phone.</p>
                <p>Prefer to speak to us? </br />Call: +234080300000000</p>

            </div>
        </div>
        <p class="text-white text-center">Alternatively click <a href="#" class="fw-4 text-white" data-bs-toggle="modal"
                data-bs-target="#contactModal" data-bs-whatever="contactModal">here</a> for further
            engagement or Insight
        </p>
    </section>



    <!-- Share Insight Modal -->
    <div class="modal fade" id="contributeModal" tabindex="-1" aria-labelledby="contributeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-success" id="contributeModalLabel">Share Your Insight</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="<?= Session::get('insightData')['name'] ?? '' ?>">
                            <?php if (Session::has("errors")): ?>

                                <p class="px-2 text-danger fs-6">
                                    <?= Session::get("errors")["name"] ?? "" ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="<?= Session::get('insightData')['email'] ?? '' ?>">
                            <?php if (Session::has("errors")): ?>

                                <p class="px-2 text-danger fs-6">
                                    <?= Session::get("errors")["email"] ?? "" ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone Number:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+234xxxxxxxxxx"
                                value="<?= Session::get('insightData')['phone'] ?? '' ?>">
                            <?php if (Session::has("errors")): ?>

                                <p class="px-2 text-danger fs-6">
                                    <?= Session::get("errors")["phone"] ?? "" ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Content:
                                <span class="fs-6 fw-semibold text-success text-bold">(Maximum of 150 words)</span>
                            </label>
                            <textarea class="form-control" id="message-text" name="content" rows="6">
                            <?= Session::get('insightData')['content'] ?? '' ?>
                            </textarea>
                            <?php if (Session::has("errors")): ?>

                                <p class="px-2 text-danger fs-6">
                                    <?= Session::get("errors")["content"] ?? "" ?>
                                </p>
                            <?php endif; ?>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Send message</button>
                </div>
                </form>
                <?php Session::unflash("errors"); ?>
            </div>
        </div>
    </div>

</main>

<?php require("partials/footer.php"); ?>