<!doctype html>

<html lang="lt" class="force-show-scrollbars">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Serve.lt</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Sen:wght@400;600;700;800&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css?v=1.1">

</head>

<div class="warning-popup-container hasTable">
    <div class="warning-popup controls">
        <div class="warning-popup__header">
            <h4>Siųsti SMS įmonių administratoriams</h4>
            <button class="warning-popup__close">
        </div>
        <div class="warning-popup__content warning-popup__content--message">
            <div class="warning-popup__inputs-container">
                <select data-placeholder="Pasirinkite temą" data-minimum-results-for-search="Infinity">
                    <option></option>
                    <option>Priminimas</option>
                    <option>Reklama</option>
                </select>
            </div>
            <div class="controls__table-container-wrapper">
                <div class="controls__table-container">
                    <table class="controls__table">
                        <thead>
                            <tr>
                                <th class="bottom-arrow top-arrow">Tema</th>
                                <th>Žinutės tekstas</th>
                                <th class="bottom-arrow top-arrow">Sukūrė</th>
                                <th class="bottom-arrow top-arrow">Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <tr>
                                    <td>Priminimas</td>
                                    <td><p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit sem, laoreet et feugiat sit amet, condimentum sit amet lacus. Nulla sapien nisi, consequat non tempor ac, imperdiet sit amet felis. Donec porta mollis scelerisque. Fusce diam augue, varius et pharetra ac, sagittis id felis. Cras non nulla id urna feugiat sollicitudin. Nunc massa sapien, efficitur ut ex sed, placerat faucibus leo. Etiam et dolor lacus. Aliquam erat volutpat. Nam maximus sapien sit amet magna tempor aliquet. Maecenas rutrum sem hendrerit, semper tellus at, suscipit nisl. Proin blandit, nibh quis faucibus viverra, enim metus blandit massa, eget posuere elit nulla vitae mi. Donec et justo et justo consectetur eleifend. Aenean vel urna libero. Nullam vulputate fermentum ipsum non tristique.</p></td>
                                    <td>Vardas Pavardė</td>
                                    <td>2021 12 23 15:30</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="warning-popup__text-message">
                <h3>Pasirinktas tekstas siuntimui</h3>
                <textarea placeholder="Žinutė"></textarea>
            </div>
            <div class="warning-popup__button-container">
                <button class="orange transparent warning-popup__button">Atšaukti</button>
                <button class="orange warning-popup__button warning-popup__button--send">Siųsti</button>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>