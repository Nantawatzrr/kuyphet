<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            Add New Student
                        </div>
                        <div class="card-body">
                            @if (Session::has('employee_add'))
                                <div
                                    class="alert alert-success"
                                    role="alert"
                                >
                                    {{Session::get('employee_add')}}
                                </div>
                                
                            @endif
                            <form action="{{route('employees.Emp')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="firstName">firstName Emp</label>
                                    <input type="text" placeholder="firstName" name="firstName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">lastName Emp</label>
                                    <input type="text" placeholder="lastName" name="lastName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="file">Student Image</label>
                                    <input type="file" placeholder="file" name="file" class="form-control">
                                </div><br>
                                <button type="submit" class="btn btn-success">ADD Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

















        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
