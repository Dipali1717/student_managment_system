<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style3.css">
<script>
    jQuery(document).ready(function($){
        $('#toggler').click(function(event){
            {
                $('#wrap').toggleClass('toggled');
            }
        });
    });
</script>
</head>
<body>
    <div class="d-flex" id="wrap">
        <div class="sidebar bg-light border-light">
            <div class="sidebar-heading">
                <p class="text-center">Manage Students</p>
            </div>
            <ul class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-vcard-o"></i>DashBoard
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Student
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>View Student
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Edit Student
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="fa fa-sign-out"></i>Logout
                </a>
            </ul>
        </div>
        <div class="main-body">
            <button class="btn btn-outline-light bg-danger mt-3" id="toggler">
                <i class="fa fa-bars"></i>
            </button>
            <section id="main-form">
                <h2 class="text-center text-danger pt-3 font-weight-bold pb-3">Student Management System</h2>
                <div class="container bg-danger pt-3 pl-5 pb-5" id="formsetting">
                    <h3 class="text-center text-white pb-4 pt-2 font-weight-bold">Welcome To Dashboard</h3>
                    <div class="row ">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="AddStudent.php" class="text-white text center"><i class="fa fa-user"></i>
                                <h3>Add Student Detail</h3>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="ViewStudent.php" class="text-white text center"><i class="fa fa-eye"></i>
                                <h3>view Student Detail</h3>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="EditStudent.php" class="text-white text center"><i class="fa fa-pencil"></i>
                                <h3>edit Student Detail</h3>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="row ">
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="AddTeacher.php" class="text-white text center"><i class="fa fa-user"></i>
                                <h3>Add Teacher Detail</h3>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="ViewTeacher.php" class="text-white text center"><i class="fa fa-eye"></i>
                                <h3>view teacher Detail</h3>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-12 m-auto icon">
                            <a href="EditTeacher.php" class="text-white text center"><i class="fa fa-pencil"></i>
                                <h3>edit teacher Detail</h3>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</body>
</html>