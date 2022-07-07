# flux-ilias-base-api

ILIAS Base Api

## Installation

### Non-Composer

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-ilias-base-api:%tag% /flux-ilias-base-api /%path%/libs/flux-ilias-base-api
```

or

```dockerfile
RUN (mkdir -p /%path%/libs/flux-ilias-base-api && cd /%path%/libs/flux-ilias-base-api && wget -O - https://github.com/flux-eco/flux-ilias-base-api/releases/download/%tag%/flux-ilias-base-api-%tag%-build.tar.gz | tar -xz --strip-components=1)
```

or

Download https://github.com/flux-eco/flux-ilias-base-api/releases/download/%tag%/flux-ilias-base-api-%tag%-build.tar.gz and extract it to `/%path%/libs/flux-ilias-base-api`

#### Usage

```php
require_once __DIR__ . "/%path%/libs/flux-ilias-base-api/autoload.php";
```

### Composer

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "flux/flux-ilias-base-api",
                "version": "%tag%",
                "dist": {
                    "url": "https://github.com/flux-eco/flux-ilias-base-api/releases/download/%tag%/flux-ilias-base-api-%tag%-build.tar.gz",
                    "type": "tar"
                },
                "autoload": {
                    "files": [
                        "autoload.php"
                    ]
                }
            }
        }
    ],
    "require": {
        "flux/flux-ilias-base-api": "*"
    }
}
```
