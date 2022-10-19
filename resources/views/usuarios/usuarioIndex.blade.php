<x-main_template titulo="Inicio de sesión - Mariscos Cheos">
    
    <div class="container z-depth-1" style="margin-top:60px; padding:50px; border-radius:5px;">
        <div class="row">
            <form action="/usuario_SignIn" method="POST">
                @csrf
                <div class="row">
                    <img class="responsive-img" src="">
                    <h4 class="center">since 1989</h4>
                </div>
    
                <div class="row">
                    <div class="input-field col s12">
                        <label for="username">Nombre de usuario</label>
                        <input type="text" name="username" required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="input-field col s12">
                    <label for="password">Contraseña</label><br>
                        <input type="password" name="password" required>
                    </div>
                </div>  
                <div class="row">
                    <div class="center">
                        <input type="submit" value="Iniciar sesión" class="btn-large deep-orange lighten-2">
                        <p class="center">
                            No tienes una cuenta? <a href="/usuario/create" class="deep-orange-text lighten-2">Registrate aqui!</a>
                        </p>
                    </div>
                </div>
                
            </form>
        </div>
    </div>


</x-main_template>