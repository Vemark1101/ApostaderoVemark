<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">
    <div class="mx-auto max-w-6xl px-4 py-10">
        <div class="mb-8 rounded-3xl bg-gradient-to-r from-blue-700 via-sky-600 to-cyan-500 px-8 py-10 text-white shadow-2xl">
            <p class="mb-2 text-sm font-semibold uppercase tracking-[0.3em] text-blue-100">Hands-on Exercise</p>
            <h1 class="text-3xl font-black md:text-4xl">PHP Output No. 1</h1>
            <p class="mt-3 max-w-2xl text-sm leading-6 text-blue-50 md:text-base">
                This activity demonstrates how GET and POST requests send form data to another PHP file.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
        <fieldset class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
            <legend class="rounded-full bg-blue-600 px-4 py-2 text-sm font-bold text-white">This form uses GET request</legend>
            <form action="redirect.php" method="GET">
                <table class="w-full border-separate border-spacing-y-4">
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">First Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="text" name="fname" placeholder="Enter First Name" pattern="[A-Za-z\s\-]{2,50}" title="First name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Middle Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="text" name="mname" placeholder="Enter Middle Name" pattern="[A-Za-z\s\-]{2,50}" title="Middle name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Last Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="text" name="lname" placeholder="Enter Last Name" pattern="[A-Za-z\s\-]{2,50}" title="Last name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Age</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="number" name="age" placeholder="Enter Age" min="1" max="120" required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Gender</td>
                        <td>
                            <select class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Email</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="email" name="email" placeholder="Enter Email Address" required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Address</td>
                        <td>
                            <textarea class="min-h-28 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" name="address" placeholder="Enter Complete Address" minlength="10" required></textarea>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Contact Number</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100" type="tel" name="contact" placeholder="Enter Contact Number" pattern="[0-9+\-\s]{7,20}" title="Contact number should contain digits and may include + or -." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td></td>
                        <td class="pt-3">
                            <div class="flex flex-wrap gap-3">
                                <input class="cursor-pointer rounded-xl bg-blue-600 px-5 py-3 font-semibold text-white shadow-lg shadow-blue-200 transition hover:bg-blue-700" type="submit" value="Submit Data">
                                <input class="cursor-pointer rounded-xl bg-slate-200 px-5 py-3 font-semibold text-slate-700 transition hover:bg-slate-300" type="reset" value="Cancel">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

        <fieldset class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/70">
            <legend class="rounded-full bg-emerald-600 px-4 py-2 text-sm font-bold text-white">This form uses POST request</legend>
            <form action="redirect.php" method="POST">
                <table class="w-full border-separate border-spacing-y-4">
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">First Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="text" name="fname" placeholder="Enter First Name" pattern="[A-Za-z\s\-]{2,50}" title="First name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Middle Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="text" name="mname" placeholder="Enter Middle Name" pattern="[A-Za-z\s\-]{2,50}" title="Middle name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Last Name</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="text" name="lname" placeholder="Enter Last Name" pattern="[A-Za-z\s\-]{2,50}" title="Last name should contain letters only." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Age</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="number" name="age" placeholder="Enter Age" min="1" max="120" required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Gender</td>
                        <td>
                            <select class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Email</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="email" name="email" placeholder="Enter Email Address" required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Address</td>
                        <td>
                            <textarea class="min-h-28 w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" name="address" placeholder="Enter Complete Address" minlength="10" required></textarea>
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="w-44 pr-4 pt-3 font-semibold text-slate-700">Contact Number</td>
                        <td>
                            <input class="w-full rounded-xl border border-slate-300 bg-slate-50 px-4 py-3 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-100" type="tel" name="contact" placeholder="Enter Contact Number" pattern="[0-9+\-\s]{7,20}" title="Contact number should contain digits and may include + or -." required />
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td></td>
                        <td class="pt-3">
                            <div class="flex flex-wrap gap-3">
                                <input class="cursor-pointer rounded-xl bg-emerald-600 px-5 py-3 font-semibold text-white shadow-lg shadow-emerald-200 transition hover:bg-emerald-700" type="submit" value="Submit Data">
                                <input class="cursor-pointer rounded-xl bg-slate-200 px-5 py-3 font-semibold text-slate-700 transition hover:bg-slate-300" type="reset" value="Cancel">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        </div>
    </div>
</body>
</html>
