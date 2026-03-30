<?php require './layout/head.php'; ?>

<h1 class="text-3xl font-black text-slate-900">Forgot Password Page</h1>
<p class="mt-3 text-slate-600">This page also uses the <strong>require</strong> statement for the shared layout.</p>

<div class="mt-8 max-w-2xl rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
    <form action="#" method="POST">
        <div class="mb-6">
            <label class="mb-2 block font-semibold text-slate-700" for="recovery-email">Registered Email Address</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-amber-500 focus:bg-white focus:ring-4 focus:ring-amber-100" type="email" id="recovery-email" name="email" placeholder="Enter Registered Email" required>
        </div>
        <button type="submit" class="rounded-xl bg-amber-500 px-5 py-3 font-semibold text-white shadow-lg shadow-amber-200 transition hover:bg-amber-600">Send Reset Link</button>
    </form>
</div>

<p class="mt-4">
    <a href="./login.php" class="font-medium text-amber-600 transition hover:text-amber-700">Back to Login</a>
</p>

<?php require './layout/foot.php'; ?>
