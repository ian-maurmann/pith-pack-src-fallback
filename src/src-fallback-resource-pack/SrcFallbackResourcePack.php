<?php

/**
 * Src-Fallback Resource Pack
 * --------------------------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 * @noinspection PhpUnused                             - Ignore that pack_type is unused.
 */


declare(strict_types=1);

namespace PithFront\PithPackSrcFallback;

use Pith\Workflow\PithPack;

/**
 * Class SrcFallbackResourcePack
 */
class SrcFallbackResourcePack extends PithPack
{
    public string $access_level = 'world';
    public string $pack_type    = 'resource-pack';
}