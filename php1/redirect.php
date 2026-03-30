<?php
    
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $req_type = '$_GET';
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $req_type = '$_POST';
    }

    $fname = ($req_type == '$_GET') ? htmlspecialchars($_GET['fname']) : htmlspecialchars($_POST['fname']);
    $mname = ($req_type == '$_GET') ? htmlspecialchars($_GET['mname']) : htmlspecialchars($_POST['mname']);
    $lname = ($req_type == '$_GET') ? htmlspecialchars($_GET['lname']) : htmlspecialchars($_POST['lname']);
    $age = ($req_type == '$_GET') ? htmlspecialchars($_GET['age']) : htmlspecialchars($_POST['age']);
    $gender = ($req_type == '$_GET') ? htmlspecialchars($_GET['gender']) : htmlspecialchars($_POST['gender']);
    $email = ($req_type == '$_GET') ? htmlspecialchars($_GET['email']) : htmlspecialchars($_POST['email']);
    $address = ($req_type == '$_GET') ? htmlspecialchars($_GET['address']) : htmlspecialchars($_POST['address']);
    $contact = ($req_type == '$_GET') ? htmlspecialchars($_GET['contact']) : htmlspecialchars($_POST['contact']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output No. 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <div class="mx-auto max-w-4xl px-4 py-10">
        <div class="overflow-hidden rounded-3xl bg-white shadow-2xl shadow-slate-200/70">
            <div class="bg-gradient-to-r from-indigo-700 via-blue-600 to-cyan-500 px-8 py-8 text-white">
                <p class="mb-2 text-sm font-semibold uppercase tracking-[0.3em] text-indigo-100">Submitted Record</p>
                <h2 class="text-2xl font-black md:text-3xl">Data is sent here, and it is store at <?php echo $req_type; ?> variable</h2>
            </div>
            <div class="px-8 py-8">
        <table class="w-full border-separate border-spacing-y-3">
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">First Name:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $fname; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Middle Name:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $mname; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Last Name:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $lname; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Age:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $age; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Gender:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Email:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $email; ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Address:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo nl2br($address); ?></td>
            </tr>
            <tr>
                <td class="w-48 rounded-l-2xl bg-slate-50 px-4 py-4 font-bold text-slate-700">Contact Number:</td>
                <td class="rounded-r-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900 underline decoration-blue-500 decoration-2 underline-offset-4"><?php echo $contact; ?></td>
            </tr>
        </table>

        <a href="./" class="mt-8 inline-flex rounded-xl bg-slate-900 px-5 py-3 font-semibold text-white transition hover:bg-slate-700">Return to Main Form</a>
            </div>
        </div>
    </div>
</body>
</html>
