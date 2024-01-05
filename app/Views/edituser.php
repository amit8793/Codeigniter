<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit</title>
</head>

<body>

    <!--Navbar Section Start-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('hello_world') ?>"><span
                    class="text-white">CRUD</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('hello_world') ?>">Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('viewdata') ?>">Userlist</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar Section End-->

    <!--Form Section Start-->
    <div class="container">
        <h3 class="mt-3">Update User</h3>
        <form action="<?php echo base_url('/update') ?>" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $users['id']; ?>">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                    value="<?php echo $users['Name']; ?>" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email"
                    value="<?php echo $users['Email']; ?>" name="email" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="number" placeholder="Enter Phone"
                    value="<?php echo $users['Phone']; ?>" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!--Form Section End-->
</body>

</html>