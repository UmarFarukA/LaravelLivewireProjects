<?php loadPartials("head") ?>

<!-- Sidebar -->

<?php loadPartials("sidebar") ?>


<!-- Navbar -->
<?php loadPartials("header") ?>

<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <main>
            <h1>Welcome to the Admin Dashboard</h1>
            <p>This is your main content area. You can add various dashboard widgets or reports here.</p>

            <!-- Example Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            Users
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Total Users: 150</h5>
                            <p class="card-text">Manage all your users in one place.</p>
                            <a href="#" class="btn btn-primary">View Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            Reports
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Weekly Reports</h5>
                            <p class="card-text">Track your website performance.</p>
                            <a href="#" class="btn btn-primary">View Reports</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            Settings
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Customize Settings</h5>
                            <p class="card-text">Manage your account and website settings.</p>
                            <a href="#" class="btn btn-primary">Go to Settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php loadPartials("footer") ?>