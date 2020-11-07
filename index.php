<!DOCTYPE html>
<html class="h-100">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="latin uzbek cyrillic converter. Транслитератор узбекского языка (латиница - кириллица - латиница) Ўзбек тили Лотин - Кирил - Лотин алифбоси транслитерацияси
      O‘zbek tili Lotin - Kiril - Lotin alifbosi transliteratsiyasi">
    <meta name="keywords" content="latin uzbek cyrillic converter, Транслитератор узбекского языка. латиница - кириллица - латиница. Ўзбек тили Лотин - Кирил, Lotin - Kiril - Lotin alifbosi transliteratsiyasi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>uzbek cyrillic - latin converter. Транслитератор узбекского языка. латиница - кириллица. Ўзбек тили Лотин - Кирил</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
  </head>
  <body class="d-flex flex-column h-100">
    <!-- header -->
    <header id="header">
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="https://uzhackersw.uz/" title="Главная" class="navbar-brand d-flex align-items-center">
          <strong>Lotin ktil konventor</strong>
          </a>
        </div>
      </div>
    </header>
    <!-- end header -->
    <main role="main" class="flex-shrink-0">
      <!--  content -->
      <!-- home -->
      <div class="container">
        <br>
        <form action="api.php" method="post" class="translit-form">
          <input type="hidden" name="translit" value="1">
          <div class="form-group">
            <div class="custom-radio-btn-group">
              <div class=" custom-control custom-control-lg custom-radio custom-control-inline">
                <input type="radio" id="variant-1-2" name="variant" class="custom-control-input" value="1-2" checked=""> 
                <label class="btn btn-outline-light" for="variant-1-2">Кирилл-Латин</label>
              </div>
              <div class=" custom-control custom-control-lg custom-radio custom-control-inline">
                <input type="radio" id="variant-2-1" name="variant" class="custom-control-input" value="2-1"> 
                <label class="btn btn-outline-light" for="variant-2-1">Латин-Кирилл</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="from-text">Введите текст (Макс. длина: 5000)</label>
                <textarea name="from_text" id="from-text" maxlength="5000" cols="30" rows="10" class="form-control"></textarea>
                <div class="form-text text-right text-muted" id="form-text-info">
                  <small id="from-text-current">0</small>/<small>5000</small>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-lg form-send-btn" type="submit">
                Конвертировать                        </button>
              </div>
              <br>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="to-text">Результат</label>
                <textarea name="to_text" id="to-text" cols="30" rows="10" class="form-control" readonly=""></textarea>
                <div class="form-text text-right text-muted" id="to-text-info">
                  <small>&nbsp;</small>
                </div>
              </div>
              <div class="form-group text-md-right">
                <button class="btn btn-primary btn-lg" type="button" data-copy="to-text" data-copied-text="Cкопировано">
                Cкопировать                        </button>
              </div>
              <br>
            </div>
          </div>
        </form>
      </div>
    </main>
    <script type="text/javascript" src="./css/vendor.js"></script>
    <script type="text/javascript" src="./css/main.js"></script>
  </body>
</html>