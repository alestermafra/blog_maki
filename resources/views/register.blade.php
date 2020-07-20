<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>
    <body>
		  <h1>Registro</h1>

      <form method="POST" action="{{ route('user.store') }}">
        @csrf
        
        <div>
          <label>Email</label>
          <input type="text" name="email" placeholder="Email">
        </div>

        <div>
          <label>Senha</label>
          <input type="password" name="password" placeholder="Password">
        </div>

        <input type="submit">
      </form>
    </body>
</html>
