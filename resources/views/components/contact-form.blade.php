<div class="row">
    <div id="contact-form">
        @if (session('success'))
            <x-alert type="success">{{ session('success') }}</x-alert>
        @endif
        <h1>Contattaci</h1>
        <x-form :pid="$pid" />
    </div>
</div>
