<?php require './components/htmlStart.php'; ?>

<main class="sign-in-page">
    <div class="container mx-auto mt-20 flex items-center justify-center">

        <form method="POST" action="./models/loginUser.php" class="bg-blue-50 w-1/3 p-5">
            <div class="mb-2">
                <label for="email" class="label font-bold">
                    Enter your email
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                    class="input input-bordered w-full"
                    required />
            </div>

            <div class="mb-2">
                <label for="password" class="label font-bold">
                    Enter your password
                </label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    class="input input-bordered w-full"
                    required />
            </div>

            <button type="submit" class="btn btn-success btn-info mt-5">
                LOGIN
            </button>
        </form>

    </div>
</main>

<?php require './components/htmlEnd.php' ?>