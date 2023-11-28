<main class="main-dashboard">


    <div class="dashboard-sidebar">
        <div class="dashboard-links">
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                        </li>
                    </ul>
                </div>
            </nav> -->

            <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <a href="dashboard" class="btn btn-custom btn-lg my-3">Dashboard</a>
            <a href="patients" class="btn btn-custom btn-lg my-3">Manage Patients</a>
            <a href="#" class="btn btn-custom btn-lg my-3">Manage Patients</a>
            <a href="#" class="btn btn-custom btn-lg my-3">Anomalies</a>
            <a href="#" class="btn btn-custom btn-lg my-3" id="Help" >Help?</a> -->
        </div>
    </div>
    <section class="dashboard-content">
        <h1>NHS Patient Record Dashboard</h1>

        <!-- Section for Synchronization Status -->
        <div class="dashboard-section">
            <h2>Data Synchronization Status</h2>
            <p>Last sync: <span id="lastSyncTime">[time]</span></p>
            <button onclick="initiateSync()">Sync Now</button>
        </div>


        <div class="dashboard-section">
            <h2>Recent Activity</h2>
            <p>Overview of recent system usage, updates, and alerts.</p>

        </div>

        <!-- Section for Real-Time Alerts -->
        <div class="dashboard-section">
            <h2>Real-Time Alerts</h2>
            <div id="realTimeAlerts">

            </div>
        </div>

    </section>
</main>