<form class="w-full max-w-sm"  action="Controllers/ScriptInscription.php"method="POST">
  <div>
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
        identifiant
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="npm_utilisateur">
    </div>
    <div class="mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
        email
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="email">
    </div>
  </div>
  <div class=" mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-password">
        mot de passe
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="mot_de_passe">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"></div>
    
  </div>
  <div>
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign Up
      </button>
    </div>
  </div>
</form>

