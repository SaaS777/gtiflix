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
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://www.estadao.com.br/resizer/v2/ACHIPKFSCFLHZOGA5AHLI4H5TM.jpg?quality=80&auth=ce52a3d50ae7627b85bf7f7a40c39d1524a6bf897a452df5c50734e5fd298e99&width=380" alt="Avatar">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-black sm:text-base lg:text-lg ">
        {{$diretores->nome}}
        </h3>
        <p class="mt-3 text-gray-500 dark:text-neutral-500">
        {{$diretores->descricao}}
        </p>
      </div>
    </div>
    
    <!-- End Col -->
    @endforeach
  </div>
  <!-- End Grid -->
</div>
<!-- End Team -->
</x-base-layout>
