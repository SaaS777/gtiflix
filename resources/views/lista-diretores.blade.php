<x-base-layout>
<!-- Team -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-red">Diretores</h2>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
  @foreach($diretores as $diretores)
    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="{{$diretores->foto}}" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-black sm:text-base lg:text-lg ">
        {{$diretores->nome}}
        </h3>
        <p class="mt-3 text-gray-500 dark:text-neutral-500">
        {{$diretores->descricao}}
        </p>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{route('detalhes-diretores', $diretores)}}">
          
        Ver detalhes
        </a>
      </div>
    </div>
    
    <!-- End Col -->
    @endforeach
  </div>
  <!-- End Grid -->
</div>
<!-- End Team -->
</x-base-layout>
