# pith-pack-src-fallback
Pack resource fallback libraries for Pith

-------

# About

This project packs resource fallback libraries so that they can be used with the Pith Framework.

For info about MutationObserver, see the Git repo at https://github.com/megawac/MutationObserver.js.

For info about sri-fallback, see the Git repo at https://github.com/cyph/sri-fallback.

For info on Pith, see the Pith website at https://pith-framework.org/

# Install

Install to an existing Pith Framework project

Use Composer to install pack to the `vendor` folder.
```bash
php composer.phar require pith-front/pith-pack-src-fallback
```

Add new route to your Route List:

```php
public array $routes = [
    // Other routes....
    // ...
    
    // Add route to call src fallback resources from
    ['route', 'GET', '/resources/vendor/library/src-fallback/{filepath:.+}', '\\PithFront\\PithPackSrcFallback\\SrcFallbackResourceRoute'],
];
```

-------------


# Licensing Info

pith-pack-src-fallback contains MutationObserver and sri-fallback.

### MutationObserver
- MutationObserver
- The MIT License (MIT)
- Copyright © 2014 Graeme Yeates
- Link: https://github.com/megawac/MutationObserver.js

### sri-fallback
- sri-fallback 
- License: Simplified BSD License:
- Copyright (c) 2017, Cyph, Inc. 
- All rights reserved.
- Link: https://github.com/cyph/sri-fallback

### pith-pack-src-fallback
- pith-pack-src-fallback
- The MIT License (MIT)
- Copyright (c) Ian Maurmann
- Link: https://github.com/pith-front/pith-pack-src-fallback

-------------

Thanks!