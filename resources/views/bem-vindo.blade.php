Site da Aplicação

@auth
    
    <h1>Usuario Autenticado</h1>
    <p>ID: {{ Auth::user()->id }}</p>
    <p>Nome: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>


@endauth

<!-- guest é ao contrario do auth -->

@guest

    Olá visitante, Tudo bem?
    

@endguest