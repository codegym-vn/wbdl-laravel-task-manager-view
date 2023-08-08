<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <h5 class="card-header">Thêm mới công việc</h5>
        <div class="card-body">
            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Start date</label>
                    <input name="start-date" type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">End date</label>
                    <input name="end-date" type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">File</label>
                    <input name="file" type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="checkbox" value="0" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Pending
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="checkbox" value="1" id="" >
                        <label class="form-check-label" for="">
                            Done
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
