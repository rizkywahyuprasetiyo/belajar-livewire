<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="login">
                <div class="form-group my-3">
                    <label for="email" class="mb-2">Email</label>
                    <input type="email" wire:model="loginForm.email" id="email" class="form-control" placeholder="fulan@email.com" value="{{ old('email') }}">
                    @error('loginForm.email')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-3">
                    <label for="password" class="mb-2">Password</label>
                    <input type="password" wire:model="loginForm.password" id="password" class="form-control" placeholder="********" value="{{ old('password') }}">
                    @error('loginForm.password')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Login</button>
            </form>
        </div>
    </div>
</div>