
<x-main_template titulo="Registrar usuario - Mariscos Cheos">
    

    
    <form action="/usuario" method="POST">
        @csrf
        
        <div class="container z-depth-1" style="margin-top:60px; padding:50px; border-radius:5px;">
            <div class="row">
                <div class="col s12 center">
                    <h5>Crear nuevo usuario</h5>
                </div>
            </div>
            <div class="row"></div>
            <div class="row">
                <label for="username">Nombre de usuario</label><br>
                <input type="text" name="username" required value="{{ old('username') }}" placeholder="Dan24..."><br>
                @error('username')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <label for="email">Correo electronico</label><br>
                <input type="email" name="email" required value="{{ old('email') }}" placeholder="Micorreo@ejemplo.com"><br>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="password">Contraseña</label><br>
                    <input type="password" name="password" required value="{{ old('password') }}"><br>
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror              
                </div>
                <div class="input-field col s6">
                    <label for="password_validate">Confirme su contraseña</label><br>
                    <input type="password" name="password_validate" required class="validate"><br><br>
                    @error('password_validate')
                        <p>Las contraseñas deben coincidir!</p>
                    @enderror 
                </div>
            </div>
            <div class="row center">
                <input type="submit" value="Registrame" class="btn-large deep-orange lighten-2">
            </div>
        </div>

    </form>
</x-main_template>

