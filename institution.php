<div class="container">
    <!-- Breadcrumbs Section -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link" data-page="institution.php">Institution</a></li>
        </ol>
    </nav>

    <h2>Institution Management</h2>
    <p>Manage institution details, departments, and policies.</p>

    <div class="row mt-4">
        <!-- Institution Details Box -->
        <div class="col-md-6">
            <div class="card text-center p-4 shadow-sm option-box1" data-page="./institution-details.php">
                <i class="fas fa-university fa-3x mb-3" style="color: #2E368F;"></i>
                <h4>Institution details</h4>
            </div>
        </div>

        <!-- Departments Box -->
        <div class="col-md-6">
            <div class="card text-center p-4 shadow-sm option-box1" data-page="./departments.php">
                <i class="fas fa-university fa-3x mb-3" style="color: #2E368F;"></i>
                <h4>Departments</h4>
            </div>
        </div>

        <!-- Policies Box -->
        <div class="col-md-6">
            <div class="card text-center p-4 shadow-sm option-box1" data-page="./policies.php">
                <i class="fas fa-file-contract fa-3x mb-3" style="color: #2E368F;"></i>
                <h4>Policies</h4>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div id="institution-content" class="mt-4"></div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./script/option-box.js"></script>
