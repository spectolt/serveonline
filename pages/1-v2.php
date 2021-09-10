<?php
$areas = array('Odontologijos klinikos', 'Klinikos ir estetinės medicinos įstaigos', 'Veterinarijos klinikos', 'Reabilitacijos centrai', 'Sporto centrai', 'Grožio salonai ir kirpyklos', 'SPA ir masažo salonai', 'Autoservisų paslaugos', 'Patalpų valymo paslaugos');
$icons = array('../img/icons/odontology-color.svg', '../img/icons/clinic-color.svg', '../img/icons/vet-color.svg', '../img/icons/reabilitation-color.svg', '../img/icons/sport-color.svg', '../img/icons/beauty-color.svg', '../img/icons/spa-color.svg', '../img/icons/cars-color.svg', '../img/icons/clean-color.svg');
$colors = array('#F4F7FD', '#FDF4F6', '#F1FAF6', '#F1F9FA', '#FDF9F4', '#FDF5FB', '#FEFBF0', '#F3F5FB', '#F7F4FD');
$class = array('odontology', 'clinic', 'vet', 'reabilitation', 'sport', 'beauty', 'spa', 'cars', 'clean');
?>

<?php require_once('header-home.php'); ?>

<main class="site-main homepage">
    <section class="homepage__section hero-section">
        <div class="background">
            <div class="circle circle--1"></div>
            <div class="circle circle--2"></div>
        </div>
        <div class="hero-section__content">
            <h1>Atrask savo<br>geriausią specialistą!</h1>
            <h2>Įvairių paslaugų užsakymų registravimas nemokamai</h2>
            <div class="hero-section__areas">
                <?php for ($y = 0; $y < count($areas); $y++) { ?>
                    <div class="hero-section__areas-item hero-section__areas-item--<?php echo $class[$y] ?>">
                        <div class="hero-section__areas-icon" style="background-color: <?php echo $colors[$y] ?>; color: <?php echo $colors[$y] ?>">
                            <img src=<?php echo $icons[$y] ?> alt="" />
                        </div>
                        <h4><?php echo $areas[$y] ?></h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php require_once('footer-menu-homepage.php'); ?>
</main>

<?php require_once('footer.php'); ?>