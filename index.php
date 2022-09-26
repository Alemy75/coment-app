<?php
include 'getting.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./assets/css/main.css" rel="stylesheet">
    <script src="./js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Comment App</title>
</head>

<body>
    <div id="app">
        <div class="section-wrap" id="wrapper">
            <div class="container">
                <div class="row">
                    <div class="content-wrap col-sm-4 mx-auto mb-5 mt-5">
                        <div class="card mb-3 mt-3">
                            <img src="./assets/img/img.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Безумно люблю делать фотографии, особенно, когда у меня это получается!</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Имя</label>
                            <input name="title" type="text" class="title form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Комментарий</label>
                            <input name="text" type="text" class="text form-control">
                        </div>
                        <button class="btn btn-primary">Отправить</button>
                        <hr />
                        <div class="item__container mb-3">
                            <?php foreach (array_reverse($get_data) as $g) : ?>
                                <div class="result mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $g->name; ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $g->date; ?></h6>
                                            <p class="card-text"><?php echo $g->comment; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./app.js"></script>
        <script>
            $(document).ready(function() {
                $('button.btn').on('click', function() {
                    var titleVal = $('input.title').val();
                    var textVal = $('input.text').val();

                    if (titleVal == '' || textVal == '') {
                        alert('Не все поля заполнены!');
                    } else {
                        $.ajax({
                            method: "POST",
                            url: "some.php",
                            data: {
                                title: titleVal,
                                text: textVal
                            }
                        })
                        window.location.reload();
                        done = function() {
                            alert('Комментарий добавлен!');
                        }
                        var titleVal = $('input.title').val('');
                        var textVal = $('input.text').val('');

                    }
                });
            })
        </script>
</body>

</html>