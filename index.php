<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="_img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Sistema web 2.0
            </a>
          </div>
        </nav>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Cadastro</a>
                    </li>
                    <li class="navbar-nav">
                      <a class="nav-link" href="consulta.php">Consulta</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <!-- HEAD HEADING HEAD CABECA -->
            <nav class="navbar bg-light">
              <div class="container-fluid">
                <span class="navbar-brand">Cadastro de usuários</span>
              </div>
            </nav>
          </div>
        </div>
        <div class="row">
            <div class="col">&nbsp;</div>
        </div>
        <div class="row">
             <div class="col">
                  <form class="row g-3">
                       <div class="col-md-6">
                         <label for="inputEmail4" class="form-label">Email</label>
                         <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                         <label for="inputPassword4" class="form-label">Senha</label>
                         <input type="password" class="form-control" id="inputPassword4">
                      </div>
                      <div class="col-md-6">
                         <label for="inputAddress" class="form-label">Endeço</label>
                         <input type="text" class="form-control" id="inputAddress">
                      </div>
                      <div class="col-md-6">
                         <label for="inputAddress2" class="form-label">Bairro</label>
                         <input type="text" class="form-control" id="inputAddress2">
                      </div>
                      <div class="col-md-6">
                         <label for="inputAddress2" class="form-label">Cep</label>
                         <input type="text" class="form-control" id="inputAddress2">
                      </div>
                      <div class="col-md-6">
                         <label for="inputCity" class="form-label">Cidade</label>
                         <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="col-md-4">
                         <label for="inputState" class="form-label">Estado</label>
                         <select id="InputState" class="form-select">
                               <option selected>Escolha...</option>
                            
 <option value="AC">AC</option>
<option value="AL">AL</option>
 <option value="AP">AP</option>
<option value="AM">AM</option>
<option value="BA">BA</option>
 <option value="CE">CE</option>
 <option value="ES">ES</option>
<option value="GO">GO</option>
 <option value="MA">MA</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="MG">MG</option>
<option value="PA">PA</option>
 <option value="PB">PB</option>
 <option value="PR">PR</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RS">RS</option>
<option value="RO">RO</option>
 <option value="RR">RR</option>
<option value="SC">SC</option>
<option value="SP">SP</option>
<option value="SE">SE</option>
<option value="TO">TO</option>
<option value="DF">DF</option>
                         </select>
                      </div>
                      <div class="col-12">
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                      </div>
                  </form>
             </div>
        </div>
      </div>
</body>

</html>