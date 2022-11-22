<x-latihan-layout>
  <div class="bg-yellow-400 h-screen overflow-hidden flex items-center justify-center">
    <div class="bg-white lg:w-5/12 md:6/12 w-10/12 shadow-3xl">
      <h1 class="text-gray-800 text-center text-3xl p-12"> Luas Trapesium</h1>
      <form class="px-12" method="post" action="{{ route('latihan') }}">
        @csrf
        <div class="flex items-center text-lg mb-6 md:mb-8">
          <input type="number" name="nilai1" id="username" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Masukkan sisi" />
        </div>
        <div class="flex items-center text-lg mb-6 md:mb-8">
          <input type="number" name="nilai2" id="password" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Masukkan sisi" />
        </div>
        <div class="flex items-center text-lg mb-6 md:mb-8">
          <input type="number" name="tinggi" id="password" class="bg-gray-200 pl-12 py-2 md:py-4 focus:outline-none w-full" placeholder="Masukkan tinggi" />
        </div>
        <button type="submit" class="bg-gradient-to-b from-gray-700 to-gray-900 font-medium p-2 md:p-4 text-white uppercase w-full">Login</button>
      </form>
      <p class="text-center text-black text-7xl p-12">
        {{ $hasil }}
      </p>
    </div>

  </div>
</x-latihan-layout>