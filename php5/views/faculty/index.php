<?php require_once(APP_ROOT . '/views/includes/header.php'); ?>
<?php require_once(APP_ROOT . '/views/includes/navbar.php'); ?>

<?php
    $alert = get_flash_message('faculty_alert');
    $isEdit = !empty($facultyData) || !empty($formData['id']);
    $currentData = !empty($formData) ? $formData : [];

    if (empty($currentData) && !empty($facultyData)) {
        $currentData = [
            'id' => $facultyData->faculty_id,
            'fname' => $facultyData->faculty_fname,
            'mname' => $facultyData->faculty_mname,
            'lname' => $facultyData->faculty_lname,
            'age' => $facultyData->faculty_age,
            'gender' => $facultyData->faculty_gender,
            'address' => $facultyData->faculty_address,
            'position' => $facultyData->faculty_position,
            'salary' => $facultyData->faculty_salary
        ];
    }
?>

<div class="container py-4">
    <div class="p-4 p-md-5 mb-4 rounded-4 text-bg-dark bg-gradient">
        <div class="col-lg-8">
            <h1 class="display-6 fw-bold">Faculty CRUD Management</h1>
            <p class="mb-0">This output follows the MVC pattern and supports create, read, update, and delete operations for faculty records.</p>
        </div>
    </div>

    <?php if ($alert) { ?>
        <div class="alert alert-<?php echo $alert['type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $alert['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php } ?>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4 py-3">
                    <h2 class="h5 mb-0"><?php echo $isEdit ? 'Edit Faculty Record' : 'Add Faculty Record'; ?></h2>
                </div>
                <div class="card-body p-4">
                    <form action="./index.php?action=<?php echo $isEdit ? 'update' : 'store'; ?>" method="POST">
                        <?php if ($isEdit) { ?>
                            <input type="hidden" name="id" value="<?php echo isset($currentData['id']) ? $currentData['id'] : ''; ?>">
                        <?php } ?>

                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" value="<?php echo isset($currentData['fname']) ? $currentData['fname'] : ''; ?>" required>
                            <?php if (isset($errors['fname'])) { ?><div class="text-danger small mt-1"><?php echo $errors['fname']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" value="<?php echo isset($currentData['mname']) ? $currentData['mname'] : ''; ?>" required>
                            <?php if (isset($errors['mname'])) { ?><div class="text-danger small mt-1"><?php echo $errors['mname']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" value="<?php echo isset($currentData['lname']) ? $currentData['lname'] : ''; ?>" required>
                            <?php if (isset($errors['lname'])) { ?><div class="text-danger small mt-1"><?php echo $errors['lname']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter Age" min="1" max="120" value="<?php echo isset($currentData['age']) ? $currentData['age'] : ''; ?>" required>
                            <?php if (isset($errors['age'])) { ?><div class="text-danger small mt-1"><?php echo $errors['age']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male" <?php echo (isset($currentData['gender']) && $currentData['gender'] === 'Male') ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php echo (isset($currentData['gender']) && $currentData['gender'] === 'Female') ? 'selected' : ''; ?>>Female</option>
                                <option value="Prefer not to say" <?php echo (isset($currentData['gender']) && $currentData['gender'] === 'Prefer not to say') ? 'selected' : ''; ?>>Prefer not to say</option>
                            </select>
                            <?php if (isset($errors['gender'])) { ?><div class="text-danger small mt-1"><?php echo $errors['gender']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3" placeholder="Enter Address" required><?php echo isset($currentData['address']) ? $currentData['address'] : ''; ?></textarea>
                            <?php if (isset($errors['address'])) { ?><div class="text-danger small mt-1"><?php echo $errors['address']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" class="form-control" name="position" placeholder="Enter Position" value="<?php echo isset($currentData['position']) ? $currentData['position'] : ''; ?>" required>
                            <?php if (isset($errors['position'])) { ?><div class="text-danger small mt-1"><?php echo $errors['position']; ?></div><?php } ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="number" class="form-control" name="salary" placeholder="Enter Salary" min="0" step="0.01" value="<?php echo isset($currentData['salary']) ? $currentData['salary'] : ''; ?>" required>
                            <?php if (isset($errors['salary'])) { ?><div class="text-danger small mt-1"><?php echo $errors['salary']; ?></div><?php } ?>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary"><?php echo $isEdit ? 'Update Faculty' : 'Save Faculty'; ?></button>
                            <a href="./index.php" class="btn btn-outline-secondary">Clear</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-dark text-white rounded-top-4 py-3 d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">Faculty Records</h2>
                    <span class="badge bg-light text-dark"><?php echo count($data); ?> record(s)</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($data)) { ?>
                                    <?php foreach ($data as $value) { ?>
                                        <tr>
                                            <td><?php echo $value->faculty_id; ?></td>
                                            <td>
                                                <div class="fw-semibold"><?php echo htmlspecialchars($value->faculty_fname . ' ' . $value->faculty_mname . ' ' . $value->faculty_lname); ?></div>
                                                <div class="small text-muted"><?php echo htmlspecialchars($value->faculty_address); ?></div>
                                            </td>
                                            <td><?php echo htmlspecialchars($value->faculty_age); ?></td>
                                            <td><?php echo htmlspecialchars($value->faculty_gender); ?></td>
                                            <td><?php echo htmlspecialchars($value->faculty_position); ?></td>
                                            <td><?php echo number_format((float) $value->faculty_salary, 2); ?></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="./index.php?action=edit&id=<?php echo $value->faculty_id; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="./index.php?action=delete" method="POST" onsubmit="return confirm('Delete this faculty record?');">
                                                        <input type="hidden" name="id" value="<?php echo $value->faculty_id; ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-4 text-muted">No faculty records found.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php require_once(APP_ROOT . '/views/includes/footer.php'); ?>
