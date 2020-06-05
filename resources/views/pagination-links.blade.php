@if ($paginator->hasPages())
    <ul class="flex justify-between">
        <!-- Prev -->
        @if ($paginator->onFirstPage())
            <li class="w-16 px-2 py-1 text-center bg-gray-500 border rounded cursor-not-allowed">
                Prev
            </li>
        @else
            <li wire:click="previousPage"
                class="w-16 px-2 py-1 text-center bg-white border rounded shadow cursor-pointer">
                Prev
            </li>
        @endif
    <!-- Prev end -->

        <!-- Numbers -->
        @foreach ($elements as $element)

            @if (is_array($element))
                <div class="flex">
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li wire:click="gotoPage({{ $page }})"
                                class="w-8 px-1 py-1 mx-1 text-center text-white bg-blue-500 border rounded shadow cursor-pointer">{{ $page }}</li>
                        @else
                            <li wire:click="gotoPage({{ $page }})"
                                class="w-8 px-1 py-1 mx-1 text-center bg-white border rounded shadow cursor-pointer">{{ $page }}</li>
                        @endif
                    @endforeach
                </div>
            @endif

        @endforeach
    <!-- Numbers end -->

        <!-- Next -->
        @if ($paginator->hasMorePages())
            <li wire:click="nextPage"
                class="w-16 px-2 py-1 text-center bg-white border rounded shadow cursor-pointer">
                Next
            </li>
        @else
            <li class="w-16 px-2 py-1 text-center bg-gray-500 border rounded cursor-not-allowed">
                Next
            </li>
    @endif
    <!-- Next end -->
    </ul>
@endif
