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
    <div class="warning-popup">
        <div class="warning-popup__header">
            <h4>Nauja SMS žinutė</h4>
            <button class="warning-popup__close">
        </div>
        <div class="warning-popup__content warning-popup__content--new-message">
            <div class="warning-popup__inputs-container">
                <select data-placeholder="Pasirinkite žinutės temą" data-minimum-results-for-search="Infinity">
                    <option></option>
                    <option>Patvirtinimas</option>
                    <option>Priminimas</option>
                    <option>Pasiūlymas</option>
                    <option>Reklama</option>
                </select>
                <select data-placeholder="Pasirinkite žinutės tipą" data-minimum-results-for-search="Infinity">
                    <option></option>
                    <option>Automatinė</option>
                    <option>Vienkartinė</option>
                </select>
                <select data-placeholder="Žinutės gavėjas" data-minimum-results-for-search="Infinity">
                    <option></option>
                    <option>Paslaugų gavėjas</option>
                    <option>Specialistas</option>
                    <option>Įmonės administratorius</option>
                    <option>Darbuotojas</option>
                </select>
            </div>
            <div class="warning-popup__textarea">
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