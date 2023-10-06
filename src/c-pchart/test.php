<?php

require 'vendor/autoload.php';

use CpChart\Data;
use CpChart\Image;

/* Créer et remplir l'objet Data */
$data = new Data();
for ($i = 0; $i <= 20; $i++) {
    $data->addPoints(rand(0, 20), "Sonde 1");
}
for ($i = 0; $i <= 20; $i++) {
    $data->addPoints(rand(0, 20), "Sonde 2");
}
$data->setSerieShape("Sonde 1", SERIE_SHAPE_FILLEDTRIANGLE);
$data->setSerieShape("Sonde 2", SERIE_SHAPE_FILLEDSQUARE);
$data->setAxisName(0, "Températures");

/* Créer l'objet Image */
$image = new Image(700, 230, $data);

/* Désactiver l'antialiasing */
$image->Antialias = false;

/* Ajouter une bordure à l'image */
$image->drawRectangle(0, 0, 699, 229, ["R" => 0, "G" => 0, "B" => 0]);

/* Écrire le titre du graphique */
$image->setFontProperties(["FontName" => "Forgotte.ttf", "FontSize" => 11]);
$image->drawText(150, 35, "Température moyenne", ["FontSize" => 20, "Align" => TEXT_ALIGN_BOTTOMMIDDLE]);

/* Définir la police par défaut */
$image->setFontProperties(["FontName" => "pf_arma_five.ttf", "FontSize" => 6]);

/* Définir la zone du graphique */
$image->setGraphArea(60, 40, 650, 200);

/* Dessiner l'échelle */
$scaleSettings = [
    "XMargin" => 10,
    "YMargin" => 10,
    "Floating" => true,
    "GridR" => 200,
    "GridG" => 200,
    "GridB" => 200,
    "DrawSubTicks" => true,
    "CycleBackground" => true
];
$image->drawScale($scaleSettings);

/* Activer l'antialiasing */
$image->Antialias = true;
$image->setShadow(true, ["X" => 1, "Y" => 1, "R" => 0, "G" => 0, "B" => 0, "Alpha" => 10]);

/* Dessiner le graphique */
$image->drawPlotChart();

/* Écrire la légende du graphique */
$image->drawLegend(580, 20, ["Style" => LEGEND_NOBORDER, "Mode" => LEGEND_HORIZONTAL]);

/* Enregistrer l'image générée */
$image->autoOutput("exemple.drawPlotChart.simple.png");