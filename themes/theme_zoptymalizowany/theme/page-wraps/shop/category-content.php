<?php
  $categoryProduct = get_field('kategoria_produktu', 'category_' . get_queried_object_id());


?>

<section class="category-content"
    <?php if (empty($categoryProduct['dlugi_opis'])) { echo 'style="display: none;"'; } ?>>
    <div class="container">
        <div class="row">
            <?php
         
$category = get_queried_object(); // Pobranie obiektu bieżącej kategorii
if (is_a($category, 'WP_Term')) { // Sprawdzenie czy bieżąca strona jest kategorią
    $category_name = $category->name; // Pobranie nazwy kategorii
    $category_description = $category->description; // Pobranie opisu kategorii
    if (!empty($category_name)) { // Sprawdzenie czy nazwa kategorii jest ustawiona
        echo '<h2>' . $category_name . '</h2>'; // Wyświetlenie nazwy kategorii w nagłówku h2
    }
 
}
?>

            <p> <?php echo $categoryProduct['dlugi_opis']; ?></p>
            <a href="#" class="button"><?php _e( 'Pokaż więcej ','slaviclabs' ); ?></a>
        </div>
    </div>

</section>