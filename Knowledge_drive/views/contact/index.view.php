<?php

use Core\Session;

partials("head");
partials("navigation");

?>

<main class="pt-5 bg-white">
    <?php loadPartials("notification") ?>
    <div class="row justify-content-center g-0 pb-5">
        <div class="text-center">
            <h5 class="display-3 text-success fw-bold">
                Contact Us
            </h5>
            <p class="text-sm fw-4 text-muted">We are available onsite or online for your inquiry</p>
        </div>
        <div class="row justify-content-center mt-4 text-justify lh-base py-md-4">
            <div class="col-md-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27437.284770477203!2d7.443387226527048!3d10.51489493799291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104d4abb7430643f%3A0x4de569120f185ae6!2sKaduna%20State%20University%2C%20(Main%20Campus)!5e0!3m2!1sen!2sng!4v1728992412859!5m2!1sen!2sng"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="w-100 rounded">
                </iframe>
            </div>

            <div class="col-md-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" name="cname" class="form-control" id="name"
                            value="<?= Session::get('contactForm')['cname'] ?? '' ?>">
                        <?php if (Session::has("errors")): ?>
                            <p class="text-danger text-sm fs-6">
                                <?= Session::get("errors")["cname"]; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" name="cemail" class="form-control" id="email"
                            value="<?= Session::get('contactForm')['cemail'] ?? '' ?>">
                        <?php if (Session::has("errors")): ?>
                            <p class="text-danger text-sm fs-6">
                                <?= Session::get("errors")["cemail"]; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea name="cmessage" class="form-control" id="message-text" rows="6">
                            <?= Session::get('insightData')['email'] ?? '' ?>
                            </textarea>
                        <?php if (Session::has("errors")): ?>
                            <p class="text-danger text-sm fs-6">
                                <?= Session::get("errors")["cmessage"]; ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </form>

                <?php Session::unflash("errors") ?>
            </div>
        </div>
    </div>

    <div class="row justify-content-center text-success py-4">
        <div class="text-center mb-5">
            <h5 class="display-6 fw-bold">For Further Inquiry</h5>
        </div>
        <div class="col-md-3 text-center text-md-start pb-4 mb-5">
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
</main>


<?php partials("footer"); ?>