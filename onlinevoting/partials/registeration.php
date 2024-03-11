<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <title>Voting System - Registration Page</title>
</head>

<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" placeholder="Enter your username" required="required" name="username"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Enter your mobile" required="required" name="mobile"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Enter your password" required="required" name="password"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="confirm password" required="required" name="cpassword"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="file" name="photo" class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <select name="std" class="form-control w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account?<a href="../index.php" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>
</body>

</html>

</html>