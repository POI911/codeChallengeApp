<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles1.css" />

    <title>Code Challenges</title>
  </head>

  <body class="h-full">


    <div
      class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
    >
      <div class="w-full max-w-md space-y-8">
        <div>
          <img
            class="mx-auto h-12 w-auto"
            src="https://raizer.tech/assetsPreviuos/image/logo/Raizer_logo.png"
            alt="Your Company"
          />
          <h2
            class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-600"
          >
            Sign in to your account
          </h2>
        </div>
        @if ($errors->any())
        <ul>
          @foreach ($errors->all() as $error )
          <li style="color:red">{{ $error }}</li>
          @endforeach
        </ul>
        @endif
        <form class="mt-8 space-y-6" method="POST" action="/login">
          <input type="hidden" name="remember" value="true" />
          @csrf
          <div class="-space-y-px rounded-md shadow-sm mb-4">
            <div>
              <label for="email-address" class="sr-only">Email address</label>
              <input
                id="email-address"
                name="email"
                type="email"
                autocomplete="email"
                required
                class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-raizer-500 focus:outline-none focus:ring-raizer-500 sm:text-sm"
                placeholder="Email address"
              />
            </div>
            <div>
              <label for="password" class="sr-only">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                autocomplete="current-password"
                required
                class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-raizer-500 focus:outline-none focus:ring-raizer-500 sm:text-sm"
                placeholder="Password"
              />
            </div>
          </div>

          <div>
            <button
              type="submit"
              class="group relative flex w-full justify-center rounded-md border border-transparent bg-raizer-400 py-2 px-4 text-sm font-medium text-white hover:bg-raizer-500 focus:outline-none focus:ring-2 focus:ring-raizer-500 focus:ring-offset-2"
            >
              Sign in
            </button>
        </form>
          </div>
          <!-- Displaying error messages (e.g in case password is shorter than 7 chars)  -->


      </div>
    </div>
  </body>
</html>
