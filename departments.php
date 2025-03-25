
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institution Departments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<div class="container mt-4">
    <h3>Departments</h3>
    <p>Manage institution departments.</p>

    <!-- Add Department Form -->
    <form id="addDepartmentForm">
        <div class="mb-3">
            <label for="department-name" class="form-label">Department Name</label>
            <input type="text" class="form-control" id="department-name" name="department_name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Department</button>
    </form>

    <hr>

    <!-- Department List -->
    <h4>Department List</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
            </tr>
        </thead>
        <tbody id="department-list">
            <tr>
                <td colspan="2" class="text-center">Loading...</td>
            </tr>
        </tbody>
    </table>
</div>
