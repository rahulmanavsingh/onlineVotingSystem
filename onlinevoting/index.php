<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <title>PHP Voting System</title>
</head>

<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="actions\login.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" placeholder="Enter Your Username" required="required"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="text" name="mobile" placeholder="Enter Your mobile" required="required" maxlength="10"
                        minlength="10" class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <input type="text" name="password" placeholder="Enter Your password" required="required"
                        class="form-control w-50 m-auto" />
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-dark my-4">Login</button>
                <p>Don't have an account?<a href="partials\registeration.php" class="text-white">Register here</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>