<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOcy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar" style="background-color: #000;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DOcy</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <form method="POST">
                    <div>
                        <label for="input1" class="form-label">Pesquisa</label>
                        <input id="input1" name="input_search" class="form-control">
                    </div>
                    <button class="btn btn-warning" name="button_search">Pesquisar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>