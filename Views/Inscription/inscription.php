<!-- <form class="w-full max-w-sm"  action="Controllers/ScriptInscription.php" method="POST">
  <div>
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
        identifiant
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" name="nom_utilisateur">
    </div>
    <div class=" mb-6">
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
  <div class=" mb-6">
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
</form> -->

<section class="bg-gray-50">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
     
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  S'inscrire
              </h1>
              <form class="space-y-4 md:space-y-6" action="Controllers/ScriptInscription.php" method="POST">
                  <div>
                      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom d'utilisateur :</label>
                      <input id="inline-full-name" type="text" name="nom_utilisateur"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                  </div>
                  <div>
                      <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email :</label>
                      <input id="inline-full-name" type="text" name="email"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="votre@email.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe :</label>
                      <input id="inline-password" type="password" name="mot_de_passe" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                 
                  <button type="submit" class="w-full focus:ring-4 focus:outline-none focus:ring-primary-300" style="border: #3e3e8b 1px solid ;border-radius: 5px;width: contain;background: #3e3e8b; color:white">S'inscrire</button>
              </form>
          </div>
      </div>
  </div>
</section>