<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css" />

    <title>To-Do Challenges</title>
</head>
<body>

  <h1 class="md:text-5xl text-4xl text-raizer-400 text-center pt-12 md:pt-32 mb-12">
    Insert Challenges Links
  </h1>
  @auth
<form class=" mx-auto mb-7 md:w-1/2 px-8" method="post" action="/addchallenges">
    @csrf
      <div class="flex justify-evenly flex-col gap-3 mb-5">
        <label for="challengeName" class="text-xl mr-24 "
          >Challenge Name
        </label>
        <input
          class=" border-solid border-2 rounded-lg text-lg px-3 py-2 border-raizer-400"
          type="text"
          name="challengeName"
        />
      </div>


      <div class="flex justify-evenly flex-col gap-3 mb-5">
        <label for="challengeLink" class="text-xl mr-24 "
          >Challenge Link
        </label>
        <input
          class=" border-solid border-2 rounded-lg text-lg px-3 py-2 border-raizer-400"
          type="text"
          name="challengeLink"
        />
      </div>

        <div class="flex justify-evenly flex-col">
            <button class="text-2xl" type="submit">Submit</button>
          </div>
</form>
@else
        <div class=" mx-auto mb-7 md:w-1/2 px-8 ">
        <p class="text-xl mr-24" >You have to <a href='/login'>log in</a> First</p>
        </div>
        @endauth

<div class=" mx-auto mb-7 md:w-1/2 px-8 ">
    <button class="mt-8">
      <a class="text-raizer-400 py-5 px-6 bg-slate-800 rounded-full" href="/">
      <i class="fa-solid fa-arrow-left text-lg md:text-xl"></i></a>
    </button>
    </div>

</body>
<script
src="https://kit.fontawesome.com/33ef633056.js"
crossorigin="anonymous"
></script>
</html>
