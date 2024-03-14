@php
    $no = 1;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- navbar start -->
    <div class="navbar bg-base-100">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl">Popular Game</a>
        </div>
        <div class="flex-none">
          <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
          </button>
        </div>
      </div>
    <!-- navbar end -->

    <!-- table start -->
    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>From</th>
              <th>Maker</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($game as $g)
            <tr class="hover">
              <th>{{ $no }}</th>
              <td>{{ $g ['Name'] }}</td>
              <td>{{ $g ['From'] }}</td>
              <td>{{ $g ['Maker'] }}</td>
              <td class="flex gap-3"><a href="/{{ $g->id }}/edit" class="btn btn-outline btn-success">Edit</a>
              <form action="/update/{{ $g->id }}" method="POST">
              @csrf
              @method('delete')
                <button class="btn btn-outline btn-error" type="submit">Delete</button>
              </form>
              </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
          </tbody>
        </table>
        <div class="mt-5 text-center">
            <a href="/add" class="btn btn-outline btn-accent">Add</a>
        </div>
      </div>
    <!-- table end -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>