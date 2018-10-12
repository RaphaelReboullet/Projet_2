{% block header %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>player</title>
    <link rel="stylesheet" href=".css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

</head>

{% endblock %}

{% block content %}

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-8">
            <img src="https://res.cloudinary.com/dnpr9xeop/image/upload/v1539193449/PROJET%202%20NEWTEAM/japon_reduit.png"
                 alt="logo_japan" class="logo_japan">
        </div>
        <div class="col-7 text-center">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row justify-content-center">
                <div class="col-md-7 col-6 offset-2">
                    <img src="https://res.cloudinary.com/dnpr9xeop/image/upload/v1539193458/PROJET%202%20NEWTEAM/olive_reduit.png"
                         alt="logo_japan" class="player_img">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-dark">
                <body>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                <tr>
                    <div class="col md-1">
                        <th>ex name</th>
                    </div>
                    <div class="col md-3"></div>
                    <th>ex Olive</th>
                    <th>
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Modifier</button>
                    </th>
                </tr>
                </body>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-12">
            <button type="button" class="btn btn-outline-dark btn-block text-center btn_del">Supprimer le joueur
            </button>
        </div>
    </div>
</div>
</body>

{% endblock %}

{% block footer %}

<footer>

</footer>

</html>

{% endblock %}