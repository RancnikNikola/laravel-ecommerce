<div>
    <div class="w-full mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            {{-- @if(count($cart['products']) > 0) --}}
                <table class="text-left w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"></th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Quantity</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($cart['products'] as $product) --}}
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <img src="#" alt="Product">
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">MacBook Pro 10</td>
                                <td class="py-4 px-6 border-b border-grey-light">$123.28</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="mt-2">
                                        <div class="flex items-center mt-1">

                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                          </button>
                                                <span class="text-gray-700 text-lg mx-2">1</span>
                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                           </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a wire:click="removeFromCart()" class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <img src="#" alt="Product">
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">MacBook Pro 10</td>
                                <td class="py-4 px-6 border-b border-grey-light">$123.28</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="mt-2">
                                        <div class="flex items-center mt-1">

                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                          </button>
                                                <span class="text-gray-700 text-lg mx-2">1</span>
                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                           </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a wire:click="removeFromCart()" class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
                                </td>
                            </tr>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <img src="#" alt="Product">
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">MacBook Pro 10</td>
                                <td class="py-4 px-6 border-b border-grey-light">$123.28</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="mt-2">
                                        <div class="flex items-center mt-1">

                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                          </button>
                                                <span class="text-gray-700 text-lg mx-2">1</span>
                                          <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                           </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a wire:click="removeFromCart()" class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                <div class="text-right w-full p-6">
                    <button wire:click="checkout()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Proceed to Checkout
                    </button>
                </div>
            {{-- @else --}}
                <div class="text-center w-full border-collapse p-6">
                    <span class="text-lg">Your cart is empty!</span>
                </div>
            {{-- @endif --}}
        </div>
    </div>
</div>