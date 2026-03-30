<?php include './layout/head.php'; ?>

<h1 class="text-3xl font-black text-slate-900">Home Page</h1>
<p class="mt-3 text-slate-600">This page uses the <strong>include</strong> statement to load the shared header and footer layout.</p>
<p class="mt-4 max-w-4xl text-slate-700">Welcome to PHP Output No. 2. This activity demonstrates how multiple pages can share the same layout by placing common HTML code inside reusable PHP files. Instead of repeating the same header, navigation menu, and footer in every page, we can place them in separate files and call them using include or require.</p>

<div class="mt-8 grid gap-5 md:grid-cols-3">
    <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-blue-50 to-white p-6 shadow-lg shadow-slate-200/60">
        <h3 class="text-xl font-bold text-slate-900">Register</h3>
        <p class="mt-3 text-sm leading-6 text-slate-600">Create a sample account by filling out the registration form.</p>
        <a href="./register.php" class="mt-5 inline-flex rounded-xl bg-blue-600 px-4 py-3 font-semibold text-white transition hover:bg-blue-700">Open Register</a>
    </div>
    <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-emerald-50 to-white p-6 shadow-lg shadow-slate-200/60">
        <h3 class="text-xl font-bold text-slate-900">Login</h3>
        <p class="mt-3 text-sm leading-6 text-slate-600">Enter your email address and password to access the page.</p>
        <a href="./login.php" class="mt-5 inline-flex rounded-xl bg-emerald-600 px-4 py-3 font-semibold text-white transition hover:bg-emerald-700">Open Login</a>
    </div>
    <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-6 shadow-lg shadow-slate-200/60">
        <h3 class="text-xl font-bold text-slate-900">Forgot Password</h3>
        <p class="mt-3 text-sm leading-6 text-slate-600">Request a password reset by entering your registered email.</p>
        <a href="./forgot-password.php" class="mt-5 inline-flex rounded-xl bg-amber-500 px-4 py-3 font-semibold text-white transition hover:bg-amber-600">Open Forgot Password</a>
    </div>
</div>

<div class="mt-8 rounded-2xl border-l-4 border-blue-600 bg-blue-50 px-5 py-4 text-slate-700">
    <strong>Note:</strong> Using <strong>include</strong> will only produce a warning if the file is missing, and the script may continue.
</div>

<?php include './layout/foot.php'; ?>
