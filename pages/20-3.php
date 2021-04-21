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

<div class="warning-popup-container">
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
                        <td>Tekstas</td>
                        <td>Vardas Pavardė</td>
                        <td>2021 12 23 15:30</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <div class="warning-popup__text-message">
                <h3>Pasirinktas tekstas siuntimui</h3>
                <textarea placeholder="Žinutė"></textarea>
            </div>
            <div class="warning-popup__button-container">
                <button class="orange transparent">Atšaukti</button>
                <button class="orange">Saugoti</button>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>