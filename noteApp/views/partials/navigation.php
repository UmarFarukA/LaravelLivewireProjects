<nav>
    <div class="left_nav">
        <span>
            <h4>Note App</h4>
        </span>
        <ul>
            <?php if(!$_SESSION["user"]): ?>
            <li>
                <a href="/" class="<?= urls() === "/" ? "active" : "" ?>">Home</a>
            </li>

            <li>
                <a href="/services" class="<?= urls() === "/services" ? "active" : "" ?>">Services</a>
            </li>
            <li>
                <a href="/about" class="<?= urls() === "/about" ? "active" : "" ?>">About</a>
            </li>
            <li>
                <a href="/contact" class="<?= urls() === "/contact" ? "active" : "" ?>">Contact</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="right__nav">
        <ul>
            <?php if($_SESSION["user"] ?? false): ?>
            <li>
                <a href="/notes" class="<?= urls() === "/notes" ? "active" : "" ?>">Notes</a>
            </li>
            <li>
                <form method="POST" action="/logout">
                    <input type="hidden" name="_method" value="DELETE" />
                    <button class="btn-logout">Log Out</button>
                </form>
            </li>
            <?php else: ?>
            <li>
                <a href="/register" class="<?= urls() === "/register" ? "active" : "" ?>">Register</a>
            </li>
            <li>
                <a href="/login" class="<?= urls() === "/login" ? "active" : "" ?>">Login</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>