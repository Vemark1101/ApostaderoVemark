<?php include './layout/head.php'; ?>

<h1 class="text-3xl font-black text-slate-900">Register</h1>
<p class="mt-3 text-slate-600">This page uses the <strong>include</strong> statement and contains a sample registration form.</p>

<div class="mt-8 max-w-2xl rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
    <form action="#" method="POST">
        <div class="mb-5">
            <label class="mb-2 block font-semibold text-slate-700" for="fullname">Full Name</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="text" id="fullname" name="fullname" placeholder="Enter Full Name" required>
        </div>
        <div class="mb-5">
            <label class="mb-2 block font-semibold text-slate-700" for="email">Email Address</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="email" id="email" name="email" placeholder="Enter Email Address" required>
        </div>
        <div class="mb-5">
            <label class="mb-2 block font-semibold text-slate-700" for="username">Username</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="text" id="username" name="username" placeholder="Enter Username" required>
        </div>
        <div class="mb-6">
            <label class="mb-2 block font-semibold text-slate-700" for="password">Password</label>
            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="password" id="password" name="password" placeholder="Enter Password" required>
        </div>
        <button type="submit" class="rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white shadow-lg shadow-blue-200 transition hover:bg-blue-700">Register</button>
    </form>
</div>

<?php include './layout/foot.php'; ?>
