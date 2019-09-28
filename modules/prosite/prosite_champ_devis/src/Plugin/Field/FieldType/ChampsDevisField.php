<?php

namespace Drupal\prosite_champ_devis\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'prosite_champ_devis' field type.
 *
 * @FieldType(
 *   id = "prosite_champ_devis",
 *   label = "prosite_champ_devis",
 *   description = "Ajout de champs devis permettant des ajouts multiples.",
 *   default_widget = "prosite_champ_devis_widget",
 *   default_formatter = "prosite_champ_devis_formatter",
 * )
 *
 */
class ChampsDevisField extends FieldItemBase
{

  /**
   * Defines field item properties.
   *
   * Properties that are required to constitute a valid, non-empty item should
   * be denoted with \Drupal\Core\TypedData\DataDefinition::setRequired().
   *
   * @return \Drupal\Core\TypedData\DataDefinitionInterface[]
   *   An array of property definitions of contained properties, keyed by
   *   property name.
   *
   * @see \Drupal\Core\Field\BaseFieldDefinition
   */
  public static function propertyDefinitions(\Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition)
  {
    $properties['designation'] = DataDefinition::create('string')
      ->setLabel('Désignation');
    $properties['quantite'] = DataDefinition::create('string')
      ->setLabel('Prénom');
    $properties['tva'] = DataDefinition::create('string')
      ->setLabel('TVA');
    $properties['pu'] = DataDefinition::create('string')
      ->setLabel('Prix Unitaire € HT');
    $properties['pt'] = DataDefinition::create('string')
      ->setLabel('Prix total € HT € HT');

    return $properties;
  }

  /**
   * Returns the schema for the field.
   *
   * This method is static because the field schema information is needed on
   * creation of the field. FieldItemInterface objects instantiated at that
   * time are not reliable as field settings might be missing.
   *
   * Computed fields having no schema should return an empty array.
   *
   * @param \Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition
   *   The field definition.
   *
   * @return array
   *   An empty array if there is no schema, or an associative array with the
   *   following key/value pairs:
   *   - columns: An array of Schema API column specifications, keyed by column
   *     name. The columns need to be a subset of the properties defined in
   *     propertyDefinitions(). The 'not null' property is ignored if present,
   *     as it is determined automatically by the storage controller depending
   *     on the table layout and the property definitions. It is recommended to
   *     avoid having the column definitions depend on field settings when
   *     possible. No assumptions should be made on how storage engines
   *     internally use the original column name to structure their storage.
   *   - unique keys: (optional) An array of Schema API unique key definitions.
   *     Only columns that appear in the 'columns' array are allowed.
   *   - indexes: (optional) An array of Schema API index definitions. Only
   *     columns that appear in the 'columns' array are allowed. Those indexes
   *     will be used as default indexes. Field definitions can specify
   *     additional indexes or, at their own risk, modify the default indexes
   *     specified by the field-type module. Some storage engines might not
   *     support indexes.
   *   - foreign keys: (optional) An array of Schema API foreign key
   *     definitions. Note, however, that the field data is not necessarily
   *     stored in SQL. Also, the possible usage is limited, as you cannot
   *     specify another field as related, only existing SQL tables,
   *     such as {taxonomy_term_data}.
   */
  public static function schema(\Drupal\Core\Field\FieldStorageDefinitionInterface $field_definition)
  {
    return [
      'columns' => [
        'designation' => [
          'description' => 'Désignation',
          'type' => 'varchar',
          'length' => 255,
        ],
        'quantite' => [
          'description' => 'Quantité',
          'type' => 'varchar',
          'length' => 255,
        ],
        'tva' => [
          'description' => 'TVA',
          'type' => 'varchar',
          'length' => 255,
        ],
        'pu' => [
          'description' => 'Prix Unitaire € HT',
          'type' => 'varchar',
          'length' => 255,
        ],
        'pt' => [
          'description' => 'Prix total € HT',
          'type' => 'varchar',
          'length' => 255,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty()
  {
    $designation = $this->get('designation')->getValue();
    $quantite = $this->get('quantite')->getValue();
    $tva = $this->get('tva')->getValue();
    $pu = $this->get('pu')->getValue();
    $pt = $this->get('pt')->getValue();
    return empty($designation) && empty($quantite) && empty($tva) && empty($pu) && empty($pt);
  }
}
