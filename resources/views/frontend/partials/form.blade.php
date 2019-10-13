<form action="/message/create" method="POST">
    @csrf
    <div class="field">
        <div class="control has-icons-left">
            <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : 'is-success'}}" placeholder="Name"
                name="name" value="{{ old('name') }}" required>
            @error('name')
            <p class="help is-danger">{{ $errors->first('name') }}</p>
            @enderror
            <span class="icon is-left">
                <i class="fa-lg fas fa-address-card"></i>
            </span>
        </div>

    </div>
    <div class="field">
        <div class="control has-icons-left">
            <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : 'is-success'}}" placeholder="Email"
                name="email" value="{{ old('email') }}" required>
            @error('email')
            <p class="help is-danger">{{ $errors->first('email') }}</p>
            @enderror
            <span class="icon is-left">
                <i class="fa-lg fas fa-envelope"></i>
            </span>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <textarea class="textarea {{ $errors->has('message') ? 'is-danger' : 'is-success'}}" is-large"
                placeholder="🤗 Your Message" rows="5" name="message" required>{{ old('message') }}</textarea>
            @error('message')
            <p class="help is-danger">{{ $errors->first('message') }}</p>
            @enderror
        </div>
    </div>
    <div class="center" style="padding-top: 3rem;">
        <button class="my-button button">send to me</button>
    </div>
</form>