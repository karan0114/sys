<?php
include "../backend/config.php"; // Database connection file

    try {
        $stmt = $conn->prepare("SELECT id, name FROM institution_types");
        $stmt->execute();
        $institutions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
?>
<div class="container">
    <!-- Breadcrumbs Section -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" id="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link" data-page="institution.php">Institution</a></li>
            <li class="breadcrumb-item">Institution Management</li>
        </ol>
    </nav>

    <h3>Institution Management</h3>
    <p>Select the institution type for approval.</p>

    <!-- Form Container -->
    <form id="institution-form">
        <div class="row g-3 align-items-center">
            <div class="col-md-4">
                <label for="institution-type" class="form-label">Institution Type</label>
                <select class="form-select" id="institution-type" name="institution-type">
                    <option value="">Select Institution Type</option>
                </select>
            </div>

            <div class="col-md-4" id="academic-year-container" style="display:none;">
                <label for="academic-year" class="form-label">Academic Year</label>
                <select class="form-select" id="academic-year" name="academic-year">
                    <option value="">Select Academic Year</option>
                </select>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-3 d-flex align-items-center">
            <button type="button" class="btn btn-primary me-2" id="fetch-documents">
                <i class="fas fa-search"></i> Submit
            </button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i> Add
            </button>
        </div>
    </form>

    <!-- Table for Showing Documents -->
    <div class="mt-4">
        <h4>Document List</h4>
        <table class="table table-bordered table-striped" id="documents-table">
            <thead class="table-dark">
                <tr>
                    <th>File Name</th>
                    <th>Last Modified</th>
                    <th>File View</th>
                    <th>Office Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="text-center">No records found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- 🔹 Modal for Adding Documents -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="addDocumentForm" enctype="multipart/form-data" method="post">

                    <!-- Institution Type -->
                    <div class="mb-3">
                        <label class="form-label">Institution Type</label>
                        <select class="form-select" id="modal-institution-type" name="institution-type">
                            <option value="">Select Institution</option>
                        </select>
                    </div>

                    <!-- Academic Year -->
                    <div class="mb-3">
                        <label class="form-label">Academic Year</label>
                        <select class="form-select" id="modal-academic-year" name="academic-year">
                            <option value="">Select Academic Year</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">File Name</label>
                        <input type="text" class="form-control" id="file-name" name="file-name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">File Location</label>
                        <input type="text" class="form-control" id="file-location" name="file-location" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload File</label>
                        <input type="file" class="form-control" id="file-upload" name="file-upload" required>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript (AJAX for Dynamic Dropdowns) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

