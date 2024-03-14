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
          <a class="btn btn-ghost text-xl">Edit Popular Game</a>
        </div>
        <div class="flex-none">
          <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
          </button>
        </div>
      </div>
    <!-- navbar end -->

    <div class="flex justify-center items-center">
        <form action="/update/{{ $game->id }}" method="POST">
        @csrf
        @method('put')
          <div class="w-full max-w-xs mt-10">
              <label class="form-control">
                  <div class="label">
                    <span class="label-text">Name</span>
                  </div>
                  <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full max-w-xs" placeholder="..." name="Name" type="text" value="{{ $game->Name }}">
              </label>
              <label class="form-control">
                  <div class="label">
                    <span class="label-text">From</span>
                  </div>
                  <input type="text" placeholder="Type here" class="input input-bordered input-secondary w-full max-w-xs" placeholder="..." name="From" type="text" value="{{ $game->From }}"/>
              </label>
              <label class="form-control">
                  <div class="label">
                    <span class="label-text">Maker</span>
                  </div>
                  <input type="text" placeholder="Type here" class="input input-bordered input-success w-full max-w-xs" placeholder="..." name="Maker" type="text" value="{{ $game->Maker }}"/>
              </label>
              <div class="mt-5 p-2 text-center">
                <button class="btn btn-outline btn-info" type="submit">Okay</button>
              </div>
          </div>
        </form>
      </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>