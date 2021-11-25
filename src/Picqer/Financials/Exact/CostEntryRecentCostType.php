<?php

namespace Picqer\Financials\Exact;

/**
 * Class CostEntryRecentCostType.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadProjectCostEntryRecentCostTypes
 *
 * @property string $ItemId Guid ID of the item used for hour entries
 * @property string $DateLastUsed The last date that the item has been used for hour entry
 * @property string $ItemDescription Description of item
 */
class CostEntryRecentCostType extends Model
{
    use Query\Findable;

    protected $primaryKey = 'ItemId';

    protected $fillable = [
        'ItemId',
        'DateLastUsed',
        'ItemDescription',
    ];

    protected $url = 'read/project/CostEntryRecentCostTypes';
}
