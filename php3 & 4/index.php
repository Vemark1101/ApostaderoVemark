<?php

include './config.php';

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = trim($_POST['fname']);
    $mname = trim($_POST['mname']);
    $lname = trim($_POST['lname']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);

    if (
        empty($fname) || empty($mname) || empty($lname) || empty($age) ||
        empty($gender) || empty($email) || empty($address) || empty($contact)
    ) {
        $error_message = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } elseif (!is_numeric($age) || $age < 1 || $age > 120) {
        $error_message = 'Please enter a valid age.';
    } else {
        $stmt = $connection->prepare("INSERT INTO registered_persons (fname, mname, lname, age, gender, email, address, contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssissss", $fname, $mname, $lname, $age, $gender, $email, $address, $contact);

        if ($stmt->execute()) {
            $success_message = 'Record has been successfully saved.';
        } else {
            $error_message = 'Error saving record: ' . $stmt->error;
        }

        $stmt->close();
    }
}

$result = $connection->query("SELECT * FROM registered_persons ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 3 and 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <div class="mx-auto max-w-7xl px-4 py-10">
        <div class="mb-8 rounded-3xl bg-gradient-to-r from-violet-700 via-indigo-600 to-sky-500 px-8 py-10 text-white shadow-2xl">
            <p class="mb-2 text-sm font-semibold uppercase tracking-[0.3em] text-violet-100">Database Connected Output</p>
            <h1 class="text-3xl font-black md:text-4xl">PHP Output No. 3 and 4</h1>
            <p class="mt-3 max-w-3xl text-sm leading-6 text-indigo-50 md:text-base">
                This page allows the user to submit a record to the database and view the list of registered persons below the form.
            </p>
        </div>

        <div class="grid gap-8 xl:grid-cols-[1.05fr_1.25fr]">
            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
                <h2 class="text-2xl font-black text-slate-900">Registration Form</h2>
                <p class="mt-2 text-sm text-slate-600">Fill out all the required fields and submit the form to save a new record.</p>

                <?php if (!empty($success_message)) { ?>
                    <div class="mt-5 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-700">
                        <?php echo $success_message; ?>
                    </div>
                <?php } ?>

                <?php if (!empty($error_message)) { ?>
                    <div class="mt-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-red-700">
                        <?php echo $error_message; ?>
                    </div>
                <?php } ?>

                <form action="" method="POST" class="mt-6 space-y-5">
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">First Name</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="text" name="fname" placeholder="Enter First Name" pattern="[A-Za-z\s\-]{2,50}" required>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Middle Name</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="text" name="mname" placeholder="Enter Middle Name" pattern="[A-Za-z\s\-]{2,50}" required>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Last Name</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="text" name="lname" placeholder="Enter Last Name" pattern="[A-Za-z\s\-]{2,50}" required>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Age</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="number" name="age" placeholder="Enter Age" min="1" max="120" required>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Gender</label>
                        <select class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Email</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Address</label>
                        <textarea class="min-h-28 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" name="address" placeholder="Enter Complete Address" minlength="10" required></textarea>
                    </div>
                    <div>
                        <label class="mb-2 block font-semibold text-slate-700">Contact Number</label>
                        <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-violet-500 focus:bg-white focus:ring-4 focus:ring-violet-100" type="tel" name="contact" placeholder="Enter Contact Number" pattern="[0-9+\-\s]{7,20}" required>
                    </div>
                    <div class="flex flex-wrap gap-3 pt-2">
                        <button class="rounded-xl bg-violet-600 px-5 py-3 font-semibold text-white shadow-lg shadow-violet-200 transition hover:bg-violet-700" type="submit">Save Record</button>
                        <button class="rounded-xl bg-slate-200 px-5 py-3 font-semibold text-slate-700 transition hover:bg-slate-300" type="reset">Clear Form</button>
                    </div>
                </form>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
                <div class="flex items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-black text-slate-900">List of Registered Person</h2>
                        <p class="mt-2 text-sm text-slate-600">Saved records from the database will appear here.</p>
                    </div>
                    <div class="rounded-2xl bg-slate-100 px-4 py-3 text-sm font-semibold text-slate-700">
                        Total Records:
                        <span class="text-violet-700"><?php echo ($result) ? $result->num_rows : 0; ?></span>
                    </div>
                </div>

                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full border-separate border-spacing-y-3">
                        <thead>
                            <tr>
                                <th class="rounded-l-2xl bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">ID</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Full Name</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Age</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Gender</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Email</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Address</th>
                                <th class="bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Contact</th>
                                <th class="rounded-r-2xl bg-slate-900 px-4 py-3 text-left text-sm font-semibold text-white">Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result && $result->num_rows > 0) { ?>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td class="rounded-l-2xl border border-r-0 border-slate-200 bg-slate-50 px-4 py-4 text-sm"><?php echo $row['id']; ?></td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm font-semibold text-slate-700">
                                            <?php echo htmlspecialchars($row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname']); ?>
                                        </td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['age']); ?></td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['gender']); ?></td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['address']); ?></td>
                                        <td class="border border-r-0 border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['contact']); ?></td>
                                        <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-sm"><?php echo htmlspecialchars($row['created_at']); ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="8" class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-8 text-center text-slate-500">
                                        No registered persons found.
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if ($result) {
    $result->free();
}

$connection->close();

?>
