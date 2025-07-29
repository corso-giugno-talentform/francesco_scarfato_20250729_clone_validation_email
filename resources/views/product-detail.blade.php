<x-template>
    <div class="container">
        <x-free-shipping />
        <x-top-menu />

        <div class="row">
            <div class="col-6">
                {{ $productId }}
            </div>

            <div class="col-6">
                <x-contact-form :pid="$productId" />
            </div>
        </div>

        <x-footer-menu />
    </div>
</x-template>
