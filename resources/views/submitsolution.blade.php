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
      <h1 class="md:text-5xl text-4xl text-raizer-400 text-center pt-12 md:pt-32 mb-12">
          Submit Solutions
        </h1>

        <!-- <div class="container mx-auto"> -->
    <form class=" mx-auto mb-7 md:w-1/2 px-8 " method="get" action="/add_solution_query">
      <div class="flex justify-evenly flex-col gap-3 mb-5">
        <label class="text-xl mr-24  for="names">Who are you?</label>
        <select
          class="border-solid border-2 rounded-lg text-lg px-3 py-2 border-raizer-400 transition-all"
          name="userID"
          id="names"
        >
        <option  value="">Select intern</option>
          <option value="1">Ayham</option>
          <option value="2">Shayyah</option>
          <option value="3">Zed</option>
          <option value="4">Naser</option>
        </select>
      </div>
      <div class="flex justify-evenly flex-col gap-3 mb-5">
        <label for="challengeID" class="text-xl mr-24 "
          >Challenge ID
        </label>
        <input
          class=" border-solid border-2 rounded-lg text-lg px-3 py-2 border-raizer-400"
          type="number"
          min="0"
          name="challengeID"
        />
      </div>
      <div class="flex justify-evenly flex-col gap-3 mb-5">
        <label for="solutionID" class="text-xl mr-24 "
          >Solution Link
        </label>
        <input
          class=" border-solid border-2 rounded-lg text-lg px-3 py-2 border-raizer-400"
          type="text"
          name="solutionID"
        />
      </div>
      <div class="flex justify-evenly flex-col">
        <button class="text-2xl" type="submit">Submit</button>
      </div>
    </form>
 <!-- -->
    <div>
        <button class="mt-8">
          <a class="text-raizer-400 py-5 px-6 bg-slate-800 rounded-full" href="/"
            ><i class="fa-solid fa-arrow-left text-lg md:text-xl"></i
          ></a>
        </button>
      </div>

  </body>
  <script
    src="https://kit.fontawesome.com/33ef633056.js"
    crossorigin="anonymous"
  ></script>
</html>
