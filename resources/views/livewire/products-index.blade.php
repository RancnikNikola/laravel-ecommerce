<div class="container mt-8">
    <ul class="flex">
        <li class="mr-6 border-b-4 border-black">
          <p class="text-blue-500 hover:text-blue-800 uppercase" href="#">All Products</p>
        </li>
      </ul>
      
      <div class="grid grid-rows-3 grid-flow-col gap-2 mt-8">  
        @foreach ($all_products as $product)      
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
              <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="{{ route('products.show', $product->name) }}">View more</a></span>
            </div>
          </div>
          @endforeach
    </div>
    <div class="my-8">
        {{ $all_products->links() }}
    </div>
</div>