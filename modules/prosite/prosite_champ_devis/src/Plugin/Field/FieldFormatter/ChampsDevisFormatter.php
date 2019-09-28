<?php

namespace Drupal\prosite_champ_devis\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'Contact' widget.
 *
 * @FieldFormatter(
 *   id = "prosite_champ_devis_formatter",
 *   label = "prosite_champ_devis",
 *   field_types = {
 *     "prosite_champ_devis"
 *   }
 * )
 */
class ChampsDevisFormatter extends FormatterBase {

  /**
   * Builds a renderable array for a field value.
   *
   * @param \Drupal\Core\Field\FieldItemListInterface $items
   *   The field values to be rendered.
   * @param string $langcode
   *   The language that should be used to render the field.
   *
   * @return array
   *   A renderable array for $items, as an array of child elements keyed by
   *   consecutive numeric indexes starting from 0.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {

    $elements = [];
    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#theme' => 'prosite_champ_devis',
        '#designation' => $item->designation,
        '#quantite' => $item->quantite,
        '#tva' => $item->tva,
        '#pu' => $item->pu,
        '#pt' => $item->pt,
      ];
    }
    return $elements;
  }
}
