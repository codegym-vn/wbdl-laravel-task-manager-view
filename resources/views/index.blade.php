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
        <h5 class="card-header">Danh sách công việc</h5>
        <div class="card-body">
            <a href="{{ route('tasks.create') }}" class="btn btn-success mb-2">+ New</a>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Image</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $index => $task)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $task['title'] }}</td>
                    <td>{{ $task['start_date'] }}</td>
                    <td>{{ $task['end_date'] }}</td>
                    <td><span class="badge {{ $task['status'] ?  'bg-success' : 'bg-warning'}} ">{{ $task['status'] ? 'Done' : 'Pending' }}</span></td>
                    <td><img src="{{ asset('storage/' . $task->image) }}" alt="" width="150"></td>
                    <td><a href="{{ route('tasks.delete', $task->id) }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Update</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
