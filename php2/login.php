<?php require './layout/head.php'; ?>

<h1 class="text-3xl font-black text-slate-900">Login</h1>
<p class="mt-3 text-slate-600">This page uses the <strong>require</strong> statement to make sure the layout file must exist before the page can continue.</p>

<div class="mt-8 max-w-2xl rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
    <form action="#" method="POST">
        <div class="mb-5">
            <label class="mb-2 block font-semibold text-slate-700" for="login-email">Email Address</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="email" id="login-email" name="email" placeholder="Enter Email Address" required>
        </div>
        <div class="mb-6">
            <label class="mb-2 block font-semibold text-slate-700" for="login-password">Password</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="password" id="login-password" name="password" placeholder="Enter Password" required>
        </div>
        <button type="submit" class="rounded-xl bg-emerald-600 px-5 py-3 font-semibold text-white shadow-lg shadow-emerald-200 transition hover:bg-emerald-700">Login</button>
    </form>
</div>

<p class="mt-4">
    <a href="./forgot-password.php" class="font-medium text-emerald-600 transition hover:text-emerald-700">Forgot your password?</a>
</p>

<div class="mt-8 rounded-2xl border-l-4 border-emerald-600 bg-emerald-50 px-5 py-4 text-slate-700">
    <strong>Note:</strong> Using <strong>require</strong> will produce a fatal error if the file is missing, and the script will stop.
</div>

<?php require './layout/foot.php'; ?>
