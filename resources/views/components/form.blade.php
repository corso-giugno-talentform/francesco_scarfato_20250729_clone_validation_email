<form action="{{ route('send') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="firstname">Nome</label>
        <input id="firstname" class="form-control" name="firstname" type="text"
            placeholder="Inserisci il nome"
            value="{{ old('firstname')}}" />
        @error('firstname')
        <div class="alert alert-danger mt-2" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="lastname">Cognome</label>
        <input id="lastname" class="form-control" name="lastname" type="text"
            placeholder="Inserisci il cognome"
            value="{{ old('lastname')}}" />
        @error('lastname')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror

    </div>
    <div class="form-group">
        <label for="email">e-Mail</label>
        <input id="email" class="form-control" name="email" type="email"
            placeholder="Inserisci email"
            value="{{ old('email')}}" />
        @error('email')
        <div class="alert alert-danger mt-2" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="message">Commento</label>
        <textarea id="message" class="form-control"
            name="message"
            type="text"
            placeholder="Inserisci il tuo commento">{{ old('message')}}</textarea>
        @error('message')
        <div class="alert alert-danger mt-2" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    @isset($pid)
        <input type="hidden" name="pid" value="{{ $pid }}" />
    @endisset
    <button type="submit" class="btn btn-primary">Submit</button>
</form>