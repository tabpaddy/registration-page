<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="text-center">registration project</h1>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                <h1 class="text-center">Sign up</h1>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                       <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                    </div> 
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                       <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off">
                    </div> 
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm password</label>
                       <input type="text" class="form-control" id="cpassword" placeholder="Enter confirm password" autocomplete="off">
                    </div> 
                    <button type="submit" class="btn btn-success w-100 my-3">Signup</button>
                </form>
            </div>


            <div class="col-md-6 col-xm-12 my-5">
                <h1 class="text-center">Login</h1>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                       <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                    </div> 
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                       <input type="password" class="form-control" id="password" placeholder="Enter password" autocomplete="off">
                    </div> 

                    <button type="submit" class="btn btn-dark w-100 my-3">Login</button>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>