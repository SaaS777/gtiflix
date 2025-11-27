<x-base-layout>
<!-- Team -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class=" text-center mb-10">
    <p class="text-2xl font-bold md:text-4xl md:leading-tight text-red">Atores</p>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  @foreach($atores as $atores)
  <div class=" sm:grid-cols-3 lg:grid-cols-5 gap-8 md:gap-12 mb-10">
    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="{{$atores->foto}}" alt="Avatar">
      <div class="mt-2 sm:mt-8">
        <h3 class="font-medium text-dark-800 dark:text-dark-200">
        {{$atores->nome}}
        </h3>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
        {{$atores->descricao}}
        </p>
      </div>
      <div class="mt-10 border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <a class="w-50 py-5 px-5 inline-flex justify-center items-center gap-x-6 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{route('detalhes-atores', $atores)}}">
          
        Ver detalhes
        </a>
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->

  <!-- Card -->
  <!-- End Card -->
  @endforeach

</div>
<!-- End Team -->
</x-base-layout>