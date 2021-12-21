<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        h1 {
            font-size: 350%;
        }

        h2 {
            font-size: 150%;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid p-5 bg-secondary text-white text-center">
        <h1>Registration</h1>
        <h2 class="text-center">Register to use the document converter</h2>
    </div>
    <div style="max-width:800px; margin:auto;">
        <form action="" method="post" enctype="multipart/form-data">
                <div style="padding-top:20px; padding-left:10px;" class="mb-3">
                    <input name="upload" class="form-control" type="text" id="formUsername" placeholder="username">
                </div>
                <div style="max-width:140px; margin:auto;">
                    <div>
                        <input style="width:150px" type="submit" name="action" class="btn btn-secondary" value="Register">
                    </div>
                </div>
        </form>
    </div>

</body>

</html>