<div class="container mx-auto px-6 my-8">
  <div class="md:flex md:items-center">
      <div class="w-full h-64 md:w-1/2 lg:h-96">
          <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{ $product->image }}" alt="Nike Air">
      </div>
      <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
          <h3 class="text-gray-700 uppercase text-lg">{{ $product->name }}</h3>
          <span class="text-gray-500 mt-3">${{ $product->price }}</span>
          <hr class="my-3">
          <div class="mt-2">
              <label class="text-gray-700 text-sm" for="count">Count: (<span class="text-gray-700 text-lg mx-2">{{ $product->quantity }}</span>)</label>
              <div class="flex items-center mt-1">
                <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </button>
                  
                  
                  <span class="text-gray-700 text-lg mx-2">0</span>
                  <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </button>
              </div>
          </div>
          <div class="mt-3">
            <label class="text-gray-700 text-sm" for="count">Description:</label>
            <div class="">
              <p>{{ $product->description }}</p>
            </div>
        </div>
          <div class="flex items-center mt-6">
              <button class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Order Now</button>
              <button class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </button>
          </div>
      </div>
  </div>
  <div class="mt-16">
      <h3 class="text-gray-600 text-2xl font-medium">More Products</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

@foreach ($products as $product)
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
          <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url({{ $product->image }})">
              <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                  <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </button>
          </div>
          <div class="px-5 py-3">
              <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
              <span class="text-gray-500 mt-2">${{ $product->price }}</span>
          </div>
          <div class="px-5 py-3">
            <span class="text-gray-500 text-xs mt-4 py-2">{{ $product->description }}</span>
        </div>
        </div>
@endforeach
         

      </div>
  </div>
</div>




{{-- <div class="container mt-8">
    <ul class="flex">
        <li class="mr-6 border-b-4 border-black">
          <p class="text-blue-500 hover:text-blue-800 uppercase" href="#">All Productsssssssss</p>
        </li>
      </ul>
      
      <div class="grid grid-rows-3 grid-flow-col gap-2 mt-8">  
     
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img src="{{ $product->image }}">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
              <p class="text-xs">In {{ $product->category->name }}</p>
              <p class="text-gray-700 text-left pt-4">{{ $product->description}}</p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Quantity: <p class="inline-block">{{ $product->quantity }}</p></span>
              <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: <p class="inline-block">${{ number_format((float)$product->price, 2, '.', ''); }}</p></span>
              <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="{{ route('products.show', $product->id) }}">View more</a></span>
            </div>
          </div>

    </div>
</div> --}}


