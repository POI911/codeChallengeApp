<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles1.css" />

    <title>Code Challenges</title>
  </head>
  <body>
    <div class="container mx-auto">
      <h1
        class="md:text-5xl text-4xl text-raizer-400 text-center pt-12 md:pt-32"
      >
        Challenges
      </h1>

      <table class="border-raizer-400 w-full bg-slate-800 mx-auto rounded-2xl">
        <thead>
          <th class="text-white text-center w-1/5 md:text-xl">Week</th>
          <th class="text-white text-center w-1/5 md:text-xl">Name</th>
          <th class="text-white text-center w-1/5 md:text-xl">Challenge Name</th>
          <th class="text-white text-center w-3/5 md:text-xl">Challenge Link</th>
        </thead>

        <tbody>
          @foreach ($challenges as $challenge)
          <tr class="pt-8">
            <td class="text-white text-center md:text-lg pt-5 pb-3">
                {{ $challenge->challenge_week_number}}
              </td>

            <td class="text-white text-center md:text-lg pt-5 pb-3">
              {{ $challenge->name}}
            </td>
            <td class="text-white text-center md:text-lg pt-5 pb-3">
              {{ $challenge->challenge_name }}
            </td>
            <td class="text-white text-center md:text-lg pt-5 pb-3">
              <a href="{{ $challenge->challenge_link }}" target="_blank">
                Challenge Link</a
              >
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
      <div class="flex justify-between pt-6">
        <button class="">
          <a
            class="text-raizer-400 py-5 px-6 bg-slate-800 rounded-full"
            href="/"
            ><i class="fa-solid fa-arrow-left text-lg md:text-xl"></i
          ></a>
        </button>
        <button class="">
          <h3 class="text-raizer-400 text-lg md:text-xl">
            <a
              class="px-3 py-3 md:py-3 md:px-4 bg-slate-800 rounded-2xl"
              href="/addsolution"
              >Submit a Solution</a
            >
          </h3>
        </button>
      </div>
    </div>
  </body>
  <script
    src="https://kit.fontawesome.com/33ef633056.js"
    crossorigin="anonymous"
  ></script>
</html>
