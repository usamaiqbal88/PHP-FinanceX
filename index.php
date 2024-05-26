<?

include ('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>

</style>

<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FinanceX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#about-me">About</a>
                    <a class="nav-link" href="#features">Features</a>
                    <a class="nav-link" href="#form-background">Add Expense</a>
                    <a class="nav-link" href="#spending-container">Spendings</a>
                    <a class="nav-link" href="#contacts">Contact</a>
                </div>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg navbar-custom navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FinanceX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#about-me">About</a>
                    <a class="nav-link" href="#features">Features</a>
                    <a class="nav-link" href="#form-background">Add Expense</a>
                    <a class="nav-link" href="#spending-container">Spendings</a>
                    <a class="nav-link" href="#contacts">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="header16" id="hero-17-udMJrOZcAO">
        <div class="container-fluid">
            <div class="row">
                <div class="content-wrap col-12 col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
                        <strong>Expense Wizard</strong>
                    </h1>
                    <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
                        Unleash the Magic of Managing Your Expenses with FinanceX
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section" id="about-me">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="card">
                        <h3 class="card-title">Who We Are</h3>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="item-wrapper">
                                        <p class="card-text">Welcome to ExpenseX, where we turn the mundane task of
                                            managing expenses into a thrilling adventure.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="item-wrapper">
                                        <p class="card-text">Our team of financial wizards is here to help you take
                                            control of your spending and transform your financial habits.</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="item-wrapper">
                                        <p class="card-text">Join us on this epic journey to financial freedom and never
                                            worry about your expenses again!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Cards Section -->

    <section class="features-section" id="features">
        <div class="container">
            <h1 class="section-title">Features</h1>
            <br>
            <div class="row align-items-center feature-item">
                <div class="col-12 col-md-6 col-lg-6 image-wrapper">
                    <img class="w-100" src="images/medicine.jpeg" alt="Expense Management">
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-wrapper">
                    <h2>Expense Management</h2>
                    <p>Effortlessly track and categorize your expenses to stay on top of your financial game.</p>
                </div>
            </div>
            <div class="row align-items-center feature-item flex-md-row-reverse">
                <div class="col-12 col-md-6 col-lg-6 image-wrapper">
                    <img class="w-100" src="images/mercedes.jpeg" alt="Custom Budgeting">
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-wrapper">
                    <h2>Custom Budgeting</h2>
                    <p>Create personalized budgets tailored to your lifestyle and financial goals for ultimate control.
                    </p>
                </div>
            </div>
            <div class="row align-items-center feature-item">
                <div class="col-12 col-md-6 col-lg-6 image-wrapper">
                    <img class="w-100" src="images/dollars.jpeg" alt="Interactive Reports">
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-wrapper">
                    <h2>Interactive Reports</h2>
                    <p>Visualize your spending patterns with interactive reports that make financial analysis a breeze.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="form-background">
        <div class="container" id="form-container">
            <div class="form-container">
                <div class="form-header">
                    <h2>FinanceX Expense Form</h2>
                </div>
                <form id="store_finance_form" method="POST">
                    <div class="mb-3">
                        <label for="expense_details" class="form-label">Expense Details </label>
                        <textarea name="expense_details" id="expense_details"
                            class="form-control"><?php echo isset($_POST['expense_details']) ? $_POST['expense_details'] : ''; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Enter Amount </label>
                        <input type="number" step="any" name="amount" id="amount" class="form-control"
                            value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date </label>
                        <input type="date" name="date" id="date" class="form-control"
                            value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit_expense" id="submit_expense" class="btn btn-block">Save
                            Expense</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>
    <div class="container" id="spending-container">
        <h1 class="section-title text-center">Spendings</h1><br>
        <?php
        include ('connection.php');

        $query = "SELECT * FROM finance_reports ORDER BY id ASC";
        $finances = mysqli_query($mysqli_conection, $query);

        ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Expense Detail</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                while ($row = mysqli_fetch_assoc($finances)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["expense_details"] . "</td>";
                    echo "<td>" . $row["amount"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <br><br>
    <section class="contacts-section" id="contacts">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 content-head">
                    <div class="mbr-section-head mb-5">
                        <h3 class="mbr-section-title section-title align-center mb-0">
                            <strong>Get in Touch</strong>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="item features-without-image col-12 col-md-6">
                    <div class="item-wrapper">
                        <div class="text-wrapper">
                            <h6 class="card-title mb-3">
                                <strong>Phone</strong>
                            </h6>
                            <p class="mbr-text text-black">
                                <a href="tel:123-456-7890">123-456-7890</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6">
                    <div class="item-wrapper">
                        <div class="text-wrapper">
                            <h6 class="card-title mb-3">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text text-black">
                                <a href="mailto:info@expensepro.com">info@expensepro.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6">
                    <div class="item-wrapper">
                        <div class="text-wrapper">
                            <h6 class="card-title mb-3">
                                <strong>Address</strong>
                            </h6>
                            <p class="mbr-text text-black">Pakistan</p>
                        </div>
                    </div>
                </div>
                <div class="item features-without-image col-12 col-md-6">
                    <div class="item-wrapper">
                        <div class="text-wrapper">
                            <h6 class="card-title mb-3">
                                <strong>Working Hours</strong>
                            </h6>
                            <p class="mbr-text text-black">Mon-Fri: 9am-5pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {

        //store finance
        $('#store_finance_form').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'store_finance.php',
                data: $(this).serialize(),
                success: function (response) {
                    var response = JSON.parse(response);
                    // $('#').html(response);
                    if (response.status == 'error') {
                        var errorMessages = response.errors.join("<br>");
                        Swal.fire({
                            icon: "error",
                            title: 'Error',
                            html: errorMessages,
                        });
                    } else {
                        Swal.fire({
                            text: response.message,
                            icon: "success"
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: error,
                    });
                }
            });
        });

        const navbarLinks = document.querySelectorAll('.nav-link');
        navbarLinks.forEach(link => {
            link.addEventListener('click', () => {
                const navbarCollapse = document.getElementById('navbarNavAltMarkup');
                navbarCollapse.classList.remove('show');
            });
        });

    });
</script>