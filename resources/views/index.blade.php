<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles1.css" />

    <title>To-Do Challenges</title>
  </head>
  <body>

        @auth
            <span>Welcome, {{ auth()->user()->name }}</span>
            <form method="post" action="/logout">
                @csrf
                <button type="submit">Log Out!</button>
            </form>
        @else
        <a href="/register">Register!</a>
        <a href="/login">Log In!</a>
        @endauth

    <div class="container mx-auto h-screen flex flex-col px-4">
      <h1
        class="text-4xl md:text-5xl text-raizer-400 text-center pt-12 md:pt-32"
      >
        Welcome to the Code Challenges website
      </h1>
      <p class="text-center my-4 text-xl font-medium">
        Here you can add challenges or solve them
      </p>
      <div
        class="grid grid-cols-2 md:flex mx-3 justify-center gap-8 pt-24 md:pt-16 md:flex-row flex-col"
      >
        <div
          class="md:w-1/4 w-full mx-auto border-solid border-2 py-10 px-1 md:py-16 hover:border-raizer-400 rounded-lg shadow-lg transition-all"
        >
          <a class="flex flex-col items-center" href="/challenges">
            <i class="fa-solid fa-code text-raizer-400 text-5xl"></i>
            <h3 class="text-xl md:text-2xl pt-8">Challenges</h3>
          </a>
        </div>
        <div
          class="md:w-1/4 w-full mx-auto border-solid border-2 py-10 px-1 md:py-16 hover:border-raizer-400 rounded-lg shadow-lg transition-all"
        >
          <a class="flex flex-col items-center" href="/solutions">
            <i class="fa-solid fa-bug-slash text-raizer-400 text-5xl"></i>
            <h3 class="text-xl md:text-2xl pt-8">Solutions</h3>
          </a>
        </div>
        <div
          class="md:w-1/4 w-full mx-auto border-solid border-2 py-10 px-1 md:py-16 hover:border-raizer-400 rounded-lg shadow-lg transition-all"
        >
          <a class="flex flex-col items-center" href="/addsolution">
            <i class="fa-solid fa-handshake text-raizer-400 text-5xl"></i>
            <h3 class="text-xl md:text-2xl pt-8">Submit a Solution</h3>
          </a>
        </div>
        <div
          class="md:w-1/4 w-full mx-auto border-solid border-2 py-10 px-1 md:py-16 hover:border-raizer-400 rounded-lg shadow-lg transition-all"
        >
          <a class="flex flex-col items-center" href="/addchallenges">
            <i class="fa-solid fa-plus text-raizer-400 text-5xl"></i>
            <h3 class="text-xl md:text-2xl pt-8">Add a New Challenge</h3>
          </a>
        </div>
      </div>
    </div>



  </body>
  <script
    src="https://kit.fontawesome.com/33ef633056.js"
    crossorigin="anonymous"
  ></script>
</html>
