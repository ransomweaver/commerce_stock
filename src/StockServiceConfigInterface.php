<?php

namespace Drupal\commerce_stock;

interface StockServiceConfigInterface {

  /**
   * Get the primary location for automatic stock allocation.
   *
   * This is normally a designated location to act as the main warehouse.
   * However this can also be code working out in realtime the location relevant
   * at that time. To help support this we are including the quantity related to
   * the transaction.
   *
   * @param int $entity_id
   *   The purchasable entity ID.
   * @param int $quantity
   *    The quantity.
   *
   * @return int
   *   The location ID.
   */
  public function getPrimaryTransactionLocation($entity_id, $quantity);

  /**
   * Get a list of location relevant for the provided product.
   *
   * The product can be ignored. Any other contextual information like active
   * store/department/.. needs to be managed by the implementing class.
   *
   * @param int $entity_id
   *   The purchasable entity ID.
   *
   * @return array
   *   Array of relevant location IDs.
   */
  public function getLocationList($entity_id);

}
