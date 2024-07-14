<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Universitas Methodist Indonesia</title>
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <style>
    
        .dashboard {
            background-color: #f0f0f0;
            padding: 50px;
        }
         @keyframes fadeInDownModal {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .modal-content {
            animation: fadeInDownModal 0.5s ease-in-out;
        }
    </style>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/umi.png" class="img-fluid" width="90px" alt="UMI Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#surveyModal">
                            Survey
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
    <div class="container-fluid dashboard">
        <div class="container">
            <h1 class="text-center mb-5">Welcome to Universitas Methodist Indonesia Dashboard</h1>
          
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere varius ex, eget pharetra turpis volutpat a. Nullam vel mollis purus. Nam consectetur ex id risus rutrum consequat.</p>
        </div>
    </div>

  
    <div class="modal fade" id="surveyModal" tabindex="-1" aria-labelledby="surveyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="surveyModalLabel">Survey Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <form action="proses.php" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="id" class="form-label">No ID</label>
                            <input type="number" class="form-control" id="id" name="id" placeholder="Enter your ID" required>
                            <div class="invalid-feedback">
                                Please enter your ID.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your full name" required>
                            <div class="invalid-feedback">
                                Please enter your full name.
                            </div>
                        </div>
                       
                        <div class="mb-3">
                            <label for="soal1" class="form-label">Question 1</label>
                            <select class="form-select" id="soal1" name="soal1" required>
                                <option value="">Select an option</option>
                                <option value="Sangat Buruk">Sangat Buruk</option>
                                <option value="Buruk">Buruk</option>
                                <option value="Baik">Baik</option>
                                <option value="Sangat Baik">Sangat Baik</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select an option.
                            </div>
                        </div>
                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-JZwjn9a6fiDBeQ4/QAjOObQzmqiTKykr4H7vU1u2kK4nEJqJWf4+EFss1rGS5Dk3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-nlZNxnKXZ9tQZY4pLh04BrVb9Tft6DQoZzxG/+BhKZLDOkl2Y2RPKKRE5tQ0zrmF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+al3+JjPoE8X+olbALP7vcPA4U3W+kJ7/2k2v9vqw2olo/5" crossorigin="anonymous"></script>
    <scrsipt>
       
    </scrsipt>
</body>
</html>
