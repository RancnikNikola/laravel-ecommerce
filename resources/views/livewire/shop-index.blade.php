<div class="container mt-8">
        <ul class="flex">
            <li class="mr-6 border-b-4 border-black">
              <a class="text-blue-500 hover:text-blue-800 uppercase" href="#">All Products</a>
            </li>
            <li class="mr-6">
              <a class="text-blue-500 hover:text-blue-800 text-xs" href="#">View more</a>
            </li>
          </ul>
          
          <div class="grid grid-rows-2 grid-flow-col gap-4 mt-8">  
            @foreach ($products as $product)      
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="{{ $product->image }}">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                  <p class="text-gray-700 text-left">{{ $product->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Quantity: <p class="inline-block">{{ $product->quantity }}</p></span>
                  <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: <p class="inline-block">${{ $product->price }}</p></span>
                  <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="#">View more</a></span>
                </div>
              </div>
              @endforeach
        </div>
</div>


<div class="container mt-8">
    <ul class="flex">
        <li class="mr-6 border-b-4 border-black">
          <a class="text-blue-500 hover:text-blue-800 uppercase" href="#">Electronics</a>
        </li>
        <li class="mr-6">
          <a class="text-blue-500 hover:text-blue-800 text-xs" href="#">View more</a>
        </li>
      </ul>
      <div class="grid grid-rows-2 grid-flow-col gap-4 mt-8">        
        @foreach ($products as $product)      
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img src="{{ $product->image }}">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
              <p class="text-gray-700 text-left">{{ $product->description}}</p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Quantity: <p class="inline-block">{{ $product->quantity }}</p></span>
              <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: <p class="inline-block">${{ $product->price }}</p></span>
              <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="#">View more</a></span>
            </div>
          </div>
          @endforeach
    </div>
</div>

<div class="container mt-8">
    <ul class="flex">
        <li class="mr-6 border-b-4 border-black">
          <a class="text-blue-500 hover:text-blue-800 uppercase" href="#">Fashion</a>
        </li>
        <li class="mr-6">
          <a class="text-blue-500 hover:text-blue-800 text-xs" href="#">View more</a>
        </li>
      </ul>
      <div class="grid grid-rows-2 grid-flow-col gap-4 mt-8">        
        @foreach ($products as $product)      
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="{{ $product->image }}">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                  <p class="text-gray-700 text-left">{{ $product->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Quantity: <p class="inline-block">{{ $product->quantity }}</p></span>
                  <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: <p class="inline-block">${{ $product->price }}</p></span>
                  <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="#">View more</a></span>
                </div>
              </div>
              @endforeach
    </div>
</div>

<div class="container mt-8">
    <ul class="flex">
        <li class="mr-6 border-b-4 border-black">
          <a class="text-blue-500 hover:text-blue-800 uppercase" href="#">Fitness</a>
        </li>
        <li class="mr-6">
          <a class="text-blue-500 hover:text-blue-800 text-xs" href="#">View more</a>
        </li>
      </ul>
    <div class="grid grid-rows-2 grid-flow-col gap-4 mt-8 mb-8">        
        @foreach ($products as $product)      
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img src="{{ $product->image }}">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                  <p class="text-gray-700 text-left">{{ $product->description}}</p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Quantity: <p class="inline-block">{{ $product->quantity }}</p></span>
                  <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Price: <p class="inline-block">${{ $product->price }}</p></span>
                  <span class="block bg-gray-200 rounded-full pl-4 text-sm font-semibold text-gray-900 mr-2 mb-2"><a href="#">View more</a></span>
                </div>
              </div>
              @endforeach
    </div>
</div>
