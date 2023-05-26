<?php error_reporting(-1);
$host = 'localhost';
$db = 'task-3';
$user = 'root';
$pass = '';
$charset = 'utf8';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass, $options);

$accordions = $pdo->query("SELECT `id`, `title`, `description`, `rating` FROM `accordions` ORDER BY `rating` DESC");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>задание 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
    <div class="flex-wrapper">
        <div class="description">
            <h2>На что рассчитывать при взыскании неустойки по ДДУ?</h2>
            <p>Когда застройщик нарушает сроки сдачи по ДДУ, вы как дольщик имеете право требовать неустойку за просрочку, а также компенсацию убытков, вызванных этой просрочкой.<br><br>
                Само собой, застройщику невыгодно добровольно выплачивать вам компенсацию. Когда дело доходит до суда, суд урезает сумму неустойки на основании ст. 333 ГК РФ. Это урезание практически неизбежно.<br><br>
                Основная наша задача состоит в том, чтобы взыскать неустойку по ДДУ в максимальном размере, т.е. избежать сильного ее урезания. Вот что вы можете требовать от застройщика.</p>
        </div>

        <div class="accordions">

            <?php foreach($accordions as $accordion): ?>
                <details>
                    <summary>
                        <?=$accordion["title"]; ?>
                        <div class="rating">
                            <?php if ($accordion["rating"] != null):?> <img src="img/star.png"> <?php endif;?>
                            <span><?=$accordion["rating"]; ?></span>
                        </div>
                    </summary>
                    <p><?=$accordion["description"]; ?></p>
                </details>

                <div class="rating-container">
                    <input class="rating-input" type="radio" id="star5_<?= $accordion['id'] ?>" name="<?= $accordion['id'] ?>" value="5" />
                    <label for="star5_<?= $accordion['id'] ?>" title="5 звёзд">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                        </svg>
                    </label>
                    <input class="rating-input" type="radio" id="star4_<?= $accordion['id'] ?>" name="<?= $accordion['id'] ?>" value="4" />
                    <label for="star4_<?= $accordion['id'] ?>" title="4 звёзды">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                        </svg>
                    </label>
                    <input class="rating-input" type="radio" id="star3_<?= $accordion['id'] ?>" name="<?= $accordion['id'] ?>" value="3" />
                    <label for="star3_<?= $accordion['id'] ?>" title="3 звёзды">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                        </svg>
                    </label>
                    <input class="rating-input" type="radio" id="star2_<?= $accordion['id'] ?>" name="<?= $accordion['id'] ?>" value="2" />
                    <label for="star2_<?= $accordion['id'] ?>" title="2 звёзды">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                        </svg>
                    </label>
                    <input class="rating-input" type="radio" id="star1_<?= $accordion['id'] ?>" name="<?= $accordion['id'] ?>" value="1" />
                    <label for="star1_<?= $accordion['id'] ?>" title="1 звёзда">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2026 1.84124C10.6661 0.930713 11.967 0.930713 12.4305 1.84124L14.143 5.20516C14.5547 6.01372 15.3386 6.56721 16.2383 6.68447L19.9582 7.16929C21.0134 7.30682 21.4251 8.61586 20.6387 9.33266L18.0657 11.6778C17.3602 12.3208 17.0386 13.2835 17.216 14.2214L17.8655 17.6545C18.0585 18.6747 16.9954 19.4719 16.0701 19.0007L12.5643 17.2157C11.7804 16.8165 10.8527 16.8165 10.0688 17.2157L6.56301 19.0007C5.63767 19.4719 4.57461 18.6747 4.76762 17.6545L5.41705 14.2214C5.59447 13.2835 5.27288 12.3208 4.56743 11.6778L1.9944 9.33266C1.20794 8.61585 1.61969 7.30682 2.67487 7.16929L6.39475 6.68447C7.29445 6.56721 8.07841 6.01372 8.49004 5.20516L10.2026 1.84124Z" stroke="#FFC700" stroke-width="1.5"/>
                        </svg>
                    </label>
                </div>



            <?php endforeach; ?>


        </div>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        var details = document.querySelectorAll("details");
        for(i=0;i<details.length;i++) {
            details[i].addEventListener("toggle", accordion);
        }
        function accordion(event) {
            if (!event.target.open) return;
            var details = event.target.parentNode.children;
            for(i=0;i<details.length;i++) {
                if (details[i].tagName != "DETAILS" || !details[i].hasAttribute('open') || event.target == details[i]) continue;
                details[i].removeAttribute("open");
            }
        }


        const reviews = document.querySelectorAll('.rating-input');
        reviews.forEach(review => {
            review.addEventListener('click', () => {
                var value = review.value;
                var id = review.name;
                $.get('index.php', {value: value, id: id}, function(data){
                    alert("Вы поставили оценку " + value);
                });
            });
        });

    </script>
</body>
</html>

<?php

    if (!empty($_GET['value']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $value = $_GET['value'];
        $pdo->query("UPDATE accordions SET `rating-count` = `rating-count` + 1, `rating-sum` = `rating-sum` + $value, `rating` = `rating-sum`/`rating-count` WHERE id = $id");
    }
?>