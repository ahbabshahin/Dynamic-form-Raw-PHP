<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Checkbox</title>
</head>

<?php
include "_database.php";

?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $check = implode(',',$_POST['a']);
    $kreck = implode(',',$_POST['b']);

    $sql = "INSERT INTO `check`(`Check`, kreck) VALUE('$check', '$kreck')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "insertion successful";
    }

    else {
        echo mysqli_error($conn);
    }
}

?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <form method = "post">
                        <label class="form-check-label" for="exampleCheck1">Which one is correct?</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "a[]" value = "A" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">A</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "a[]" value = "B" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">B</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "a[]" value = "C" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">C</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "a[]" value = "D" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">D</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "a[]" value = "E" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">E</label>
                            </div>

                            <label class="form-check-label" for="exampleCheck1">Which one is not correct?</label>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "b[]" value = "A" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">A</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "b[]" value = "B" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">B</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "b[]" value = "C" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">C</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "b[]" value = "D" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">D</label>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" 
                                name = "b[]" value = "E" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">E</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>